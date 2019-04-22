<?php

namespace frontend\models;

class Produk {
	public $kode;
	public $nama;
	public $harga;

	public function __construct($kode, $nama)
	{
		$this->kode = $kode;
		$this->nama = $nama;
	}

	public function getStatus()
	{
		if ($this->harga > 1000000 ) return 'MAHAL';
		else return 'MURAH';
	}
}

?>