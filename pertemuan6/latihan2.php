<?php
//$mahasiswa = [
   // ["lusiana", "043040023", "rekayasa perangkat lunak", "lusianadewi02062007@gmail.com"],
   // ["lalaw", "043040023", "rekayasa perangkat lunak", "lalaw@gmail.com"]
//];

//array associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa =[
    [
    "nama" => "fandi",
    "nrp" => "043040023",
    "email" => "fandy02062007@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "anime2.img"
    ],
    [
        "nama" => "alexa",
        "nrp" => "043040023",
        "email" => "qwalexa@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "anime1.img"
        ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    
<h1>daftar mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) :?>
<ul>
    <li>
        <img src="img/fandy.jpeg">
    <li>nama:<? $mhs["nama"] ;?></li>
    <li>NRP: <?$mhs["nrp"] ;?></li>
    <li>Jurusan:<?["jurusan"] ;?></li>
    <li>Email:<?["email"] ;?></li>
</ul>
<?php endforeach; ?>

</body>
</html> 
