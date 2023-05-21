<?php

$user="b221210404@sakarya.edu.tr";
$pass="b221210404";
if(isset($_POST['adı'])){
    $adı=$_POST['adı'];
    $şifre=$_POST['şifre'];

    if($adı==$user && $şifre==$pass){
        echo "HOŞGELDİNİZ B221210404";
        
    }
    else{
        echo "Hatalı giriş yaptınız";
    }
}
?>

