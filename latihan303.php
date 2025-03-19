<?php
//Array Asociative
//Suatu array dengan index string dimana value nya tidak disimpan secara linear, melainkan dengan memberikan key tertentu.
$nilai = array("web1"=>80, "web2"=>95, "algo"=>75);

echo"Menampilkan data array associative";
echo"<ul>";
foreach($nilai as $nlabel => $nval){
    echo "<li>". $nlabel . ": " . $nval . "</li>";
}
echo"<ul>";

//Array Multidimensi
$nilaimhs = array (
    array("Wahyudi", "2234455", "Algo", "84"),
    array("Warsito", "11221166", "web1", "78"),
);

echo $nilaimhs [0][1];