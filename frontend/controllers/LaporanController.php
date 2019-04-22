<?php

namespace frontend\controllers; // letak file LaporanController.php

use frontend\models\NilaiSiswa; // memanggil NilaiSiswa di file models
use frontend\models\Produk;

class LaporanController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$ar_pelajaran=["IPA", "MTK", "IPS", "BHS INGGRIS"];

    	$siswa1 = new NilaiSiswa("Didud",54);
    	//$siswa1->nama="Didud";
    	//$siswa1->nilai=50;
    	$siswa1->sekolah="SMPN 2 Bojonggede";

        return $this->render('index',
        	[
        		'judul'=>'Laporan Semester 2',
        		'guru'=>'Slamet Santoso',
        		'pelajaran'=>$ar_pelajaran,
        		'siswa1'=>$siswa1,

        	]

    		);
    }

    public function actionProduk()
    {
    	$produk = new Produk("P01","Coco Mousse");
    	$produk->harga=27000;

    	return $this->render('produk',
    		[
    			'produk'=>$produk
    		]
    	);
    }

}
