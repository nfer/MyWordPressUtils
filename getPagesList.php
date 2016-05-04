<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>查看页面列表</title>
    <style>
        table {border: 1px solid #cdcdcd;text-align: left;}
        td, th {padding-right: 10px;}
    </style>
</head>
<body>
    <div id="page-content">
        <?php
            require( dirname(__FILE__) . '/wp-load.php' );
            $pages = get_pages();

            echo "<table >";
            echo "<tr>";
            echo "<th>index</th>";
            echo "<th>ID</th>";
            echo "<th>permalink</th>";
            // echo "<th>post_type</th>";
            // echo "<th>guid</th>";
            echo "<th>post_title</th>";
            echo "<th>post_name</th>";
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
                   echo "<td>".$page->post_name."</td>";
                   // echo "<td>".$page->post_status."</td>";
                   echo "<td>".get_page_template_slug($page)."</td>";
                   echo "</tr>";
            }
            echo "</table>";

        ?>
    </div>
</body>
</html>
