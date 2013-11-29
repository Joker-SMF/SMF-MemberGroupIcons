<?php

/**
 * @package manifest file for Member Groups Icons
 * @version 1.24
 * @author Joker (http://www.simplemachines.org/community/index.php?action=profile;u=226111)
 * @copyright Copyright (c) 2012
 * @license http://www.mozilla.org/MPL/MPL-1.1.html
 */

/*
 * Version: MPL 1.1
 *
 * The contents of this file are subject to the Mozilla Public License Version
 * 1.1 (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * The Initial Developer of the Original Code is
 * SONSiVRi (http://www.simplemachines.org/community/index.php?action=profile;u=126462)
 * Portions created by the Initial Developer are Copyright (C) 2011
 * the Initial Developer. All Rights Reserved.
 *
 * Contributor(s):
 * Joker (http://www.simplemachines.org/community/index.php?action=profile;u=226111)
 * Helped in updating the mod for SMF 2.x branch
 */
	
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
{
	$ssi = true;
	require_once(dirname(__FILE__) . '/SSI.php');
}
elseif (!defined('SMF'))
	exit('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

global $smcFunc;

if(!array_key_exists('db_add_column', $smcFunc))
	db_extend('packages');

$column = array(
		'name' => 'image',
		'type' => 'varchar',
		'null' => false,
		'size' => '255',
		'default' => '',
);

$smcFunc['db_add_column']('{db_prefix}membergroups', $column);

if(!empty($ssi))
	echo 'Database installation complete!';

?>