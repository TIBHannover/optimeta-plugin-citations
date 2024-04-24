<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad8cde92b9ea5aa78548b987215b52b8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\plugins\\generic\\citationManager\\classes\\' => 44,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\plugins\\generic\\citationManager\\classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'APP\\plugins\\generic\\citationManager\\classes\\DataModels\\Citation\\AuthorModel' => __DIR__ . '/../..' . '/classes/DataModels/Citation/AuthorModel.php',
        'APP\\plugins\\generic\\citationManager\\classes\\DataModels\\Citation\\CitationModel' => __DIR__ . '/../..' . '/classes/DataModels/Citation/CitationModel.php',
        'APP\\plugins\\generic\\citationManager\\classes\\DataModels\\MetadataAuthor' => __DIR__ . '/../..' . '/classes/DataModels/MetadataAuthor.php',
        'APP\\plugins\\generic\\citationManager\\classes\\DataModels\\MetadataJournal' => __DIR__ . '/../..' . '/classes/DataModels/MetadataJournal.php',
        'APP\\plugins\\generic\\citationManager\\classes\\DataModels\\MetadataPublication' => __DIR__ . '/../..' . '/classes/DataModels/MetadataPublication.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Db\\PluginDAO' => __DIR__ . '/../..' . '/classes/Db/PluginDAO.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Db\\PluginSchema' => __DIR__ . '/../..' . '/classes/Db/PluginSchema.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\ApiAbstract' => __DIR__ . '/../..' . '/classes/External/ApiAbstract.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Crossref\\Api' => __DIR__ . '/../..' . '/classes/External/Crossref/Api.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\DataCite\\Api' => __DIR__ . '/../..' . '/classes/External/DataCite/Api.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\ExecuteAbstract' => __DIR__ . '/../..' . '/classes/External/ExecuteAbstract.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\GitHub\\Api' => __DIR__ . '/../..' . '/classes/External/GitHub/Api.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\GitHub\\DataModels\\Issue' => __DIR__ . '/../..' . '/classes/External/GitHub/DataModels/Issue.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\OpenAlex\\Api' => __DIR__ . '/../..' . '/classes/External/OpenAlex/Api.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\OpenAlex\\DataModels\\Mappings' => __DIR__ . '/../..' . '/classes/External/OpenAlex/DataModels/Mappings.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\OpenAlex\\Inbound' => __DIR__ . '/../..' . '/classes/External/OpenAlex/Inbound.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\OpenCitations\\Api' => __DIR__ . '/../..' . '/classes/External/OpenCitations/Api.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\OpenCitations\\Constants' => __DIR__ . '/../..' . '/classes/External/OpenCitations/Constants.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\OpenCitations\\DataModels\\WorkCitingCited' => __DIR__ . '/../..' . '/classes/External/OpenCitations/DataModels/WorkCitingCited.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\OpenCitations\\DataModels\\WorkMetaData' => __DIR__ . '/../..' . '/classes/External/OpenCitations/DataModels/WorkMetaData.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\OpenCitations\\Outbound' => __DIR__ . '/../..' . '/classes/External/OpenCitations/Outbound.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Orcid\\Api' => __DIR__ . '/../..' . '/classes/External/Orcid/Api.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Orcid\\DataModels\\Mappings' => __DIR__ . '/../..' . '/classes/External/Orcid/DataModels/Mappings.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Orcid\\Inbound' => __DIR__ . '/../..' . '/classes/External/Orcid/Inbound.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Wikidata\\Api' => __DIR__ . '/../..' . '/classes/External/Wikidata/Api.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Wikidata\\Constants' => __DIR__ . '/../..' . '/classes/External/Wikidata/Constants.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Wikidata\\DataModels\\Claim' => __DIR__ . '/../..' . '/classes/External/Wikidata/DataModels/Claim.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Wikidata\\DataModels\\Language' => __DIR__ . '/../..' . '/classes/External/Wikidata/DataModels/Language.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Wikidata\\DataModels\\Property' => __DIR__ . '/../..' . '/classes/External/Wikidata/DataModels/Property.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Wikidata\\Inbound' => __DIR__ . '/../..' . '/classes/External/Wikidata/Inbound.php',
        'APP\\plugins\\generic\\citationManager\\classes\\External\\Wikidata\\Outbound' => __DIR__ . '/../..' . '/classes/External/Wikidata/Outbound.php',
        'APP\\plugins\\generic\\citationManager\\classes\\FrontEnd\\ArticleView' => __DIR__ . '/../..' . '/classes/FrontEnd/ArticleView.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Handlers\\DepositHandler' => __DIR__ . '/../..' . '/classes/Handlers/DepositHandler.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Handlers\\PluginAPIHandler' => __DIR__ . '/../..' . '/classes/Handlers/PluginAPIHandler.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Handlers\\ProcessHandler' => __DIR__ . '/../..' . '/classes/Handlers/ProcessHandler.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Helpers\\ArrayHelper' => __DIR__ . '/../..' . '/classes/Helpers/ArrayHelper.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Helpers\\ClassHelper' => __DIR__ . '/../..' . '/classes/Helpers/ClassHelper.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Helpers\\LogHelper' => __DIR__ . '/../..' . '/classes/Helpers/LogHelper.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Helpers\\StringHelper' => __DIR__ . '/../..' . '/classes/Helpers/StringHelper.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\AbstractPid' => __DIR__ . '/../..' . '/classes/PID/AbstractPid.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\Arxiv' => __DIR__ . '/../..' . '/classes/PID/Arxiv.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\Doi' => __DIR__ . '/../..' . '/classes/PID/Doi.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\GitHubIssue' => __DIR__ . '/../..' . '/classes/PID/GitHubIssue.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\Handle' => __DIR__ . '/../..' . '/classes/PID/Handle.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\OpenAlex' => __DIR__ . '/../..' . '/classes/PID/OpenAlex.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\OpenCitations' => __DIR__ . '/../..' . '/classes/PID/OpenCitations.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\Orcid' => __DIR__ . '/../..' . '/classes/PID/Orcid.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\Ror' => __DIR__ . '/../..' . '/classes/PID/Ror.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\Url' => __DIR__ . '/../..' . '/classes/PID/Url.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\Urn' => __DIR__ . '/../..' . '/classes/PID/Urn.php',
        'APP\\plugins\\generic\\citationManager\\classes\\PID\\Wikidata' => __DIR__ . '/../..' . '/classes/PID/Wikidata.php',
        'APP\\plugins\\generic\\citationManager\\classes\\ScheduledTasks\\DepositTask' => __DIR__ . '/../..' . '/classes/ScheduledTasks/DepositTask.php',
        'APP\\plugins\\generic\\citationManager\\classes\\ScheduledTasks\\ProcessTask' => __DIR__ . '/../..' . '/classes/ScheduledTasks/ProcessTask.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Settings\\Actions' => __DIR__ . '/../..' . '/classes/Settings/Actions.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Settings\\ConfigurationForm' => __DIR__ . '/../..' . '/classes/Settings/ConfigurationForm.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Settings\\Manage' => __DIR__ . '/../..' . '/classes/Settings/Manage.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Settings\\PluginConfig' => __DIR__ . '/../..' . '/classes/Settings/PluginConfig.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Settings\\StatusForm' => __DIR__ . '/../..' . '/classes/Settings/StatusForm.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Workflow\\SubmissionWizard' => __DIR__ . '/../..' . '/classes/Workflow/SubmissionWizard.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Workflow\\WorkflowForm' => __DIR__ . '/../..' . '/classes/Workflow/WorkflowForm.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Workflow\\WorkflowSave' => __DIR__ . '/../..' . '/classes/Workflow/WorkflowSave.php',
        'APP\\plugins\\generic\\citationManager\\classes\\Workflow\\WorkflowTab' => __DIR__ . '/../..' . '/classes/Workflow/WorkflowTab.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad8cde92b9ea5aa78548b987215b52b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad8cde92b9ea5aa78548b987215b52b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitad8cde92b9ea5aa78548b987215b52b8::$classMap;

        }, null, ClassLoader::class);
    }
}
