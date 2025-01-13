<?php
require __DIR__ . '/vendor/autoload.php';

use PHPJasper\PHPJasper;

$input = 'C:\\xampp\\htdocs\\cuarto\\reportes\\estudiantes.jasper';
$output = 'C:\\xampp\\htdocs\\cuarto\\reportes\\estudiantes';
$options = [
    'format' => ['pdf'],
    'locale' => 'en',
    'params' => [],
    'path_to_java' => 'C:\Program Files\Java\jre1.8.0_341\bin\java.exe',
    'db_connection' => [
        'driver' => 'mysql', // Corregido de 'msyql' a 'mysql'
        'username' => 'root',
        'host' => 'localhost',
        'database' => 'cuarto',
        'port' => '3306'
    ],
    'resources' => 'C:\\xampp\\htdocs\\cuarto\\resources'
];

$jasper = new PHPJasper;

$jasper->process(
    $input,
    $output,
    $options
)->execute();
?>