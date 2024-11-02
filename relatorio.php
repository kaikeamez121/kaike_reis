<?php
$itens = [
    [
        'nomeProduto' => 'Smartphone',
        'tipo' => 'Eletrônicos',
        'valor' => '1200.00',
        'descricaoProduto' => 'Smartphone com 128GB de memória e câmera de alta resolução.'
    ],
    [
        'nomeProduto' => 'Livro de Romance',
        'tipo' => 'Livros',
        'valor' => '35.90',
        'descricaoProduto' => 'Livro de romance best-seller com 350 páginas.'
    ],
    [
        'nomeProduto' => 'Cafeteira Elétrica',
        'tipo' => 'Eletrodomésticos',
        'valor' => '150.00',
        'descricaoProduto' => 'Cafeteira elétrica com capacidade de 1.5 litros.'
    ],
    [
        'nomeProduto' => 'Mouse sem Fio',
        'tipo' => 'Informática',
        'valor' => '75.00',
        'descricaoProduto' => 'Mouse sem fio ergonômico com sensor óptico.'
    ],
    [
        'nomeProduto' => 'Shampoo Hidratante',
        'tipo' => 'Beleza',
        'valor' => '29.90',
        'descricaoProduto' => 'Shampoo hidratante para todos os tipos de cabelo.'
    ]
];
 
require_once 'vendor/autoload.php';
$pdf = new \Mpdf\Mpdf();
$dataAtual = date('d/m/Y');
$htmlConteudo = '
    <h1>Relatório de Produtos</h1>
    <p>Data de geração: ' . $dataAtual . '</p>
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #e0e0e0;">
                <th>Nome</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>';
 
foreach ($itens as $item) {
    $htmlConteudo .= '
        <tr>
            <td>' . $item['nomeProduto'] . '</td>
            <td>' . $item['tipo'] . '</td>
            <td>R$ ' . $item['valor'] . '</td>
            <td>' . $item['descricaoProduto'] . '</td>
        </tr>';
}
 
$htmlConteudo .= '
        </tbody>
    </table>';
 
$pdf->WriteHTML($htmlConteudo);
$pdf->Output();