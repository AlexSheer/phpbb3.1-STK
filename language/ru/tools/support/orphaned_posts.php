<?php
/**
*
* @package Support Toolkit - Orphaned posts/topics Russian language Pthelovod
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'AUTHOR'					=> 'Автор',
	'FORUM_NAME'				=> 'Название Форума',
	'NEW_TOPIC_ID'				=> 'ID Новой Темы',
	'POST_ID'					=> 'ID Сообщения',
	'TOPIC_ID'					=> 'ID Темы',

	'DELETE_EMPTY_TOPICS'		=> 'Удалить выбранные темы нажатием на кнопку. (Действие необратимо!)',
	'EMPTY_TOPICS'				=> 'Пустые (испорченные) Темы',
	'EMPTY_TOPICS_EXPLAIN'		=> 'Это темы, в которых нет сообщений или это ссылки на пропавшие темы.',
	'NO_EMPTY_TOPICS'			=> 'Пустых (испорченных) Тем не найдено',
	'NO_TOPICS_SELECTED'		=> 'Нет выбранных Тем',

	'ORPHANED_POSTS'			=> 'Одиночные сообщения (не приписанные к темам)',
	'ORPHANED_POSTS_EXPLAIN'	=> 'Эти сообщения не привязаны к конкретным темам. Укажите ID темы-родителя, к которой необходимо привязать потерянные сообщения.',
	'NO_ORPHANED_POSTS'			=> 'Одиночные сообщения (не приписанные к темам) не найдены',
	'NO_TOPIC_IDS'				=> 'Не указаны ID-ы тем-родителей',
	'NONEXISTENT_TOPIC_IDS'		=> 'Указанные ID-ы тем-родителей не существуют: %s.<br />Пожалуйста, проверьте корректность указанных ID-ов тем.',
	'REASSIGN'					=> 'Переназначение',

	'DELETE_SHADOWS'			=> 'Удалить выбранные ссылки на пропавшие темы нажатием на кнопку. (Действие не обратимо!)',
	'ORPHANED_SHADOWS'			=> 'Ссылки на пропавшие Темы',
	'ORPHANED_SHADOWS_EXPLAIN'	=> 'Это ссылки на пропавшие темы, которых уже не существует.',
	'NO_ORPHANED_SHADOWS'		=> 'Ссылок на пропавшие темы не обнаружено',

	'POSTS_DELETED'				=> '%d сообщений удалено',
	'POSTS_REASSIGNED'			=> '%d сообщений восстановлено в темах-родителях',
	'TOPICS_DELETED'			=> '%d тем удалено',
));
