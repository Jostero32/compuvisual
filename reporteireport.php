<?php
require __DIR__ . '/vendor/autoload.php';

use PHPJasper\PHPJasper;

$inputJrxml = __DIR__ . '/Reportes/estudiantes.jrxml';
$inputJasper = __DIR__ . '/Reportes/estudiantes.jasper';
$output = '/tmp/estudiantes';

$options = [
    'format' => ['pdf'],
    'locale' => 'en',
    'params' => [],
    'db_connection' => [
        'driver' => 'mysql',
        'username' => 'mysql',
        'host' => 'mysql-iomk',
        'database' => 'mysql',
        'password' => 'Hrg52t4DDD6NhP/i12CgYV4Eg2l0YiTNt4W+vqZCSMA=',
        'port' => '3306'
    ],
    'resources' => __DIR__ . '/Reportes/images'
];

$jasper = new PHPJasper;

// Compilar siempre el archivo .jrxml
$jasper->compile($inputJrxml)->execute();

// Generar el reporte en PDF
$jasper->process(
    $inputJasper,
    $output,
    $options
)->execute();

$file = $output . '.pdf';

if (file_exists($file)) {
    // Establecer encabezados para indicar que es un archivo PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="estudiantes.pdf"');
    header('Content-Length: ' . filesize($file));

    // Leer el archivo y enviarlo al navegador
    readfile($file);
    exit;
} else {
    echo 'El archivo no existe.';
}
