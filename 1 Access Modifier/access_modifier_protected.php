<?php
//Access Modifier Protected
class Buku
{
    public $judul;
    protected $editor;

    public function getJudul(){
        echo $this->judul."<br>";
    }
    public function getEditor(){
        echo $this->editor."<br>";
    }
}
//Buat class turunan 
class Komik extends Buku
{
    public $harga;
    function getHarga(){
        echo $this->harga."<br/>";
    }
    function __construct($parameter1,$parameter2,$parameter3){
        $this->judul = $parameter1;
        $this->harga = $parameter2;
        $this->editor = $parameter3;
    }
}

$abdul = new Komik("Pemogramman Berorientasi Objek", 12000, "Ahmad");
$abdul->getJudul();
$abdul->getHarga();   
$abdul->getEditor();

//access modifier protected "bisa digunakan oleh class itu sendiri dan class turunannya"

?>