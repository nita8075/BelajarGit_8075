<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/age.php');

$siswa=new Siswa();
$HitungAge = new Age();


$data=$siswa->ReadAllSiswa();



/*print '<pre>';
print_r($data);
print '</pre>';*/


?>
<table border="1">
<tr>
	<td>ID SISWA</td>
	<td>FULL NAME</td>
	<td>Tgl Lahir</td>
	<td>Usia</td>
	<td>NATIONALITY</td>

</tr>
 <?php foreach ($data as $a ): ?>
	

<tr>
	<td><?php echo $a['id_siswa']?></td>
	<td><?php echo $a['full_name']?></td>
	<td><?php echo $a['date_ob']?></td>
		<td><?php  
		$tanggal=$a['date_ob'];

		$exec=$HitungAge->HitungUmur($tanggal);
		$year=$exec->y;
		$month=$exec->m;
		$day=$exec->d."hari";

		if(!empty($tanggal)){
		echo $exec->y."tahun".$exec->m."bulan".$exec->d."hari";	
			}
			else{
				echo "tidak ada umur";
			}
		

	 ?></td>
	<td><?php echo $a['nationality']?></td>
	<td><a href="dsiswa.php?id=<?php echo $a['id_siswa'] ?>">Detail</a></td>
	<td><a href="dsiswa.php?id=<?php echo $a['id_siswa'] ?>">Delete</a></td>
</tr>
<?php endforeach ?>

</table>