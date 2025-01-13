<?php
require __DIR__ . '/vendor/autoload.php';

use PHPJasper\PHPJasper;

$input = '/Reportes/estudiantes.jasper';//'C:\\xampp\\htdocs\\cuarto\\reportes\\estudiantes.jasper';
$output = '/Reportes/estudiantes';
$options = [
    'format' => ['pdf'],
    'locale' => 'en',
    'params' => [],
    'db_connection' => [
        'driver' => 'mysql', // Corregido de 'msyql' a 'mysql'
        'username' => 'mysql',
        'host' => 'mysql-iomk',
        'database' => 'mysql',
        'password'=>'Hrg52t4DDD6NhP/i12CgYV4Eg2l0YiTNt4W+vqZCSMA=',
        'port' => '3306'
    ],
    'resources' => '/resources'
];

$jasper = new PHPJasper;

$jasper->process(
    $input,
    $output,
    $options
)->execute();
?>