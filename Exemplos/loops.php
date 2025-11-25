<?php
#---------- loop com o for: ------------#

echo "Iniciando contagem em loop com 'for': \n";
// Loop 'for' para contar de 1 a 5
for ($i = 1; $i <= 5; $i++) {
    // O código dentro deste bloco será executado em cada repetição
    echo "Contagem atual: " . $i . "\n"; #OBS: a quebra de linha pode ser <br> em versões de HTML
}
echo "\n O loop terminou.\n";

#---------- loop com o while: ------------#
// 1. Inicialização: Define a variável de controle antes do loop.
$contador = 5; 

echo "\nIniciando a contagem em loop com 'while': \n";
// 2. Condição: O loop continua ENQUANTO $contador for maior ou igual a 1.
while ($contador >= 1) {
    
    // O código dentro deste bloco é executado em cada repetição
    echo "Contagem atual: " . $contador . "\n";
    
    // 3. Decremento: É crucial modificar a variável de controle para que a condição mude.
    // Se esta linha for esquecida, o loop se torna infinito!
    $contador--; // É o mesmo que: $contador = $contador - 1;
}

echo "Lançamento! Fim da contagem.";

