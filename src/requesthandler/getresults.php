<?php
$php_id = $_GET['id'];
$php_key = $_GET['key'];
$finale_name = $php_id."_".$php_key.".pdf";

// checking whether file exists or not
$file_pointer = "../service_online/" . $finale_name ;
#'/user01/work/gfg.txt';

function redirect($url)
{
    
    header('Location: '.$url);
    exit();
}


function getting_pdf($url)
{
    ob_start();

    header('Content-type: application/octet-stream');
    #header('Content-Disposition: inline; filename="hat_007.pdf"');
    header('Content-Disposition: inline; filename="' . $url . '"');

    readfile($url);
    #echo'<script> window.location="../index.html"; </script> ';
    #echo "<script> location.href='../index.html'; </script>";
   
    ob_end_flush();
    #redirect($url);
    #die();
    #header('Location: '.$url);
    #exit();
}



  
if (file_exists($file_pointer)) 
{
    #getting_pdf($file_pointer);
    #echo'<script> window.location="../index.html"; </script> ';
    redirect($file_pointer);
     
   
    
    #echo "The file $file_pointer exists";
    #header('Location:"' . $filename . '"');
    exit();
}
else 
{
   #echo "The file $file_pointer does not exists";
   $var= $file_pointer;
   #include("../error.html");
   header('Location: ../error.html');
   exit();
}

#header('Content-type: application/octet-stream');
#header('Content-Disposition: inline; filename="hat_007.pdf"');
#readfile('hat_007.pdf'); 
?>
<script> window.location="../index.html"; </script>
