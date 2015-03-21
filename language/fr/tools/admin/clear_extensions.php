<?php
/**
*
* @package Support Toolkit - Clear Extensions
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @French translation by Galixte (http://www.galixte.com)
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'CLEAR_EXTENSIONS'				=> 'Gérer les extensions',
	'CLEAR_EXTENSIONS_EXPLAIN'		=> 'Ici vous pouvez gérer les extensions <b>installées</b>.',
	'EXT_PATH'						=> 'Chemin relatif pour le répertoire ' . $phpbb_root_path . 'ext/',
	'MISSING_PATH'					=> 'Répertoire manquant',
	'S_ACTIVE'						=> ' (activée) ',
	'S_OFF'							=> ' (désactivée) ',
	'EXT_NAME'						=> 'Nom de l’extension',
	'CLICK_TO_CLEAR'				=> 'Les données des extensions installées et sélectionnées seront supprimées de la base de données et les extensions seront désactivées, mais les données liées à ces extensions, teles que les tables ou les valeurs de configuration, ne seront pas supprimées. Pour les supprimer, utilisez le <b>OUTILS DE SUPPORT</b> -> Nettoyeur de base de données',
	'CLICK_TO_OFF'					=> 'Extensions sélectionnées qui seront désactivées',
	'OFF_EXT'						=> 'Désactiver',
	'CLEAR_EXT_SUCCESS'				=> 'Les extensions sélectionnées ont été supprimées.',
	'OFF_EXT_SUCCESS'				=> 'Les extensions sélectionnées ont été désactivées.',
	'NO_EXT_SELECTED'				=> 'Aucune extension sélectionnée !',
	'EXT_DELETE'					=> 'Supprimer les extensions',
	'EXT_DELETE_CONFIRM'			=> 'Êtes-vous sûr de vouloir supprimer ces extensions ?',
	'EXT_OFF'						=> 'Désactiver les extensions',
	'EXT_OFF_CONFIRM'				=> 'Êtes-vous sûr de vouloir désactiver ces extensions ?',
	'EXT_MISSING_PATH'				=> 'L’extension «%s» n’est pas compatible.<br />',
	'NO_COMPOSER'					=> 'Fichier non trouvé : ' . $phpbb_root_path . 'ext/%s/composer.json',
	'NO_EXTENSIONS_TITLE'			=> 'Extensions',
	'NO_EXTENSIONS_TEXT'			=> 'Aucune extension installée',
));
