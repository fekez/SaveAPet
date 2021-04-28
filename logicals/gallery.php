<?php
		$images = array();
		$reader = opendir($FOLDER);
		while (($file = readdir($reader)) !== false)	{
			 if (is_file($FOLDER.$file))	{
				 $end = strtolower(substr($file, strlen($file)-4));
				if (in_array($end, $TYPES)) {
					 $images[$file] = filemtime($FOLDER.$file);
				}
			}
		}
		closedir($reader);
?>