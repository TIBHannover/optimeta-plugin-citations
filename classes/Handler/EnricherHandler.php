<?php
/**
 * @file plugins/generic/optimetaCitations/classes/Handler/EnricherHandler.php
 *
 * Copyright (c) 2021+ TIB Hannover
 * Copyright (c) 2021+ Gazi Yucel
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class EnricherHandler
 * @ingroup plugins_generic_optimetacitations
 *
 * @brief EnricherHandler class
 */

namespace APP\plugins\generic\optimetaCitations\classes\Handler;

use APP\plugins\generic\optimetaCitations\classes\DataModels\CitationModel;
use APP\plugins\generic\optimetaCitations\OptimetaCitationsPlugin;

class EnricherHandler
{
    /**
     * @var OptimetaCitationsPlugin
     */
    public OptimetaCitationsPlugin $plugin;

    public function __construct(OptimetaCitationsPlugin $plugin)
    {
        $this->plugin = $plugin;
    }

    /**
     * Enrich citations and save results to citations
     *
     * @param array $citationsParsed
     * @return array
     */
    public function executeAndReturnCitations(array $citationsParsed): array
    {
        $citations = [];

        // return if input is empty
        if (sizeof($citationsParsed) == 0) return $citations;


        // loop through citations and enrich every citation
        foreach ($citationsParsed as $index => $row) {
            // skip if not object nor array
            if (!is_object($row) && !is_array($row)) continue;

            $citation = new CitationModel();

            // convert array to object
            foreach ($row as $key => $value) {
                if (property_exists($citation, $key)) $citation->$key = $value;
            }

            error_log( '$citation->doi: ' . $citation->doi . '|' . '$citation->isProcessed: ' . $citation->isProcessed);

            // skip iteration if isProcessed or DOI empty
            if ($citation->isProcessed || empty($citation->doi)) {
                $citations[] = (array)$citation;
                continue;
            }

            // OpenAlex Work
            $objOpenAlex = new \APP\plugins\generic\optimetaCitations\classes\OpenAlex\Enrich($this->plugin);
            $citation = $objOpenAlex->getEnriched($citation);

            // Wikidata
            $objWikidata = new \APP\plugins\generic\optimetaCitations\classes\Wikidata\Enrich($this->plugin);
            $citation = $objWikidata->getEnriched($citation);

            // Orcid
            $objOrcid = new \APP\plugins\generic\optimetaCitations\classes\Orcid\Enrich($this->plugin);
            $citation = $objOrcid->getEnriched($citation);

            // push to citations enriched array
            $citations[] = (array)$citation;
        }

        return $citations;
    }
}
