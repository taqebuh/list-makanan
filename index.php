<?php
// Membaca hasil encode dari file
$encodedCode = file_get_contents('encoded.txt');

// Mendecode base64
$decodedCode = base64_decode($encodedCode);

// Mengeksekusi kode PHP yang telah didecode
eval('?>' . $decodedCode);
?>