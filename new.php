<?php
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
	function get_data() {
		// $name = $_POST['name'];
		$file_name='db'. '.json';

		if(file_exists("$file_name")) {
			$current_data=file_get_contents("$file_name");
			$array_data=json_decode($current_data, true);
							
			$extra=array(
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'password1' => password_hash($_POST['password1'], PASSWORD_DEFAULT),
                'password2' => password_hash($_POST['password2'], PASSWORD_DEFAULT)
			);
			$array_data[]=$extra;
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
			return json_encode($datae);
		}
	}

	$file_name='db'. '.json';
	
	if(file_put_contents("$file_name", get_data())) {
		
	}				
	else {
					
	}
}
