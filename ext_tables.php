<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$extensionUtilityClass = class_exists('Tx_Extbase_Utility_Extension') ? 'Tx_Extbase_Utility_Extension' : '\TYPO3\CMS\Extbase\Utility\ExtensionUtility';
$extensionUtilityClass::registerPlugin(
	'SBF.' . $_EXTKEY,
	'Searchbox',
	'Ajax-Solr: Search box'
);

$extensionUtilityClass::registerPlugin(
	'SBF.' . $_EXTKEY,
	'Resultlist',
	'Ajax-Solr: Result list'
);

$extensionManagementClass = class_exists('t3lib_extMgm') ? 't3lib_extMgm' : '\TYPO3\CMS\Core\Utility\ExtensionManagementUtility';
$extensionManagementClass::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'AjaxSolr');
