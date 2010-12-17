<?php
/**
 * Elgg user statistics.
 *
 * @package Elgg
 * @subpackage Core
 */

// Only logged in users
gatekeeper();

// Make sure we don't open a security hole ...
if ((!elgg_get_page_owner()) || (!elgg_get_page_owner()->canEdit())) {
	set_page_owner(get_loggedin_userid());
}

$title = elgg_echo("usersettings:statistics");

$content = elgg_view("core/settings/statistics");

$params = array(
	'content' => $content,
	'title' => $title,
);
$body = elgg_view_layout('one_sidebar', array('content' => $content));

echo elgg_view_page($title, $body);
