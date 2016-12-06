<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$siswa = new siswa();
$data  = $siswa-> readAllSiswa();

print '<pre>';
print_r($data);
print '</pre>';
?>