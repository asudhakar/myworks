<?php 
	
	function landing_page_session_check(){
		if(empty($_SESSION["user_details"])){
			header('location:view/login.php');
		}
	}

	function login_page_session_check(){
		if(isset($_SESSION["user_details"])){
			header('location: ../index.php');
		}
	}

	function signup_page_seesion_check(){
		if(isset($_SESSION["user_details"])){
			header('location: ../index.php');
		}
	}

	function var_unset($var){
		unset($var);
	}

	function create_session($data){
		if(!empty($data)){
			$user_details['id'] = $data['id'];
		 	$user_details['username'] = $data['username'];
		 	$user_details['email'] = $data['email'];
		 	$user_details['password'] = $data['password'];
			$_SESSION["user_details"] = base64_encode(serialize($user_details));
			if(isset($_SESSION['user_details'])){
				return true;
			}
			return false;
		} else{
			return false;
		}
	}

	function logout(){
		session_destroy();   
	}

	function encrypt_password(&$data){
		$data = md5($data);
	}

	function get_insert_query($table_name, $params){
		$column_names = NULL;
		foreach ($params as $column_name => $column_value) {
			if($column_names == NULL){
				$column_names = '`'.$column_name.'`';
				$column_values = '"'.$column_value.'"';
			}else{
				$column_names = $column_names.', `'.$column_name.'`';
				$column_values = $column_values.', "'.$column_value.'"';
			}
		}
		$build_query = "INSERT INTO `$table_name` ($column_names) VALUES($column_values)";
		echo $build_query;
	}

	function rand_string(){
		$str1 = substr(md5(microtime()), 0, 5);
		$table_name = 'users';
		$str['username'] = $str1;
		if(select($table_name, $str)) $str1 = rand_string();
		return $str1;
	}

	function select($table_name, $column_to_select, $where){
		if(empty($column_to_select)){
			$column_names = '*';
		} else{
			$column_names = NULL;
			foreach ($column_to_select as $key => $column_name) {
				if($column_names == NULL){
					$column_names = '`'.$column_name.'`';
				}else{
					$column_names = $column_names.', `'.$column_name.'`';
				}
			}
		}
		$where_columns = NULL;
		foreach ($where as $where_column_name => $where_column_value) {
			if(empty($where_columns)){
				$where_columns = '`'.$where_column_name.'`'.' = '.'"'.$where_column_value.'"';
			} else{
				$where_columns = $where_columns.'AND `'.$where_column_name.'`'.' = '.'"'.$where_column_value.'"';
			}
		}
		$build_query = "SELECT $column_names FROM $table_name WHERE $where_columns";
		echo $build_query;
	}

	function real_escape($data){
		return mysqli_real_escape_string($data);
	}
