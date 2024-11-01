<?php
require_once __DIR__ . '/vendor/autoload.php';

// Array de produtos
$produtos = [
    // ... (seu array de produtos)
];

// Instancia o mPDF
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'margin_left' => 15,
    'margin_right' => 15,
    'margin_top' => 16,
    'margin_bottom' => 16,
    'margin_header' => 9,
    'margin_footer' => 9,   

]);

// Adiciona um cabeçalho personalizado
$mpdf->SetHTMLHeader('
    <h1 style="text-align: center;">Relatório de Produtos</h1>
    <p style="text-align: right;">Gerado em: ' . date('d/m/Y H:i:s') . '</p>
');

// Cria a tabela
$html = '
<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>';

// Percorre o array e adiciona as linhas da tabela
foreach ($produtos as $produto) {
    $html .= '
        <tr>
            <td>' . $produto['nome'] . '</td>
            <td>' . $produto['categoria'] . '</td>
            <td>R$ ' . number_format($produto['preco'], 2, ',', '.') . '</td>
            <td>' . $produto['descricao'] . '</td>
        </tr>';
}

$html .= '</tbody>
</table>';

// Adiciona o HTML ao PDF
$mpdf->WriteHTML($html);

// Gera o PDF
$mpdf->Output('relatorio_produtos.pdf', 'D'); // 'D' para download