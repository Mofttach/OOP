<?php
// Access Modifier Public

class Buku
{
    // langsung kita buat variable judul dengan keyword public
    public $judul;
    //buat function dengan access public juga
    public function getJudul(){
        echo $this->judul;
    }
}
//buat objek baru
$ahmad = new Buku();
$ahmad->judul = "Pemograman Berorientasi Object";
echo $ahmad->judul;
?>