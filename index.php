<?php
session_start();

include('autoloadfunctions.php');

include("konten/header.html");

include("konten/menu.php");

include("koneksi.php");

// atur konten

include("atur-konten.php");

include("konten/footer.html");

?>