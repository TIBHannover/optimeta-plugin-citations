<?php
/**
 * @file classes/External/OpenAlex/Api.php
 *
 * @copyright (c) 2021+ TIB Hannover
 * @copyright (c) 2021+ Gazi Yücel
 * @license Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OpenAlexBase
 * @brief OpenAlex Api class
 */

namespace APP\plugins\generic\citationManager\classes\External\OpenAlex;

use APP\plugins\generic\citationManager\classes\External\ApiAbstract;
use Application;
use GuzzleHttp\Client;

class Api extends ApiAbstract
{
    /** @copydoc ApiAbstract::__construct */
    function __construct(?array $args = [])
    {
        $args['url'] = Constants::apiUrl;
        parent::__construct($args);

        $this->httpClient = new Client(
            [
                'headers' => [
                    'User-Agent' => Application::get()->getName() . '/' . CITATION_MANAGER_PLUGIN_NAME,
                    'Accept' => 'application/json'],
                'verify' => false
            ]
        );
    }

    /**
     * Retrieves information about a work from the OpenAlex API based on DOI.
     *
     * @param string $doi The Digital Object Identifier (DOI) to retrieve information for.
     * @return array The response body as an associative array.
     */
    public function getWork(string $doi): array
    {
        if(empty($doi)) return [];

        return $this->apiRequest('GET', $this->url . '/works/doi:' . $doi, []);
    }

    /**
     * Retrieves information about a work from the OpenAlex API based on DOI.
     *
     * @param string $issn The International Standard Serial Number (ISSN) to retrieve information for.
     * @return array The response body as an associative array.
     */
    public function getSource(string $issn): array
    {
        if(empty($issn)) return [];

        return $this->apiRequest('GET', $this->url . '/sources/issn:' . $issn, []);
    }
}
