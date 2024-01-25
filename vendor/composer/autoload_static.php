<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit205e7fc175dbc92c2ca8148adbc3ad81
{
    public static $classMap = array (
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Components\\Forms\\PublicationForm' => __DIR__ . '/../..' . '/classes/Components/Forms/PublicationForm.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Components\\Forms\\SettingsForm' => __DIR__ . '/../..' . '/classes/Components/Forms/SettingsForm.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\DataModels\\AuthorModel' => __DIR__ . '/../..' . '/classes/DataModels/AuthorModel.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\DataModels\\CitationModel' => __DIR__ . '/../..' . '/classes/DataModels/CitationModel.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\DataModels\\WorkModel' => __DIR__ . '/../..' . '/classes/DataModels/WorkModel.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Db\\CitationsExtended' => __DIR__ . '/../..' . '/classes/Db/CitationsExtended.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Db\\CitationsExtendedDAO' => __DIR__ . '/../..' . '/classes/Db/CitationsExtendedDAO.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Db\\PluginDAO' => __DIR__ . '/../..' . '/classes/Db/PluginDAO.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Db\\PluginMigration' => __DIR__ . '/../..' . '/classes/Db/PluginMigration.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Deposit\\Wikidata' => __DIR__ . '/../..' . '/classes/Deposit/WikiData.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Frontend\\Article' => __DIR__ . '/../..' . '/classes/Frontend/Article.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\GitHub\\Api' => __DIR__ . '/../..' . '/classes/GitHub/Api.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Handler\\DepositorHandler' => __DIR__ . '/../..' . '/classes/Handler/DepositorHandler.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Handler\\EnricherHandler' => __DIR__ . '/../..' . '/classes/Handler/EnricherHandler.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Handler\\ParserHandler' => __DIR__ . '/../..' . '/classes/Handler/ParserHandler.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Handler\\PluginAPIHandler' => __DIR__ . '/../..' . '/classes/Handler/PluginAPIHandler.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Helpers\\ClassHelper' => __DIR__ . '/../..' . '/classes/Helpers/ClassHelper.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Helpers\\LogHelper' => __DIR__ . '/../..' . '/classes/Helpers/LogHelper.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\OpenAlex\\Api' => __DIR__ . '/../..' . '/classes/OpenAlex/Api.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\OpenAlex\\DataModels\\Author' => __DIR__ . '/../..' . '/classes/OpenAlex/DataModels/Author.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\OpenAlex\\DataModels\\Venue' => __DIR__ . '/../..' . '/classes/OpenAlex/DataModels/Venue.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\OpenAlex\\DataModels\\Work' => __DIR__ . '/../..' . '/classes/OpenAlex/DataModels/Work.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\OpenAlex\\Enrich' => __DIR__ . '/../..' . '/classes/OpenAlex/Enrich.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\OpenCitations\\Api' => __DIR__ . '/../..' . '/classes/OpenCitations/Api.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\OpenCitations\\DataModels\\WorkCitation' => __DIR__ . '/../..' . '/classes/OpenCitations/DataModels/WorkCitation.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\OpenCitations\\DataModels\\WorkMetaData' => __DIR__ . '/../..' . '/classes/OpenCitations/DataModels/WorkMetaData.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\OpenCitations\\Deposit' => __DIR__ . '/../..' . '/classes/OpenCitations/Deposit.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Orcid\\Api' => __DIR__ . '/../..' . '/classes/Orcid/Api.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Orcid\\DataModels\\Author' => __DIR__ . '/../..' . '/classes/Orcid/DataModels/Author.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Orcid\\Enrich' => __DIR__ . '/../..' . '/classes/Orcid/Enrich.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\PID\\Arxiv' => __DIR__ . '/../..' . '/classes/PID/Arxiv.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\PID\\Doi' => __DIR__ . '/../..' . '/classes/PID/Doi.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\PID\\Handle' => __DIR__ . '/../..' . '/classes/PID/Handle.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\PID\\OpenAlex' => __DIR__ . '/../..' . '/classes/PID/OpenAlex.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\PID\\Orcid' => __DIR__ . '/../..' . '/classes/PID/Orcid.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\PID\\Ror' => __DIR__ . '/../..' . '/classes/PID/Ror.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\PID\\Url' => __DIR__ . '/../..' . '/classes/PID/Url.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\PID\\Urn' => __DIR__ . '/../..' . '/classes/PID/Urn.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\PID\\Wikidata' => __DIR__ . '/../..' . '/classes/PID/Wikidata.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Wikidata\\Api' => __DIR__ . '/../..' . '/classes/Wikidata/Api.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Wikidata\\DataModels\\Article' => __DIR__ . '/../..' . '/classes/Wikidata/DataModels/Article.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Wikidata\\DataModels\\Author' => __DIR__ . '/../..' . '/classes/Wikidata/DataModels/Author.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Wikidata\\DataModels\\Language' => __DIR__ . '/../..' . '/classes/Wikidata/DataModels/Language.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Wikidata\\DataModels\\Property' => __DIR__ . '/../..' . '/classes/Wikidata/DataModels/Property.php',
        'APP\\plugins\\generic\\optimetaCitations\\classes\\Wikidata\\Enrich' => __DIR__ . '/../..' . '/classes/Wikidata/Enrich.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DepositorTask' => __DIR__ . '/../..' . '/classes/ScheduledTasks/DepositorTask.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit205e7fc175dbc92c2ca8148adbc3ad81::$classMap;

        }, null, ClassLoader::class);
    }
}
