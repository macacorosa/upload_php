<?php
var_dump($_FILES);

echo $_FILES['meuArquivo']['name']."<br>";
echo $_FILES['meuArquivo']['tmp_name'];  


$tmp = $_FILES['meuArquivo']['tmp_name'];  
$name = $_FILES['meuArquivo']['name'];

$pessoa = $_POST['onome'];
$data = date("d-m-Y");

$nomeFinal = $pessoa.'-'.$data;

$path = pathinfo($name); // pegar info sobre o file
$ext = $path['extension']; // separar a extensão

$extPer = array("png","jpg","PNG","pdf","docx");

if(in_array($ext,$extPer)){
 
move_uploaded_file($tmp,"files/".$nomeFinal.'.'.$ext);
}else{

	echo "<br> extensão não permitida!";
}



       