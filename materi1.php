<?php 

class hewan {
	public $judul;
}
	$judul = new hewan;
	$judul->awal = "Animal";

	echo "$judul->awal";
	echo "<hr>";


	class kucing {
		public $nama, $jumlah_kaki, $bisa, $suara;
	}

	$kucing = new kucing;
	$kucing->nama = "kucing";
	$kucing->jumlah_kaki = "4";
	$kucing->bisa = "tidak bisa terbang";
	$kucing->suara = "Meooong";

	echo "Monmon adalah $kucing->nama <br>";
	echo "punya kaki sebanyak : $kucing->jumlah_kaki <br>";
	echo "$kucing->bisa <br>";
	echo "suaranya : $kucing->suara";
	echo "<hr>";

	

	class anjing {
		public $nama, $jumlah_kaki, $bisa, $suara;
	}

	$anjing = new anjing;
	$anjing->nama = "anjing";
	$anjing->jumlah_kaki = "4";
	$anjing->bisa = "tidak bisa terbang";
	$anjing->suara = "Guk Guk";

	echo "Manman adalah $anjing->nama <br>";
	echo "punya kaki sebanyak : $anjing->jumlah_kaki <br>";
	echo "$anjing->bisa <br>";
	echo "suaranya : $anjing->suara";
	echo "<hr>";



	class elang {
		public $nama, $jumlah_kaki, $bisa, $suara;
	}

	$elang = new elang;
	$elang->nama = "elang";
	$elang->jumlah_kaki = "2";
	$elang->bisa = "bisa terbang";
	$elang->suara = "Miiiip";

	echo "Minmin adalah $elang->nama <br>";
	echo "punya kaki sebanyak : $elang->jumlah_kaki <br>";
	echo "$elang->bisa <br>";
	echo "suaranya : $elang->suara";
	echo "<hr>";




	class angsa {
		public $nama, $jumlah_kaki, $bisa, $suara;
	}

	$angsa = new angsa;
	$angsa->nama = "angsa";
	$angsa->jumlah_kaki = "2";
	$angsa->bisa = "bisa terbang";
	$angsa->suara = "Kwaaak";

	echo "Munmun adalah $angsa->nama <br>";
	echo "punya kaki sebanyak : $angsa->jumlah_kaki <br>";
	echo "$angsa->bisa <br>";
	echo "suaranya : $angsa->suara";
	echo "<hr>";

 ?>