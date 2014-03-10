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
class acp_multiling
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		$user->add_lang('mods/multiling/acp');
		
		$submit = ( isset($_POST['submit']) ) ? TRUE : FALSE;
		
		switch($mode)
		{
			case 'index':
			$this->page_title = 'ACP_MULTILING_MOD';
			$this->tpl_name = 'acp_multiling';
	
			$error = array();

			if ($submit)
			{
				$multiling_delimiter =
utf8_normalize_nfc(request_var('multiling_delimiter', '', true));
				$multiling_languages =
utf8_normalize_nfc(request_var('multiling_languages', '', true));

				set_config('multiling_delimiter', $multiling_delimiter);
				set_config('multiling_languages', $multiling_languages);

				// If there are no errors, display a success message; else,
				// show the error box
				if (!sizeof($error))
				{
					add_log('admin', 'LOG_MULTILING_UPDATE');
					trigger_error($user->lang['CONFIG_UPDATED'] .
adm_back_link($this->u_action));
				}
			}

			$template->assign_vars(array(
				'MULTILING_DELIMITER'   => $config['multiling_delimiter'],
				'MULTILING_LANGUAGES'   => $config['multiling_languages'],

				'S_ERROR'			   => (sizeof($error)) ? true : false,
				'ERROR_MSG'			 => implode('<br />', $error),
				'U_ACTION'			  => $this->u_action,

				)
			);
			break;
		
		}
	}
}
?>
