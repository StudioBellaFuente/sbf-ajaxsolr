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

$extensionUtilityClass::configurePlugin(
    $extensionRegisterKey,
    'Searchbox',
    array(
        'Default' => 'searchBox',

    ),
    // non-cacheable actions
    array()
);

$extensionUtilityClass::configurePlugin(
    $extensionRegisterKey,
    'Resultlist',
    array(
        'Default' => 'resultList',

    ),
    // non-cacheable actions
    array()
);
