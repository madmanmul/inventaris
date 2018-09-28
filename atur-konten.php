<?php

if (empty($_GET['menu'])) {
	include("konten/home.php");
}
elseif ($_GET['menu'] == "login") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	}
	else {
		header('Location: index.php');
	}
}
elseif ($_GET['menu'] == "barang") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/barang.php");
	}
}
elseif ($_GET['menu'] == "tambah-barang") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/tambah-barang.php");
	}
}
elseif ($_GET['menu'] == "edit-barang") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/edit-barang.php");
	}
}
elseif ($_GET['menu'] == "user") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/users.php");
	}
}
elseif ($_GET['menu'] == "tambah-user") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/tambah-user.php");
	}
}
elseif ($_GET['menu'] == "kategori") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/kategori.php");
	}
}
elseif ($_GET['menu'] == "edit-kategori") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/edit-kategori.php");
	}
}
elseif ($_GET['menu'] == "laporan") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/laporan.php");
	}
}
elseif ($_GET['menu'] == "logout") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/logout.php");
	}
}
?>
