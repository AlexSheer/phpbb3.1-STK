<?php
/**
*
* @package Support Toolkit - MySQL Upgrader Russian language Pthelovod
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
	'MYSQL_UPGRADER'					=> 'Исправление Базы Данных после Обновления MySQL',
	'MYSQL_UPGRADER_BACKUP'				=> 'Действия этого инструмента могут оказаться опасными для вашей базы данных. Убедитесь в том, что имеете резервную копию вашей Базы данных! Без необходимых знаний об обновлении MySQL не запускать!',
	'MYSQL_UPGRADER_EXPLAIN'			=> 'Этот инструмент предназначен для решения вопросов, которые возникают от несовместимости вашей версии MySQL с вашей версией phpBB, а также после обновления вашей версии MySQL на более свежую. Инструмент укажет на несовместимые таблицы Базы Данных с версией phpBB <em> Смотрите также “<a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors">Есть\нет ошибки</a>” в таблицах Базы Данных.</em>',
	'MYSQL_UPGRADER_DOWNLOAD'			=> 'Только поиск и вывод списка запросов',
	'MYSQL_UPGRADER_DOWNLOAD_EXPLAIN'	=> 'Указав эту опцию Утилита Обновления MySQL сгенерирует необходимые запросы и создаст итоговый файл с указанием места, с которого его можно скачать для ручного выполнения необходимых для обновления запросов к Базе Данных.',
	'MYSQL_UPGRADER_RESULT'				=> 'Ниже приведен перечень запросов, которые должны быть запущены для обновления и исправлений структуры таблиц Базы Данных, для приведения их в правильный вид в новой версии MySQL. Нажмите <a href="%s">ЗДЕСЬ</a> что бы загрузить перечень .sql запросов в Базу Данных.',
	'MYSQL_UPGRADER_RUN'				=> 'Выполнить в автоматическом режиме',
	'MYSQL_UPGRADER_RUN_EXPLAIN'		=> 'Выбрав эту опцию, Утилита Обновления MySQL будет автоматически генерировать запросы для обновления и исправлений вашей MySQL и автоматически запускать эти запросы к вашей Базе Данных.<br />Для выполнения обновления необходимо длительное время, <strong>НЕ ПРЕРЫВАЙТЕ</strong> до окончания его дейстия, то есть до уведомления об окончании процесса обновления и окончания всех запросов к БД.',
	'MYSQL_UPGRADER_SCRIPT'				=> 'Запросы Утилиты Обновления MySQL.',
	'MYSQL_UPGRADER_SUCCESSFULL'		=> 'Действия Утилиты Обновления MySQL успешно закончены',
	
	'QUERY_FINISHED'					 => 'Завершение выполнения запроса %1$d из %2$d, переход к следующему шагу.',
	'TOOL_MYSQL_ONLY'					=> 'Этот инструмет доступен только для пользователей MySQL DBMS',
));
