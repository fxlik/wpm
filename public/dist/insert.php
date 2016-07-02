<?php
mysql_connect("localhost:8000","root","");
mysql_select_db("wpm");

$nama = $_POST['nama'];
$score = $_POST['score'];

$sql = "insert into hsbahasa (name,score) values('$nama','$score')";
$query = mysql_query($sql);
?>