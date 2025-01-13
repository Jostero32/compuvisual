<?php
require __DIR__ . '/vendor/autoload.php';

use PHPJasper\PHPJasper;

$basePath = __DIR__ . '/Reportes/';  // Directorio base donde están los archivos .jrxml y .jasper
$inputJrxml = $basePath . 'estudiantes.jrxml';  // Archivo JRXML
$inputJasper = $basePath . 'estudiantes.jasper';  // Archivo Jasper
$output = '/tmp/estudiantes';  // Ruta donde se guardará el archivo PDF generado
$pdfFile = '/var/www/html/Reportes/estudiantes.pdf';  // Ruta final para guardar el archivo PDF generado

// Verifica si el archivo .jasper ya está compilado, si no lo compila
if (!file_exists($inputJasper)) {
    echo "Compilando el archivo JRXML a Jasper...\n";
    $jasper = new PHPJasper;
    $jasper->compile($inputJrxml)->execute();
}

// Opciones de configuración
$options = [
    'format' => ['pdf'],
    'locale' => 'en',
    'params' => [],
    'db_connection' => [
        'driver' => 'mysql', // Corregido de 'msyql' a 'mysql'
        'username' => 'mysql',
        'host' => 'mysql-iomk',
        'database' => 'mysql',
        'password' => 'Hrg52t4DDD6NhP/i12CgYV4Eg2l0YiTNt4W+vqZCSMA=',
        'port' => '3306'
    ],
    'resources' => $basePath . 'resources'  // Ruta a los recursos
];

// Procesar el reporte
$jasper = new PHPJasper;

$jasper->process(
    $inputJasper,  // Usamos el archivo compilado .jasper
    $output,
    $options
)->execute();

// Verifica si el archivo PDF existe después de procesarlo
if (file_exists($pdfFile)) {
    // Establecer encabezados para indicar que es un archivo PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="estudiantes.pdf"');
    header('Content-Length: ' . filesize($pdfFile));

    // Leer el archivo y enviarlo al navegador
    readfile($pdfFile);
    exit;  // Asegúrate de que no se ejecute más código después de enviar el archivo
} else {
    echo 'El archivo PDF no existe.';
}
?>
