<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'SBF.' . $_EXTKEY,
	'Searchbox',
	'Ajax-Solr: Search box'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'SBF.' . $_EXTKEY,
	'Resultlist',
	'Ajax-Solr: Result list'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'AjaxSolr');
