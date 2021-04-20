<?php
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
	function get_data() {
		$name = $_POST['name'];
		$file_name='db'. '.json';

		if(file_exists("$file_name")) {
			$current_data=file_get_contents("$file_name");
			$array_data=json_decode($current_data, true);
							
			$extra=array(
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'password1' => $_POST['password1'],
				'password2' => $_POST['password2']

			);
			$array_data[]=$extra;
			echo "file exist<br/>";
			return json_encode($array_data);
		}
		else {
			$datae=array();
			$datae[]=array(
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'password1' => $_POST['password1'],
				'password2' => $_POST['password2']

			);
			echo "file not exist<br/>";
			return json_encode($datae);
		}
	}

	$file_name='db'. '.json';
	
	if(file_put_contents("$file_name", get_data())) {
		echo 'success';
	}				
	else {
		echo 'There is some error';				
	}
}
