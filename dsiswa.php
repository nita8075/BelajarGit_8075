<?php 

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id = $_GET['id'];

if(!is_numeric($id)){
	exit('access forbiden');
}


$siswa = new Siswa();
$data = $siswa->readSiswa($id);

if(!empty($data)){
	exit('yooo wazaapppp access forbiden');
}



$dt = $data[0];

?>

<table border="1">
	<tr>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>NATIONALITY</th>
	</tr>
	<?php foreach($data as $dt): ?>
	<tr>
		<td><?php echo $dt['id_siswa']?></td>
		<td><?php echo $dt['full_name']?></td>
		<td><?php echo $dt['nationality']?></td>
	</tr>
	<?php endforeach?>
</table>