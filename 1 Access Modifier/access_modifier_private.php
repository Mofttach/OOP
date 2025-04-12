<?php
//kita coba membuat access modifier private
class Buku
{
    //kita gunakan keyword private pada variable
    private $judul;
    //kita gunakan functiom setjudul dengan access modifier public
    public function setJudul($namajudul){
        $this->judul=$namajudul;
    }
    public function getJudul(){
        echo $this->judul;
    }
}

//kita buat objek baru
$abdul = new Buku();
$abdul->setJudul("Pemogramman Berorientasi Objek");
echo $abdul->getJudul();
?>