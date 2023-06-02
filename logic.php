<?php       




if(isset($_POST['ime'])){
    $ime=trim($_POST['ime']);            
}


//empty() funkcija koristi se isto kao i isset()
//empty() funkcija je prayna !empty() funkcija netreba da bude prazna

if(isset($_POST['pass'])){
    $pass=trim($_POST['pass']);
}

if ($ime==""||$pass=="") {
    die ("nisu uneti svi potrebni podaci"."<hr>");
}


echo $ime."<br>".$pass;



?>