<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$extensionUtilityClass = class_exists('Tx_Extbase_Utility_Extension') ? 'Tx_Extbase_Utility_Extension' : '\TYPO3\CMS\Extbase\Utility\ExtensionUtility';
$extensionUtilityClass::configurePlugin(
	'SBF.' . $_EXTKEY,
	'Searchbox',
	array(
		'Default' => 'searchBox',
		
	),
	// non-cacheable actions
	array(
		
	)
);

$extensionUtilityClass::configurePlugin(
	'SBF.' . $_EXTKEY,
	'Resultlist',
	array(
		'Default' => 'resultList',
		
	),
	// non-cacheable actions
	array(
		
	)
);
