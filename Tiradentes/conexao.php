<?php

$servidor = "localhost";

$usuario = "root";

$senha = "";

$bdname = "tiradentesbd";

//criar conexao 

$conn = mysqli_connect($servidor, $usuario, $senha, $bdname) or die("Erro!");