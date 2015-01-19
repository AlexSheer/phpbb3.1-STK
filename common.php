<?php
/**
*
* @package Support Toolkit
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

// What version are we using?
define('STK_VERSION', '1.0.8-dev');
define('STK_QA', true);

define('ADMIN_START', true);

// This seems like a rather nasty thing to do, but the only places this IN_LOGIN is checked is in session.php when creating a session
// Reason for having it is that it allows us in the STK if we can not login and the board is disabled.
define('IN_LOGIN', true);

// Make that phpBB itself understands out paths
$phpbb_root_path = PHPBB_ROOT_PATH;
$phpEx = PHP_EXT;

// Prepare some vars
$stk_no_error = false;
define('PHPBB_MSG_HANDLER', 'stk_msg_handler');

// Include all common stuff
require(STK_ROOT_PATH . 'includes/functions.' . PHP_EXT);
require(STK_ROOT_PATH . 'includes/fatal_error_handler.' . $phpEx);
require(PHPBB_ROOT_PATH . 'common.' . PHP_EXT);
require(STK_ROOT_PATH . 'includes/plugin.' . PHP_EXT);
// We test for UMIL twice. First look whether this user already has an UMIL installation in its default location.
if (file_exists(PHPBB_ROOT_PATH . 'umil/umil.' . PHP_EXT))
{
	require PHPBB_ROOT_PATH . 'umil/umil.' . PHP_EXT;
}
else
{
	require STK_ROOT_PATH . 'includes/umil.' . PHP_EXT;
}

// phpBBs common.php registers hooks, these hooks tend to cause problems with the
// support toolkit. Therefore we unset the `$phpbb_hook` object here
unset($phpbb_hook);

// When not in the ERK we setup the user at this point
// and load UML.
if (!defined('IN_ERK'))
{
	include STK_ROOT_PATH . 'includes/critical_repair.' . PHP_EXT;
	$critical_repair = new critical_repair();

	$user->session_begin();
	$auth->acl($user->data);
	$user->setup('acp/common', $config['default_style']);

	$umil = new umil(true);
}

// Load STK config when not in the erk
if (!isset($stk_config))
{
	$stk_config = array();
	include STK_ROOT_PATH . 'config.' . PHP_EXT;
}

// Setup some common variables
$action = request_var('action', '');
$submit = request_var('submit', false);

$version = PHPBB_VERSION;

// Try to determine the phpBB actually version number
$version_helper = $phpbb_container->get('version_helper');
$recheck = $request->variable('versioncheck_force', true);
$updates_available = $version_helper->get_suggested_updates(true);
if ($updates_available)
{
	$action = 'request_phpbb_version';
}
