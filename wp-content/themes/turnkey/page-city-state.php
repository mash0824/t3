<?php /* Template Name: Example Template */ ?>
<?php
global $wpdb;
$zip = trim(stripslashes($_REQUEST['zip']));
$wpdb->zip_base = $wpdb->prefix . 'zip_base';
$querystr = "
SELECT *
FROM $wpdb->zip_base
WHERE $wpdb->zip_base.zip = '$zip'
";
$pageposts = $wpdb->get_row($querystr);
if($pageposts) {
    echo json_encode($pageposts);
}
?>