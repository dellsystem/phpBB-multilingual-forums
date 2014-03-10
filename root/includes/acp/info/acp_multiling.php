<?php
/**
*
* @package Multilingual Forums MOD
* @version $Id: acp_multiling.php ilostwaldo@gmail.com$
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

/**
* @package acp
*/
class acp_multiling_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_multiling',
			'title'		=> 'ACP_MULTILING_MOD',
			'version'	=> '0.0.1',
			'modes'		=> array(
				'index'	 => array('title' => 'ACP_GENERAL_CONFIGURATION',
'auth' => 'acl_a_board', 'cat' => array('')),
			),
		);
	}
 
	function install()
	{
	}
 
	function uninstall()
	{
	}
}
?>
