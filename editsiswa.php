<<<<<<< HEAD
<?php

// komentar dari client 
//###################
=======
<?php 

// komentar dari server
// *****************
>>>>>>> 7a07865349e126ba7e208573497c95cce1ffe9d8
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}

$siswa = new siswa();

$data['input_name'] = addslashes ($_POST['in_name']);
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['foto']= 'img/'.$_POST['in_nis'].'.png';

//$siswa->updateSiswa($_POST['in_nis'], $data);
if(!copy($_FILES['in_foto']['tmp name'], 'img/'.S_POST['in_nis'].'.png')){
	exit('Error Upload File');

}
echo "Data siswa Berhasil di update<br />";
echo "<a href='usiswa.php?a=".$_POST['in_nis']."'>Detail Siswa</a>"
?>
