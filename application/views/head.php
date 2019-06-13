<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>


<link rel="stylesheet" href="<?=base_url()?>/bootstrap/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="<?=base_url()?>/bootstrap/js/jquery-3.3.1.js"></script>

<!-- Popper JS -->
<script src="<?=base_url()?>/bootstrap/js/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?=base_url()?>/bootstrap/js/bootstrap.min.js"></script>
	
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark"> -->
  <!-- <nav class="navbar navbar-expand-sm bg-light navbar-light"> -->
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url()?>index.php/estudiantes/index">Lista</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>index.php/estudiantes/Notas">Notas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>index.php/estudiantes/registro">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Estudiantes</a>
      </li>
    </ul>
  </nav>
  <br>
  <br>