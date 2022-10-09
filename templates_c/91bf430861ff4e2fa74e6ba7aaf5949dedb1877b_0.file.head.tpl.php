<?php
/* Smarty version 4.2.1, created on 2022-10-09 03:34:22
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6342251e04f6c6_67990354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91bf430861ff4e2fa74e6ba7aaf5949dedb1877b' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\head.tpl',
      1 => 1665279148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6342251e04f6c6_67990354 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href=" <?php echo BASE_URL;?>
 ">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIKI-POTTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="characters">Personajes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="houses">Casas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Administrar Personajes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="addChar">Agregar</a></li>
                            <li><a class="dropdown-item" href="editChar">Editar</a></li>
                            <li><a class="dropdown-item" href="deleteChar">Borrar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Administrar Casas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="addHouse">Agregar</a></li>
                            <li><a class="dropdown-item" href="editHouse">Editar</a></li>
                            <li><a class="dropdown-item" href="deleteHouse">Borrar</a></li>
                        </ul>
                    </li>
            

                </ul>
            </div>
        </div>
    </nav>
</header>

<body><?php }
}
