<h1>App 1</h1>

<?php
try{
	$db = new PDO('mysql:host=database1;dbname=app1;port=3306', 'app1', 'app1');	
}catch(Exception $ex){
	echo "Database error";
}

echo "Connected !"; 
