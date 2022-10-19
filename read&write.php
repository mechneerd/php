<?php
	$file="data.txt";
	if(file_exists($file)){
	  $response = fopen($file,'r');
	  $data = fread($response, filesize($file));
	  fclose($response);
	  echo $data;
	 }else{
	  $response = fopen($file,'w');
	  $data = "this is what i want to write";
	  fwrite($response,$data);
	  fclose ($response);
	  }

?>