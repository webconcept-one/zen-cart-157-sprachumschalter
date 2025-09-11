<?php
/**
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: pilouJP 2025 Nov 11 added in v2.2.0-alpha $
 */
if (!defined('HEADER_LANGUAGES_DISPLAY') || !defined('HEADER_CURRENCIES_DISPLAY')) {
    if (!defined('HEADER_LANGUAGES_DISPLAY')) {
        $sql = "INSERT INTO " . TABLE_CONFIGURATION . "
               SET configuration_key = 'HEADER_LANGUAGES_DISPLAY',
                   configuration_title = 'Show Languages in Header?',
                   configuration_value = 'true',
                   configuration_description = 'Display the Languages flags/links in Header?' ,
                   configuration_group_id = 19,
                   sort_order =  170,
                   date_added = now(),
                   set_function = 'zen_cfg_select_option([\'true\', \'false\'], '
               ";
        $result = $db->execute($sql);
  }
    if (!defined('HEADER_CURRENCIES_DISPLAY')) {
        $sql = "INSERT INTO " . TABLE_CONFIGURATION . "
               SET configuration_key = 'HEADER_CURRENCIES_DISPLAY',
                   configuration_title = 'Show Currencies in Header?',
                   configuration_value = 'true',
                   configuration_description = 'Display the Currencies symbols/links in Header?',
                   configuration_group_id = 19,
                   sort_order =  171,
                   date_added = now(),
                   set_function = 'zen_cfg_select_option([\'true\', \'false\'], '
               ";
        $result = $db->execute($sql);
    }
}
