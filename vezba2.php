<?php   

$proveriPass=isset($_POST['pass']);
if(!$proveriPass){
    die("nije unet pass");
}

$duzinaPass=strlen($_POST['pass']);
if($duzinaPass<4 || $duzinaPass>8 ){
    die("Sifra ima nedovoljan broj karaktera");
}
echo $_POST['pass'];




?>