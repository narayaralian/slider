<?php
defined('TYPO3_MODE') || die();
/* 
 * add the content element to the "Type" dropdown,
 * where you can select the type of content element
 */


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',        
    [
        0 => 'My slider',
        1 => 'my_slider',
        2 => 'my_slider'
    ],
    'header',
    'after'
);
