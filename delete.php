<?php
require_once('database.php');
$id = $_GET['id'];
$data = delete('notes',$id);
if ($data) {
header ("location:notes.php");

}
?>