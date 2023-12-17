<?php


require_once 'vendor/autoload.php'; // Carregue o autoload do Composer

use PhpOffice\PhpSpreadsheet\IOFactory;

$planilha = "C:/xampp/htdocs/php-login/controller-office365.xlsx"; // Substitua pelo caminho real do seu arquivo

try {
    $spreadsheet = IOFactory::load($planilha);
    $sheet = $spreadsheet->getActiveSheet();

    echo '<table border="1">';
    
    // Itere sobre as células da planilha
    foreach ($sheet->getRowIterator() as $row) {
        echo '<tr>';
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false); // Isso permite que você itere sobre todas as células, mesmo que estejam vazias

        foreach ($cellIterator as $cell) {
            echo '<td>' . $cell->getValue() . '</td>';
        }

        echo '</tr>';
    }

    echo '</table>';
} catch (Exception $e) {
    echo 'Erro ao ler a planilha: ', $e->getMessage();
}
?>

