<?php
/**
*
* @package Multilingual Forums MOD
* @version $Id: info_acp_multiling.php ilostwaldo@gmail.com$
* @copyright (c) 2014 dellsystem (www.dellsystem.me)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
    'ACP_MULTILING_MOD' => 'Multilingual Forums MOD',
));
?>
