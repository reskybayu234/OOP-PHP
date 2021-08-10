<?php 

class Produk 
{

        public $judul,
                $penerbit,
                $penulis,
                $harga;

        public function __construct($judul, $penerbit, $penulis, $harga)
        {
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->penulis = $penulis;
            $this->harga = $harga;
        }

        public function getLabel()
        {
            return "$this->penulis, $this->penerbit";
        }

}

class CetakProduk {

    public function cetak($produk)
    {
        return $str = "{$produk->judul} || {$produk->getLabel()} (Rp {$produk->harga})"; 
    }


}

        $produk1 = new Produk("naruto","shonen jump","masashi kisimoto","30000");
        $produk2 = new Produk("onepiece","gramedia","Eichiro Oda","30000");

        // echo $produk1->getLabel();
        // echo "<br>";
        // echo $produk2->getLabel();

        $infoProduk = new CetakProduk();


        echo $infoProduk->cetak($produk1);

?>