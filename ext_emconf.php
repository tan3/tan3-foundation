<?php
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Foundation Template',
    'description' => 'Foundation Template',
    'category' => 'Default',
    'author' => 'tan3 GbR',
    'author_email' => 'info@tan3.de',
    'author_company' => 'tan3',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.0.0-8.99.99',
            'extbase' => '',
            'fluid' => '',
            'fluid_styled_content' => '',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
