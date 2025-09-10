<?php
 
// 1) Criar um array e mostrar seus elementos
echo "<h3>1) Array Original de Gatos:</h3>";
$gatos = ["siames", "persa", "sphynx", "selkirk", "maine coon"]; // Array de gatos
echo "<ul>";
foreach ($gatos as $gato) {
    echo "<li>$gato</li>";
}
echo "</ul>";
 
echo "<hr>";
 
// 2) Adicionar um elemento na terceira posição (índice 2)
echo "<h3>2) Adicionando 'Ragdoll' na terceira posição:</h3>";
array_splice($gatos, 2, 0, "Ragdoll"); // Adiciona 'Ragdoll' no índice 2 sem remover ninguém
echo "<ul>";
foreach ($gatos as $gato) {
    echo "<li>$gato</li>";
}
echo "</ul>";
 
echo "<hr>";
 
// 3) Excluir o último elemento
echo "<h3>3) Excluindo o último elemento:</h3>";
array_pop($gatos); // Remove o último elemento do array
echo "<ul>";
foreach ($gatos as $gato) {
    echo "<li>$gato</li>";
}
echo "</ul>";
 
echo "<hr>";
 
 
// 4) Utilizar array_map (com base na seleção do formulário)
echo "<h3>4) Usando array_map para destacar a raça escolhida:</h3>";
 

$gatoEscolhido = $_GET['gatos'] ?? 'Nenhum'; 
 
// O array_map cria um NOVO array, não modifica o original.
$gatosDestacados = array_map(function($valor) use ($gatoEscolhido) {
    // Se o valor atual for o escolhido, adiciona um texto. Senão, retorna o valor como está.
    return $valor === $gatoEscolhido ? "<b>$valor (Sua escolha!)</b>" : $valor;
}, $gatos); // Usa o array $gatos já modificado
 
// Exibe o resultado do array_map
echo "<p>Você escolheu: <strong>$gatoEscolhido</strong></p>";
echo "<ul>";
foreach ($gatosDestacados as $gato) {
    echo "<li>$gato</li>";
}
echo "</ul>";
 
echo "<hr>";
 
// Usando array_search para encontrar a posição de um elemento
$posicao = array_search("sphynx", $gatos);
 
// Verifica se a raça foi encontrada (array_search retorna 'false' se não encontrar)
if ($posicao !== false) {
    
    $mensagem = "A raça 'sphynx' foi encontrada na posição de índice: $posicao.";
} else {
    $mensagem = "A raça 'sphynx' não foi encontrada no array final.";
}
 

echo "<p>$mensagem</p>";
 
?>