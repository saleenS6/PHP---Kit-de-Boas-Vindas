<?php
// Abre o bloco de código PHP (obrigatório em arquivos .php)
$nota = 7;               // 1) Declara a variável $nota e atribui o valor 7

// 2) Estrutura condicional: verifica a primeira condição
if ($nota >= 7) {        // - testa se $nota é maior ou igual a 7
    echo "Aprovado!";    // - se for verdade, imprime "Aprovado!"
} elseif ($nota >= 5) {  // 3) Caso a primeira condição seja falsa, testa esta: nota >= 5
    echo "Recuperação!"; // - se essa for verdade, imprime "Recuperação!"
} else {                 // 4) Se nenhuma das condições acima for verdadeira
    echo "Reprovado!";   // - imprime "Reprovado!"
}
// Fecha o bloco PHP automaticamente ao final do arquivo (a tag de fechamento ?> é opcional em alguns contextos)
?>
