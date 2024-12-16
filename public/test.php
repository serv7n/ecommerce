<?php 

$lm = 0; // Valor padrão para evitar erros

if (isset($_GET['lm'])) {
    $lm = filter_var($_GET['lm'], FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]]);
    if ($lm === false) {
        $lm = 0;
    }
}
echo $lm;
?>