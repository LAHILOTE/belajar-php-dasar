<?php
echo 'Nama : ';
echo 'Machmud Wahyu Domili';

echo "\n";

echo "Nama : ";
echo "Machmud\t Wahyu\t Domili";

echo <<<TEXT
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

TEXT;

echo <<<'TEXT'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan nowdoc

TEXT;
?>