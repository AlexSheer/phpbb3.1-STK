<?php
/**
 *
 * @package Support Toolkit language Sheer
 * @version $Id$
 * @copyright (c) 2010 phpBB Group
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
// ’ » " " …
// --------------------------------------------------------------------------------------------
// For the time being this file isn't translatable. The Support Toolkit will always force the
// English version when the "Support Request Generator" is ran.
//

$lang = array_merge($lang, array(
	'COMPILED_TEMPLATE_EXPLAIN'		=> 'Создана форма запроса в службу поддерки. Скопируйте ее в буфер обмена и внесите в форму запроса в соответствующую тему на <a href="http://www.phpbb.com/community/viewforum.php?f=46">Support forum</a> всю полученную информацию. Если вы уже пытались делать запрос в службу поддержки и создали соответствующую тему, скопируйте полученную форму запроса в новое сообщение в вашей теме, не создавая новую тему.',
	'COULDNT_LOAD_SRT_ANSWERS'		=> 'Генератор создания формы запросов не может загрузить варианты вопросов. Попробуте запустить генератор позже или обновите версию STK.',
	'SRT_GENERATOR'					=> 'Средство создания формы запроса',
	'SRT_GENERATOR_LANDING'			=> 'Средство создания формы запроса создается только на английском языке, отвечать необходимо тоже на английском языке.',
	'SRT_GENERATOR_LANDING_CONFIRM'	=> 'Добро пожаловать в Генератор запросов в службу поддержки. Генератор поможет вам создать запрос в группу поддержки для решения проблем, возникших на форуме. Ответьте на несколько вопросов. Ваши ответы будут скомпилированы в форму запроса. Полученную форму запроса можно будет скопировать в соответствующую тему на форуме Тех Поддержки. <br />Генератор запросов работает аналогично тому, что расположен в <a href="http://www.phpbb.com/support/stk/">SRT Generator on www.phpbb.com</a>, но дает возможность заполнить форум запроса заблаговременно. Вопросы задаются на английском языке и отвечать необходимо на английском языке.<br /><br />Запустить генератор запросов? (Внимание!!! Генератор не запустится с включеннной опцией автоперевода в браузере.',
	'SRT_NO_CACHE'					=> 'Генератор формы запроса использует проверку системных файлов phpBB. Ваша версия phpBB не соответствует данной версии генератора. Воспользуйтесь генератором формы запроса на форуме phpBB. <a href="http://www.phpbb.com/support/srt/">online SRT Generator</a>',
	'START_OVER'					=> 'Начать сначала',
));

// Step 1 strings
$lang = array_merge($lang, array(
//	'STEP1_CONVERT'			=> '',
//	'STEP1_CONVERT_EXPLAIN'	=> '',
	'STEP1_MOD'				=> 'Is your problem MOD-related?',
	'STEP1_MOD_EXPLAIN'		=> 'Проблема возникла после установки или удаления какого-либо мода?',
	'STEP1_MOD_ERROR'		=> 'Support questions for MOD related issues (e.g., if you have just installed a MOD and are now getting errors) should be posted within the topic of where you have downloaded the MOD. If the MOD was downloaded from another site you will have to seek support there.<br /><br /><a href="http://www.phpbb.com/community/viewforum.php?f=81">Go to the MOD Forums</a>',
	'STEP1_HACKED'			=> 'Was your board hacked?',
	'STEP1_HACKED_EXPLAIN'	=> 'Выберите "Да" если вам требуется поддержка, так как ваша конференция была повреждена, иначе вы поставите нас под угрозу.',
	'STEP1_HACKED_ERROR'	=> 'If your board was hacked, we ask that you file a report with the Incident Investigation Tracker instead of posting in the Support forum so that no private information is disclosed.<br /><br />See <a href="http://www.phpbb.com/community/viewtopic.php?f=46&t=543171#iit">this post</a> for directions on doing so.',
));

// The questions
$lang = array_merge($lang, array(
	'SRT_QUESTIONS'			=> array(
		'step2'	=> array(
			'phpbb_version'		=> 'What version of phpBB are you using?',
			'board_url'			=> 'What is your board’s URL?',
			'dbms'				=> 'Which database type/version are you using?',
			'php'				=> 'Which PHP version are you using?',
			'host_name'			=> 'Who do you host your board with?',
			'install_type'		=> 'How did you install your board?',
			'inst_converse'		=> 'Is your board a fresh install or a conversion?',
			'mods_installed'	=> 'Do you have any MODs installed?',
			'registration_req'	=> 'Is registration required to reproduce this issue?',
		),
		'step3'	=> array(
			'installed_styles'		=> 'What styles do you currently have installed?',
			'installed_languages'	=> 'What language(s) is your board currently using?',
			'xp_level'				=> 'What is your level of experience?',
			'problem_started'		=> 'When did your problem begin?',
			'problem_description'	=> 'Please describe your problem.',
			'installed_mods'		=> 'What MODs do you have installed?',
			'test_username'			=> 'What username can be used to view this issue?',
			'test_password'			=> 'What password can be used to view this issue?',
		),
	),
));

// Explain lines for the questions
$lang = array_merge($lang, array(
	'SRT_QUESTIONS_EXPLAIN'	=> array(
		'step2'	=> array(
			'phpbb_version'		=> 'SRT Generator не может определить, какую версию phpBB вы используете, поэтому правильно укажите версию. Чтобы получить эту информацию, зайдите на свою конференцию, прокурутите страницу вниз и кликните по ссылке "Администраторский раздел", затем перейдите на вкладку "Система". и перейдите по ссылке "Сведения о PHP"',
			'board_url'			=> 'Your board URL is the address that you use to access your board. Most problems are more easily fixed when one can view your board. If you do not want to give out this information, please enter "n/a".',
			'dbms'				=> 'To determine which database version and type you are using, go to the Administration Control Panel. On the "General" tab, locate "Database server:" in the statistics table.',
			'php'				=> 'To determine which PHP version you are using, go to the Administration Control Panel. On the "General" tab, click on "PHP Information", here you’ll find "PHP Version x.y.z"',
			'host_name'			=> 'Some problems experienced with phpBB boards can be attributed to particular hosts. This field should be filled with the company that is providing your webhosting package (like GoDaddy, Yahoo!, 1&1, etc.). If you are hosting the board yourself, please indicate this. Likewise, if you do not know who is hosting your board, please indicate this as well.',
			'install_type'		=> 'If you installed your board by downloading the phpBB files, uploading them to your host, then browsing to the installer, select "I installed the board by myself." If you had someone do the installation for you, select "Someone else installed my board for me." If you used an automated tool like Fantastico, select "I used a tool provided by my host."',
			'inst_converse'		=> 'If your board was a fresh install, this means your board did not exist prior to installing phpBB. If you recently updated your board from an older version of phpBB3 prior to your problem beginning, then selected "Update from a previous version of phpBB3". If it is a conversion, this means your board was installed previously as another piece of software then later converted to phpBB.',
			'mods_installed'	=> 'MODs are often the cause of many problems with phpBB. This information can help to determine the exact cause of your issue.',
			'registration_req'	=> 'Select "Yes" if one must be registered and logged in to experience this problem.',
		),
		'step3'	=> array(
			'installed_styles'		=> 'An out of date style is the cause of many problems. If you do not know which styles you have installed, go to the Administration Control Panel, then browse to the "Styles" tab.',
			'installed_languages'	=> 'An out of date language pack is the cause of many problems. If you do not know which language packs you have installed, go to the Administration Control Panel, then browse to the "System" tab. Next, select "Language packs" from the list of pages on the left.',
			'xp_level'				=> 'Please select the option that best describes you.',
			'problem_started'		=> 'Please describe the actions you took (updating your board, installing a MOD, etc.) prior to this problem becoming noticeable.',
			'problem_description'	=> 'When describing your problem, please attempt to be as detailed as possible. Include information regarding when the problem started, steps to reproduce the problem, and any other information that you deem helpful.',
			'installed_mods'		=> 'Please try to be as detailed as you can when listing your installed MODs. This information greatly helps us in determining the cause of your problem.',
			'test_username'			=> 'Please provide the username to a test account that can be used to view this issue. Do <strong>not</strong> provide this information if the user requires more than "regular user" privileges.',
			'test_password'			=> 'Please provide the password to a test account that can be used to view this issue. Do <strong>not</strong> provide this information if the user requires more than "regular user" privileges.',
		),
	),
));

// Langauge strings that are used for building dropdown boxes
$lang = array_merge($lang, array(
	'SRT_DROPDOWN_OPTIONS'	=> array(
		'step2'	=> array(
			'install_type'	=> array(
				null			=> 'Выберите ответ',
				'myself'		=> 'I used the download package from phpBB.com',
				'third'			=> 'I used a download package provided by another website',
				'someone_else'	=> 'Someone else installed my board for me',
				'automated'		=> 'I used a tool provided by my host',
			),
			'inst_converse'	=> array(
				null				=> 'Выберите ответ',
				'fresh'				=> 'Fresh Install',
				'phpbb_update'		=> 'Update from a previous version of phpBB3',
				'convert_phpbb2'	=> 'Conversion from phpBB2',
				'convert_other'		=> 'Conversion from another software',
			)
		),
		'step3'	=> array(
			'xp_level'		=> array(
				null			=> 'Выберите ответ',
				'new_both'		=> 'New to PHP and phpBB',
				'new_phpbb'		=> 'New to phpBB but not PHP',
				'new_php'		=> 'New to PHP but not phpBB',
				'comfort'		=> 'Comfortable with PHP and phpBB',
				'experienced'	=> 'Experienced with PHP and phpBB',
			),
		),
	),
));
