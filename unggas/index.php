<?php
    require "ayam.php";
    require "burung.php";
    require "capung.php";

    $ayam = new Ayam();
    $burung = new Burung();
    $capung = new Capung();

    $ayam->bertelur();
    echo "<br>";
    $burung->bertelur();
    echo "<br>";
    $burung->terbang();
    echo "<br>";
    $capung->terbang();

?>