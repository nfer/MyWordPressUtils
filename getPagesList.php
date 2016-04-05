<?php
/**
 * Get WordPress All Pages Information
 *
 * Usage: put this file in the root of WordPress, and open it with your wordpress domain
 *        uncomment some lines for more informations
 *
 */

require( dirname(__FILE__) . '/wp-load.php' );

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="wp-toolbar"  lang="zh-CN">
<head>
<meta content="text/html; charset=utf-8>" http-equiv="Content-Type">
<style type="text/css">
table {
	border: 1px solid #cdcdcd;
	text-align: left;
}
td, th {
	padding-right: 10px;
}
</style>
</head>
<body class="fixed-header">

<?php

$pages = get_pages();

echo "<table >";
echo "<tr>";
echo "<th>index</th>";
echo "<th>ID</th>";
echo "<th>permalink</th>";
// echo "<th>post_type</th>";
// echo "<th>guid</th>";
echo "<th>post_title</th>";
// echo "<th>post_name</th>";
// echo "<th>post_status</th>";
echo "<th>post_status</th>";
echo "</tr>";
$index = 0;
foreach ($pages as $page) {
	echo "<tr>";
	echo "<td>".$index++."</td>";
	echo "<td>".$page->ID."</td>";
	echo "<td>".get_permalink($page)."</td>";
	// echo "<td>".$page->post_type."</td>";
	// echo "<td>".$page->guid."</td>";
	echo "<td>".$page->post_title."</td>";
	// echo "<td>".$page->post_name."</td>";
	// echo "<td>".$page->post_status."</td>";
	echo "<td>".get_page_template_slug($page)."</td>";
	echo "</tr>";
	error_log($page->post_title);
}
echo "</table>";
