<?php

/* 
 * Add an entry in the static template list found in sys_templates for static TS
 */

// Add an entry in the static template list found in sys_templates for static TS
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
   'ny_slider',
   'Configuration/TypoScript',
   'Add a slider as a custom content element'
);