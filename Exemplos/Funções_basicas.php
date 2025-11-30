<?php
// Data atual
$dataAtual = date("d/m/Y");
echo "Data atual (dd/mm/yyyy): " . $dataAtual . "<br>";

// Data com hora
$dataHoraAtual = date("d/m/Y H:i:s");
echo "Data e hora atual (dd/mm/yyyy hh:mm:ss): " . $dataHoraAtual . "<br>";

// Formato de data mais detalhado
$dataDetalhada = date("l, d F Y H:i:s");
echo "Data detalhada (ex: Segunda-feira, 30 Novembro 2025 14:00:00): " . $dataDetalhada . "<br>";

// Mostrar apenas o dia da semana
$diaSemana = date("l");
echo "Dia da semana (ex: Segunda-feira): " . $diaSemana . "<br>";

// Formato de hora (apenas a hora e minutos)
$hora = date("H:i");
echo "Hora atual (hh:mm): " . $hora . "<br>";

// Exibir data no formato de "Ano/Mês/Dia"
$dataAnoMesDia = date("Y/m/d");
echo "Data no formato (yyyy/mm/dd): " . $dataAnoMesDia . "<br>";

// Manipulando data para mostrar a data de amanhã
$amanha = date("d/m/Y", strtotime("+1 day"));
echo "Amanhã: " . $amanha . "<br>";

// Manipulando data para mostrar a data de 7 dias atrás
$seteDiasAtras = date("d/m/Y", strtotime("-7 days"));
echo "7 dias atrás: " . $seteDiasAtras . "<br>";

// Exibindo data de um dia específico
$diaEspecifico = date("d/m/Y", strtotime("2025-12-25"));
echo "Dia específico (Natal): " . $diaEspecifico . "<br>";
?>
