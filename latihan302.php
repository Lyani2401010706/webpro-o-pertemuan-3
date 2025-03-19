<?php
//Array dengan index
//Suatu array dengan index numeric dimana value atau nilainya disimpan secara liniear (data dalam urutan tertentu).

$teman = array("Wahyu","Santhi","Yeyen","Susanti","Jarjit");

$teman [0] = "Putu";
$teman [1] = "Wayan";
$teman [2] = "Made";
$teman [3] = "Komang";
$teman [4] = "Ketut";
$teman [5] = "Wayan Balik";


//Membaca data Array
echo "<h3> Daftar Teman</h3>";
echo "<ol>";
for($i=0;$i<count($teman);$i++){
    echo "<li>". $teman[$i] . "</li>";
}
echo "</ol>";

//Menggunakan perulangan foreach
echo "<h3> Daftar Teman - Menggunakan for each</h3>";
echo "<ol>";
foreach($teman as $nval){
    echo "<li>".$nval."</li>";
}
echo "</ol>";

echo "<h3> Daftar teman - menggunakan while</h3>";
echo "<ol>";
$i=0;
while($i<count($teman)){
    echo"<li>".$teman[$i]."</li>";
    $i++;
}
?>