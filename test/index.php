<?php 

include_once 'beta-config.php';
include_once 'wp-db.php';
include_once 'take_backup_DB.php';
$wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST );
$test = new take_backup_DB($wpdb);
echo $test->test();

