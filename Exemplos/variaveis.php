<?php
// Define a codificação para evitar problemas com caracteres especiais
header('Content-Type: text/html; charset=utf-8');

// Definição da variável $output para armazenar a saída de var_dump()
ob_start();

## 💡 Variáveis e Tipos de Dados em PHP

echo "
<!DOCTYPE html>
<html lang=\"pt-BR\">
<head>
    <meta charset=\"UTF-8\">
    <title>Variáveis e Tipos de Dados em PHP</title>
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #f4f7f9; color: #333; margin: 20px; }
        .container { max-width: 800px; margin: auto; background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        h1 { color: #007bff; border-bottom: 2px solid #007bff; padding-bottom: 10px; }
        h2 { color: #34495e; margin-top: 25px; }
        .variavel-bloco { background-color: #ecf0f1; border-left: 5px solid #007bff; padding: 15px; margin-bottom: 15px; border-radius: 4px; }
        .variavel-bloco strong { color: #2c3e50; display: block; margin-bottom: 5px; }
        .dump-output { background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 4px; overflow-x: auto; font-family: 'Consolas', monospace; font-size: 0.9em; }
        .dump-output pre { margin: 0; white-space: pre-wrap; word-wrap: break-word; }
    </style>
</head>
<body>
    <div class=\"container\">
";

echo "<h1>Exemplo de Variáveis e Tipos de Dados em PHP</h1><hr>";

// --- 1. Tipo String (Texto) ---
$nome = "Maria Silva";
$saudacao = 'Olá, mundo!';

echo "<h2>1. String (Texto)</h2>";
echo "<div class=\"variavel-bloco\"><strong>Variável \$nome:</strong> $nome";

// Captura a saída de var_dump para colocá-la dentro da nossa div estilizada
ob_start();
var_dump($nome);
$output_nome = ob_get_clean();
echo "<div class=\"dump-output\"><pre>{$output_nome}</pre></div>";

echo "</div>"; // Fecha .variavel-bloco

// --- 2. Tipo Integer (Números Inteiros) ---
$idade = 30;

echo "<h2>2. Integer (Números Inteiros)</h2>";
echo "<div class=\"variavel-bloco\"><strong>Variável \$idade:</strong> $idade anos";

ob_start();
var_dump($idade);
$output_idade = ob_get_clean();
echo "<div class=\"dump-output\"><pre>{$output_idade}</pre></div>";

echo "</div>"; // Fecha .variavel-bloco

// --- 3. Tipo Float (Números Decimais/Ponto Flutuante) ---
$preco = 19.99;

echo "<h2>3. Float (Números Decimais)</h2>";
echo "<div class=\"variavel-bloco\"><strong>Variável \$preco:</strong> R$ $preco";

ob_start();
var_dump($preco);
$output_preco = ob_get_clean();
echo "<div class=\"dump-output\"><pre>{$output_preco}</pre></div>";

echo "</div>"; // Fecha .variavel-bloco

// --- 4. Tipo Boolean (Booleano - Verdadeiro ou Falso) ---
$estaLogado = true;

echo "<h2>4. Boolean (Verdadeiro/Falso)</h2>";
echo "<div class=\"variavel-bloco\"><strong>Variável \$estaLogado:</strong> " . ($estaLogado ? 'Verdadeiro (true)' : 'Falso (false)');

ob_start();
var_dump($estaLogado);
$output_bool = ob_get_clean();
echo "<div class=\"dump-output\"><pre>{$output_bool}</pre></div>";

echo "</div>"; // Fecha .variavel-bloco

// --- 5. Tipo NULL (Variável sem Valor) ---
$valorNulo = null;

echo "<h2>5. NULL (Sem Valor Atribuído)</h2>";
echo "<div class=\"variavel-bloco\"><strong>Variável \$valorNulo:</strong>";

ob_start();
var_dump($valorNulo);
$output_null = ob_get_clean();
echo "<div class=\"dump-output\"><pre>{$output_null}</pre></div>";

echo "</div>"; // Fecha .variavel-bloco

echo "
    </div>
</body>
</html>
";

ob_end_flush();
?>