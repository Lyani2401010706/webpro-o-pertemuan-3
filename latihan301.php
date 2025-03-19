<?php
//Perulangan while
//Perulangan pada blok pernyataan dilakukan selama kondisi syarat bernilai true
    $awal= 1;
    $akhir= 10;

    echo "<h3> Perulangan while </h3>";
    while($awal <= $akhir){
        echo "Perulangan ke-" .$awal."<br>";
        $awal++; //nilai $awal bisa berubah karena ditambahkan $awal+1; sehingga perulangan bisa terhenti
    }

//Perulangan do while
//Perulangan pada blok pernyataan sekali dan akan diulang selama kondisi syarat bernilai true
    $awal = 1;
    echo "<h3> Perulangan do While </h3>";
    do{
        echo "Perulangan ke-".$awal."<br>";
        $awal++;
    }while($awal<=$akhir);

//perbedaan while dan do while ialah pada letak evakuasi whilenya

//Perulangan For
//Perulangan pada blok instruksi dengan kententuan perulangan berdasarkan nilai awal dan nilai akhir
    $awal = 1;
    echo "<h3> Perulangan For</h3>";
    for($awal; $awal<=$akhir; $awal++){
        echo "Perulangan ke-". $awal."<br>";
    }
?>