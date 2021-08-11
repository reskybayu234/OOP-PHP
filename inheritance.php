<?php

use Produk as GlobalProduk;

class Produk 
{

        public $judul,
                $penerbit,
                $penulis,
                $harga,
                $jmlHalaman,
                $waktuMain,
                $tipe;

        public function __construct($judul, $penerbit, $penulis, $harga, $jmlHalaman = 0, $waktuMain = 0,$tipe)
        {
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->penulis = $penulis;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
        }

        public function getLabel()
        {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoLengkap()
        {
           
               return $str = "{$this->judul} | {$this->getLabel()}, {$this->harga}";
        }

}

//=========================================================================================

class Komik extends Produk {
    public function getInfoKomik()
    {
         return $str = "Komik : {$this->getInfoLengkap()} - {$this->jmlHalaman} halaman.";
    }
}

//=========================================================================================

class Game extends Produk {
    public function getInfoGame()
    {
        return $str = "Komik : {$this->getInfoLengkap()} - {$this->waktuMain} Jam.";
    }
}

//=========================================================================================

class CetakProduk {

    public function cetak($produk)
    {
        return $str = "{$produk->judul} || {$produk->getLabel()} (Rp {$produk->harga})"; 
    }


}

        $produk1 = new Komik("naruto","shonen jump","masashi kisimoto",30000,100,0,"komik");
        $produk2 = new Game("onepiece","gramedia","Eichiro Oda",30000,0,50,"game");

        echo $produk1->getInfoKomik();
        echo "<br>";
        echo $produk2->getInfoGame();


?>