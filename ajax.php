<?php
$text = isset($_POST['gozal_css']) ? $_POST['gozal_css'] : null;
$fil ="./style.css";
$open = fopen( $fil, "w+");
   // $text =' yes worked';
   if( fwrite($open, $text)){
       $ja='yes';
   }else{
    $ja='no';
   };
    fclose($open);
    echo json_encode($ja);
?>