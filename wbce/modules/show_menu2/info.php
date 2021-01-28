<?php
/**
 * WBCE CMS
 * Way Better Content Editing.
 * Visit https://wbce.org to learn more and to join the community.
 *
 * @copyright Ryan Djurovich (2004-2009)
 * @copyright WebsiteBaker Org. e.V. (2009-2015)
 * @copyright WBCE Project (2015-)
 * @license GNU GPL2 (or any later version)
 */

$module_directory = 'show_menu2';
$module_name = 'show_menu2';
$module_function = 'snippet';
$module_version = '4.13.5';
$module_platform = '1.4.0';
$module_author = 'Brodie Thiesfield, Manuela v.d.Decken, Norbert Heimsath, Christian M. Stefan, Bernd Michna';
$module_license = 'GNU General Public License v2';
$module_description = 'A code snippet for the WBCE CMS providing menu functions. See the <a href="' .WB_URL .'/modules/show_menu2/README.en.txt" target="_blank">readme</a> file or view <a href="https://sm2.wbce-cms.org/" target="_blank">sm2.wbce-cms.org</a>.';
$module_level = 'core';

/**
 * Version history
 * 4.13.5 - Restore SM2_DEBUG switch (Florian)
 * 4.13.4 - Fix performance issue with CORRECT_MENU_LINKS (Bernd)
 * 4.13.3 - MYSQL_ASSOC -> MYSQLI_ASSOC (Bernd)
 * 4.13.2
 *        - Add module_level core status
 *        - Update module_platform
 *		  - Update readme files
 *
 * 4.13.1
 *        - some fixes for previous changes
 *
 * 4.13
 *        - SM2_CORRECT_MENU_LINKS check corrected
 *        - apply is_countable() instead of is_array
 *        - Replace URLs generated by the menu_link module with real URLs
 *
 **/
