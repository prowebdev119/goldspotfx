<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty cat modifier plugin
 *
 * Type:     modifier<br> */
 
function smarty_modifier_select_language($string, $string2)
{
    $matches = array();
    if (preg_match("/\[$string2\](.*?)\[\/$string2\]/", $string, $matches) ) {
      return $matches[1];
    } else {
      return $string;
    }
}

/* vim: set expandtab: */

?>
