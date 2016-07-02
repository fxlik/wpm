<?php
mysql_connect("localhost:8000","root","");
mysql_select_db("wpm");

$nama = $_GET['nama'];
$score = $_GET['score'];

$sql = "insert into hsbahasa (name,score) values('$nama','$score')";
$query = mysql_query($sql);
?>