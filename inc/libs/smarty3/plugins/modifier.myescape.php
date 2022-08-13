<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty cat modifier plugin
 *
 * Type:     modifier<br>
 * Name:     cat<br>
 * Date:     Feb 24, 2003
 * Purpose:  catenate a value to a variable
 * Input:    string to catenate
 * Example:  {$var|cat:"foo"}
 * @link http://smarty.php.net/manual/en/language.modifier.cat.php cat
 *          (Smarty online manual)
 * @author   Monte Ohrt <monte@ispi.net>
 * @version 1.0
 * @param string
 * @param string
 * @return string
 */
function smarty_modifier_myescape($string)
{
    if (is_array($string)) return $string;
    if (strlen($string) > 20)
    { 
      $string = str_replace('<SC', '&lt;SC', $string);
      $string = str_replace('<sC', '&lt;sC', $string);
      $string = str_replace('<Sc', '&lt;Sc', $string);
      $string = str_replace('<sc', '&lt;sc', $string);
    }

    return $string;
}

/* vim: set expandtab: */

?>
