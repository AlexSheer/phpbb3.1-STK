<?php
/**
*
* @package Support Toolkit - Reparse BBCode Russian language Pthelovod
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// í ª ì î Ö
//

$lang = array_merge($lang, array(
	'REPARSE_ALL'					=> 'Репарсинг абсолютно всех BBCode',
	'REPARSE_ALL_EXPLAIN'			=> 'Если отмечено, будет произведён репарсинг BBCode на всей конференции; по умолчанию инструмент проверяет BBCode в сообщениях, личных сообщениях и подписях. Эта опция будет проигнорирована, если выше отмечены (выбраны) определенные пользователи.',
	'REPARSE_BBCODE'				=> 'Репарсинг BBCode постов и ЛС',
	'REPARSE_BBCODE_COMPLETE'		=> 'Репарсинг BBCode проведён',
	'REPARSE_BBCODE_CONFIRM'		=> 'Вы уверены, что хотите провести репарсинг всех BBCode? Учтите, что это средство потенциально может повредить информацию в базе данных; поэтому <strong>убедитесь, что вы имеете резервную копию вашй базы данных перед процессом</strong>. Кроме того, учтите, что это действие может занять значительное время.',
	'REPARSE_BBCODE_PROGRESS'		=> 'Шаг %1$d выполнен. Переход к шагу %2$d ...',
	'REPARSE_BBCODE_SWITCH_MODE'	=> array(
		1	=> 'Закончен репарсинг сообщений, переход к репарсингу личных сообщений.',
		2	=> 'Закончен репарсинг личных сообщений, переход к репарсингу подписей.',
	),
	'REPARSE_IDS_INVALID'			=> 'Указанные вами идентификаторы пользователей не корректны; пожалуйста, убедитесь, что идентификаторы (ID) пользователей указаны через запятую (например: 1,2,3,5,8,13).',
	'REPARSE_POST_IDS'				=> 'Провести репарсинг сообщений только перечисленных пользователей',
	'REPARSE_POST_IDS_EXPLAIN'		=> 'Провести репарсинг сообщений только перечисленных пользователей, Укажите ID пользователей через запятую (например: 1,2,3,5,8,13).',
	'REPARSE_PM_IDS'				=> 'Провести репарсинг Личных сообщений только перечисленных пользователей',
	'REPARSE_PM_IDS_EXPLAIN'		=> 'Провести репарсинг Личных сообщений только перечисленных пользователей. Укажите ID пользователей через запятую (например: 1,2,3,5,8,13).',
));
