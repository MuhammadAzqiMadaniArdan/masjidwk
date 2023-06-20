<?php
    $conn = mysqli_connect("localhost", "root", "", "db_masjid");

    function query($query){
        global $conn;
        $hasil = mysqli_query($conn, $query);
        $box = [];
        while ( $baju = mysqli_fetch_assoc($hasil) ){
            $box[] = $baju;
        }
        return $box;
    }

    function tambahdata ($data){
        
        global $conn;
        $donatur =htmlspecialchars($data["donatur"]);
        $id =htmlspecialchars($data["id"]);
        $paket =htmlspecialchars($data["paket"]);
        $kategori =htmlspecialchars($data["kategori"]);
        $nominal =htmlspecialchars($data["nominal"]);

        $query ="INSERT INTO masjid
            VALUES
            ('$donatur','$id','$paket','$kategori','$nominal')";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);

    }

    ?>