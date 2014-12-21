<?php
/**
 *
 * @package Support Toolkit - Resync Avatars Russian language Pthelovod
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
	'RESYNC_AVATARS'			=> 'Проверка записей в Базе Данных о пользовательский аватарах',
	'RESYNC_AVATARS_CONFIRM'	=> 'Данный инструмент сравнивает записи в Базе Данных с фактом нахождения файлов аватаров на сервере. Если файлы аватаров отсутствуют на сервере, инструмент удалает некорректные записи о них из Базы Данных. Потерянные файлы утилита не удаляет! Инструмент проверяет только те аватары, которые установлены пользователями самостоятельно, то есть, не из установленных "внутренних" галерей аватаров форума!<br /> Внимание!!! Процесс очень долгий! Так как проверка проводится для каждого пользователя в отдельности. Продолжить? ',
	'RESYNC_AVATARS_FINISHED'	=> 'Записи в Базе Данных о аватарах успешно синхронизированы (проверена корректность записей в Базе Данных и наличие файлов аватаров на FTP)!',
	'RESYNC_AVATARS_NEXT_MODE'	=> 'Проводится проверка записей о пользовательский аватарах в таблицах Базы Данных. Прерывать процесс нельзя!<br /> Проверка проводится для каждого пользователя в отдельности.',
	'RESYNC_AVATARS_PROGRESS'	=> 'Проводится проверка наличия самих файлов аватаров в папках форума на FTP! Прерывать процесс нельзя!<br /> Проверка проводится для каждого пользователя в отдельности.',
));
