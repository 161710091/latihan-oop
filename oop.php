<?php
	
	class kambing {
		public $suara = "mbee mbee";
		public $makan = "rumput";
		public $berat = 25;
		public $warna = "hitam";
		public $kaki = 4;
	}

	$kambingku = new kambing;
	echo "Kambing bersuara ".$kambingku->suara.'<br>';
	echo "Dan suka makan ".$kambingku->makan.'<br>';
	echo "Mempunyai berat ".$kambingku->berat." kg".'<br>';
	echo "Berwarna".$kambingku->warna.'<br>';
	echo "Berkaki ".$kambingku->kaki.'<br>'.'<br>';

	class anjing {
		public $suara = "guk guk";
		public $makan = "daging";
		public $warna = "putih";
		public $berat = 15;
		public $kaki = 4;
	}

	$anjingku = new anjing;
	echo "Anjing bersuara ".$anjingku->suara.'<br>';
	echo "Dan suka makan ".$anjingku->makan.'<br>';
	echo "Mempunyai berat ".$anjingku->berat." kg".'<br>';
	echo "Berwarna".$anjingku->warna.'<br>';
	echo "Berkaki ".$anjingku->kaki.'<br>'.'<br>';

	class kucing {
		public $suara = "meong meong";
		public $milik = "saya";
		public $warna = "putih";
		public $berat = 5;
		public $kaki = 4;
	}

	$kucingku = new kucing;
	echo "Kucing bersuara ".$kucingku->suara.'<br>';
	echo "Milik ".$kucingku->milik.'<br>';
	echo "Mempunyai berat ".$kucingku->berat." kg".'<br>';
	echo "Berwarna".$kucingku->warna.'<br>';
	echo "Berkaki ".$kucingku->kaki.'<br>'.'<br>';
	
?>