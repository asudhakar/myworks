<?php 

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

	function select_with_and_condition($table_name, $column_to_select, $where){
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