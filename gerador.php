<?php

/* Carrega a classe DOMPdf */
require_once("dompdf/dompdf_config.inc.php");
/* Cria a instância */
$dompdf = new DOMPDF();
/* Carrega seu HTML */

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$titulo = $data['titulo'];
$descricao = $data['descricao'];
$quantidade = $data['numero_rifas'];
$premio = $data['premio'];


$html.='<head> <link rel="stylesheet" href="/var/www/html/servidor/ProjetoRifa/style-rifa.css" media="all" /></head>';
$html.='
<table>
';
while($quantidade !=0){
$html.='
<tr>
<td class="texto-left borda">
<h6>Nº '.$quantidade.'</h6>
<br/>
<br/>
<div>Nome: ________________________________ </div><br/>
<div>Telefone: ____________________________ </div><br/>
<div>E-mail: ______________________________ </div>
</td>
<td class="texto-left borda">
<h6>Nº '.$quantidade.'</h6>
<h3 class="texto">'.$titulo.'</h3>
<div class="texto">'.$descricao.'</div>.
<h4 class="texto">Prêmio: </h4>
<div class="texto">'.$premio.'</div>
<br/>
</td>
</tr>';
$quantidade --;
}
$html.='
</table>
';

$dompdf->load_html($html);

/* Renderiza */
$dompdf->render();
/*Estilo css do pdf*/
$dompdf->set_base_path('style-rifa.css');
/* Exibe */
$dompdf->stream(
    "rifa.pdf", /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);
?>
