<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (isset($GLOBALS['TCA']['tt_content'])) {
  $fields = array(
    'header_position_vertical' => array(
      'label' => 'LLL:EXT:tan3_foundation/Resources/Private/FluidStyledContent/Language/locallang_db.xlf:tt_content.header_position_vertical',
      'exclude' => 1,
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          [ 'Default', 0 ],
          [ 'Intext', 1 ],
        ],
        'default' => 0,
      ]
    ),
  );

  ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    $fields
  );

  ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'headers',
    'header_position_vertical',
    'after:header_position'
  );
}

unset($fields);
