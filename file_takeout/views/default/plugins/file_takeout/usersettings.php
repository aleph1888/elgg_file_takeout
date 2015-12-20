<?php

/**
 * File Takeout plugin user settings
 */

$user = elgg_get_logged_in_user_entity();
$user_guid = $user->getGUID();
$file_takeout_export_type = elgg_get_plugin_user_setting('file_takeout_export_type', $user_guid, 'file_takeout');
$file_takeout_file_meta_export_type = elgg_get_plugin_user_setting('file_takeout_file_meta_export_type', $user_guid, 'file_takeout');
$file_takeout_file_meta_remote_lorea = elgg_get_plugin_user_setting('file_takeout_file_meta_remote_lorea', $user_guid, 'file_takeout');
$file_takeout_file_meta_remote_lorea_url = elgg_get_plugin_user_setting('file_takeout_file_meta_remote_lorea_url', $user_guid, 'file_takeout');
$file_takeout_file_meta_remote_lorea_user = elgg_get_plugin_user_setting('file_takeout_file_meta_remote_lorea_user', $user_guid, 'file_takeout');
$file_takeout_file_meta_remote_lorea_pwd = elgg_get_plugin_user_setting('file_takeout_file_meta_remote_lorea_pwd', $user_guid, 'file_takeout');

// set default values
if (!isset($file_takeout_export_type)) {
	$file_takeout_export_type = 'html';
}
if (!isset($file_takeout_file_meta_export_type)) {
	$file_takeout_file_meta_export_type = 'html';
}

echo '<div>';
echo elgg_echo('Remote Lorea:');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[file_takeout_file_meta_remote_lorea]',
	'options_values' => array(
		'yes' => elgg_echo('yes'),
		'no' => elgg_echo('-'),
	),
	'value' => $file_takeout_file_meta_remote_lorea,
));
echo ' ';
echo elgg_echo('Remote Lorea URL:');
echo ' ';
echo elgg_view('input/url', array(
	'name' => 'params[file_takeout_file_meta_remote_lorea_url]',
	'value' => $file_takeout_file_meta_remote_lorea_url,
	'disabled' => false,
	'autocapitalize' => 'off',
	'autocorrect' => 'off'
));

echo elgg_echo('Remote Lorea USER:');
echo ' ';
echo elgg_view('input/text', array(
	'name' => 'params[file_takeout_file_meta_remote_lorea_user]',
	'value' => $file_takeout_file_meta_remote_lorea_user,
));

echo elgg_echo('Remote Lorea PASSWORD:');
echo ' ';
echo elgg_view('input/password', array(
	'name' => 'params[file_takeout_file_meta_remote_lorea_pwd]',
	'value' => $file_takeout_file_meta_remote_lorea_pwd,
));
echo '</div>';


echo '<div>';
echo elgg_echo('Export file type for Blogs/Pages/Bookmarks:');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[file_takeout_export_type]',
	'options_values' => array(
		'html' => elgg_echo('html'),
		'aspx' => elgg_echo('aspx'),
		'docx' => elgg_echo('docx'),
	),
	'value' => $file_takeout_export_type,
));
echo '</div>';

echo '<div>';
echo elgg_echo('Export file type for Files metadata:');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[file_takeout_file_meta_export_type]',
	'options_values' => array(
		'html' => elgg_echo('html'),
		'aspx' => elgg_echo('aspx'),
	),
	'value' => $file_takeout_file_meta_export_type,
));
echo '</div>';

?>
