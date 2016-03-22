<?php 

include_once 'db/beta-config.php';
include_once 'db/wp-db.php';

$wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST );

$table_name = 'users';
$this_email = 'asudhakar@live.in';
$query = $wpdb->prepare("SELECT * FROM $table_name WHERE username = %s ", $this_email);
print_r($query);
$query_result = $wpdb->get_results($query, ARRAY_A);
echo "<pre>";
print_r($query_result);
