<?php
include 'config.php';
//merr id e kartes nga url
$ID =  $_GET['karteId'];
// sql to delete a record
$sql = "DELETE  FROM karta_bankare WHERE karta_id=$ID";
if (mysqli_query($conn, $sql)) {
	header("Location: ../Admin/karta.php");
	die();
} else {
	echo "Error deleting record: " . mysqli_error($conn);
}