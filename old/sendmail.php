<?php
	
	if (isset($_POST['comment'])) 
	{ 
		 
         $message = $_POST["comment"] . $_SERVER["REMOTE_ADDR"];
	}
	else
	{
		echo "Variabile non esiste:" . $message;
	}
    
    if($message != ""){
        mail('samuelfinocchioit@gmail.com', 'WebSite EMAIL', $message,"From: Samuel Finocchio website");
        echo "Hai inviato la seguente email" . "<br> <hr> \n";
        echo $message;
        header("refresh:5; url=http://samuelfinocchiodev.altervista.org/");
    }   
?>