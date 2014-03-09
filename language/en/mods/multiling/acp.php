<?php
/**
*
* @package Multilingual Forums MOD
* @version $Id: acp.php ilostwaldo@gmail.com$
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
    'MULTILING_DELIMITER' => 'Delimiter',
    'MULTILING_DELIMITER_EXPLAIN' => 'This is the character (or sequence of characters) that will be used to separate the different languages in a forum name. For example, if the delimiter is #, then you can write "(name in language 1)#(name in language 2)#..." as the forum name.',
    'MULTILING_LANGUAGES' => 'Supported languages',
    'MULTILING_LANGUAGES_EXPLAIN' => 'Enter the ISO codes of the languages you wish to support in your forum names, separated by the delimiter chosen above. Note that all such languages must be installed on your board already. You must use the same language order to specify forum names. For example, if your languages are "en-gb#fr#es", your forum names would be in the format "Hello#Bonjour#Hola".',
));

?>
