<?php
require __DIR__ . '/vendor/autoload.php';

use PHPJasper\PHPJasper;

$input = '../../../../../../Reportes/estudiantes.jasper';//'C:\\xampp\\htdocs\\cuarto\\reportes\\estudiantes.jasper';
$output = '/tmp/estudiantes';
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
    'resources' => '../../../../../../resources'
];

$jasper = new PHPJasper;

$jasper->process(
    $input,
    $output,
    $options
)->execute();


$file = '/var/www/html/Reportes/estudiantes.pdf';

if (file_exists($file)) {
    // Establecer encabezados para indicar que es un archivo PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="estudiantes.pdf"');
    header('Content-Length: ' . filesize($file));

    // Leer el archivo y enviarlo al navegador
    readfile($file);
    exit; // Asegúrate de que no se ejecute más código después de enviar el archivo
} else {
    echo 'El archivo no existe.';
}

?>