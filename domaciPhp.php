<?php    
$listaImena=[
    'toma',
    'marko',
    'petar'

];

if(isset($_POST['name'])){
    $ime=  trim($_POST['name']) ;
    
}
if(strlen($ime)<3){
    die("Ime mora imati vise od 3 karaktera");
}

if( in_array(strtolower($ime), $listaImena)){
    echo strtolower($ime);
}else{
    die("imena nisu u listi ");
}











?>