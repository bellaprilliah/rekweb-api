<?php 

// $mahasiswa = [
//     [
//     "nama" => "Bella Aprillia H",
//     "nrp" => "173040019",
//     "email" => "bellaah@mail.unpas.ac.id"
//     ],
//     [
//     "nama" => "Kim Doyoung",
//     "nrp" => "173040023",
//     "email" => "doyoung@mail.unpas.ac.id"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($mahasiswa);
echo $data;

?>