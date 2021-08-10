<?php 

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
            if($this->tipe == "game"){
               return $str = "{$this->judul} | {$this->getLabel()}, {$this->harga} - {$this->waktuMain} Hours.";
            }
            else if($this->tipe == "komik")
            {
                return $str = "{$this->judul} | {$this->getLabel()}, {$this->harga} - {$this->jmlHalaman} Halaman.";
            }
             
        }

}

class CetakProduk {

    public function cetak($produk)
    {
        return $str = "{$produk->judul} || {$produk->getLabel()} (Rp {$produk->harga})"; 
    }


}

        $produk1 = new Produk("naruto","shonen jump","masashi kisimoto",30000,100,0,"komik");
        $produk2 = new Produk("onepiece","gramedia","Eichiro Oda",30000,0,50,"game");

        echo $produk2->getInfoLengkap();

?>