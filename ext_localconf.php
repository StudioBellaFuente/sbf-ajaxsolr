<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SBF.' . $_EXTKEY,
	'Searchbox',
	array(
		'Default' => 'searchBox',
		
	),
	// non-cacheable actions
	array(
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SBF.' . $_EXTKEY,
	'Resultlist',
	array(
		'Default' => 'resultList',
		
	),
	// non-cacheable actions
	array(
		
	)
);
