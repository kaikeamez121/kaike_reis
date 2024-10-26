<?php
//faz a requisicao
require_once 'vendor/autoload.php';
//chama a classe
$mpdf= new \Mpdf\Mpdf();
//cria um objeto do tipo string com o body do HTML
$html= '<h1>Minha primeira pagina HTML em PDF</h1>';
//ao inves de usar a String diretamente, se usa um objeto
$mpdf->WriteHTML($html);
//envia o pdf
$mpdf->Output();