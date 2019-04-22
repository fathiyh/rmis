<?php
/* @var $this yii\web\View */
?>

<h2>Laporan Daftar Siswa</h2>

Judul Laporan:
<?php echo $judul; ?>
<br/>
Nama Guru: <?=$guru?>

<h3>Daftar Pelajaran</h3>
<ol>
	<?php
		foreach($pelajaran as $pel){
		    echo "<li>".$pel."</li>";
		}
	?>
</ol>

Nama Siswa: <?php echo $siswa1->nama; ?>
</br>
Nilai: <?php echo $siswa1->nilai; ?>
</br>
Sekolah: <?php echo $siswa1->sekolah; ?>
</br>
Keterangan: <?php echo $siswa1->getHasil(); ?>
