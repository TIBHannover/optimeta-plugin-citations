<?php
namespace Optimeta\Citations\Enrich;

use Application;
use Optimeta\Citations\Model\CitationModel;
use Optimeta\Shared\Pid\Doi;
use Optimeta\Shared\WikiData\WikiDataBase;
use OptimetaCitationsPlugin;

class WikiData
{
    /**
     * @desc Get information from Wikidata and return as CitationModel
     * @param CitationModel $citation
     * @return CitationModel
     */
    public function getItem(CitationModel $citation): CitationModel
    {
        $plugin = new OptimetaCitationsPlugin();
        $context = Application::get()->getRequest()->getContext();
        $contextId = $context ? $context->getId() : CONTEXT_SITE;

        $objDoi = new Doi();
        $doi = $objDoi->removePrefixFromUrl($citation->doi);
        $wikiData = new WikiDataBase();
        $wikiDataQid = $wikiData->getEntity($doi);
        $doiWD = '';
        if(!empty($wikiDataQid)) { $doiWD = $wikiData->getDoi($wikiDataQid); }
        if(strtolower($doi) == strtolower($doiWD)) {
            $citation->wikidata_qid = $wikiDataQid; }

        return $citation;
    }
}