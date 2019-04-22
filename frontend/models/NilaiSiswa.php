<?php

namespace frontend\models;

class NilaiSiswa {
	public $nama;
	public $nilai;
	public $sekolah = 'SDIT NF';

	public function __construct($nama, $nilai)
	{
		$this->nama = $nama;
		$this->nilai = $nilai;
	}

	public function getHasil()
	{
		if ($this->nilai > 55 ) return 'LULUS';
		else return 'TIDAK LULUS';
	}
}

?>