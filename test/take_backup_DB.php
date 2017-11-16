<?php 

	class take_backup_DB
	{
		private $database;

		public function __construct($wpdb){
			$this->database = $wpdb;
		}

		public function test(){
			$table_name = 'users';
			$this_email = 'asudhakar@live.in';
			$wpdb = $this->database;
			$query = $this->database->prepare("SELECT * FROM $table_name WHERE username = %s ", $this_email);
			$query_result = $this->database->get_results($query, ARRAY_A);
			echo "<pre>";
			print_r($query_result);
		}
	}	


