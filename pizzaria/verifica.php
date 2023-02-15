<?php
if(!isset($_SESSION['codigocliente'])){
	header("Location: login.php");
}