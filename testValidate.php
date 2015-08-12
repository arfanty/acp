<?php

function pdf2png($PDF,$Path){
   if(!extension_loaded('imagick')){
	   echo 'no imagick';
       return false;
   }
   if(!file_exists($PDF)){
   	   echo 'no file';
       return false;
   }
 
   $IM = new imagick();
   echo 'image create';
  // $IM->setResolution(794,1123);
  // echo 'image resolution';
   $IM->setCompressionQuality(100);
   echo 'image quality';   
   $IM->readImage($PDF);
   echo 'pdf read';      
   foreach ($IM as $Key => $Var){
	   echo 'image convert';
       $Var->setImageFormat('png');
       $Filename = $Path.'/'.md5($Key.time()).'.png';
       if($Var->writeImage($Filename) == true){
           $Return[] = $Filename;
       }
   }
   return $Return;
}

	$pdf = 'Invitation Letters/Invitation Letter For  Jingjuan Zhou.pdf';  
	$path = 'Invitation Letters/Image'; 
	pdf2png($pdf,$path);
?>