<?php error_reporting(0);
    function Ngacak($length) {
        $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0;$i < $length;$i++) {
            $randomString.= $characters[rand(0, $charactersLength - 1) ];
        }
        return $randomString;
    }
    function Loop($jumlah = 20) {
        for ($i = 0;$i < $jumlah;$i++) {
            $result.= "" . Ngacak(10) . "\n";
        }
        return ($result);
    }
    echo '' . Loop() . ''; ?>
