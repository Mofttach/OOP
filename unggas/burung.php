<?php
    // require_once "Unggas.php";
    //     class burung extends unggas{
    //         function terbang() {
    //             echo "Wush....Saya bisa terbang";
    //         }
    //     }
    
    require_once "Unggas.php";
    require_once "terbang.php";
        class burung extends unggas{
            use Terbang;
        }
?>