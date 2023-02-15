<?php
session_start();
if(isset($_SESSION['codigousuario'])){
	header("Location: index.php");
}?>