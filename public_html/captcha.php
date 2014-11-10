<?php    
  
   
session_start();    
  
if (function_exists('imagecreate')) {    
   
    $str = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";    
    $code = array();    
    for ($i=0; $i<4; $i++) {    
        $code[] = $str[mt_rand(0,strlen($str)-1)];    
    }    
      
    $_SESSION['vdcode'] = strtolower(implode('',$code));  
    	
    $width = 50;       
    $height = 20;     
   
    $im = ImageCreate($width,$height);      
    ImageColorAllocate($im,255,255,255);   
   
     
    for ($i=0; $i<100; $i++) {    
        $pxcolor = ImageColorAllocate($im,mt_rand(100,255),mt_rand(100,255),mt_rand(100,255));    
        ImageSetPixel($im,mt_rand(0,$width),mt_rand(0,$height),$pxcolor);    
    }    
   
   
    $bordercolor = ImageColorAllocate($im,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));    
    ImageRectangle($im,0,0,$width-1,$height-1,$bordercolor);    
   
      
    $offset = 5;    
    foreach ($code as $char) {    
        $textcolor = ImageColorAllocate($im,mt_rand(0,250),mt_rand(0,150),mt_rand(0,250));    
        ImageChar($im,5,$offset,2,$char,$textcolor);    
        $offset += 10;    
    }    
   
   
    header("pragma:no-cache\r\n");    
    header("Cache-Control:no-cache\r\n");    
    header("Expires:0\r\n");    
  
    if (ImageTypes() & IMG_PNG) {    
        header('Content-Type:image/png');    
        ImagePNG($im);    
    } elseif (ImageTypes() & IMG_JPEG) {    
        header('Content-Type:image/jpeg');    
        ImageJPEG($im);    
    } else {    
        header('Content-Type:image/gif');    
        ImageGif($im);    
    }    
} else {    
  
    $_SESSION['vdcode'] = 'abcd';    
    header('Content-Type:image/jpeg');    
    $fp = fopen('vdcode.jpg','rb');    
    echo fread($fp,filesize('vdcode.jpg'));    
    fclose($fp);    
}    

?>   