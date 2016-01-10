<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$extensionUtilityClass = '\TYPO3\CMS\Extbase\Utility\ExtensionUtility';
$extensionRegisterKey = 'SBF.' . $_EXTKEY;

# compatibility to TYPO3 4.5.*
if (class_exists('Tx_Extbase_Utility_Extension')) {
    $extensionUtilityClass = 'Tx_Extbase_Utility_Extension';
    $extensionRegisterKey = $_EXTKEY;
}

$extensionUtilityClass::registerPlugin(
    $extensionRegisterKey,
	'Searchbox',
	'Ajax-Solr: Search box'
);

$extensionUtilityClass::registerPlugin(
    $extensionRegisterKey,
	'Resultlist',
	'Ajax-Solr: Result list'
);

$extensionManagementClass = class_exists('t3lib_extMgm') ? 't3lib_extMgm' : '\TYPO3\CMS\Core\Utility\ExtensionManagementUtility';
$extensionManagementClass::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'AjaxSolr');
