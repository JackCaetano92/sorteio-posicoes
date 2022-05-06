<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sorteio Online</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilo.css'>
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <script src='main.js'></script>
</head>
<body>
<br>

<?php
 
// Matriz com todos os funcionários
$funcionarios = array("Jair", "Jackson", "Gabriel 1", "Sulivan", "Gabriel 2", "David", "Allef");

// Definindo o número de funcionários
$numFuncionarios = sizeof($funcionarios);

// Sorteando
# Primeira posição
$sorteado[1] = $funcionarios[rand(0,$numFuncionarios - 1)];

# Segunda posição
for ($i = 1; $i < 2; $i++) {
    $sorteado[2] = $funcionarios[rand(0,$numFuncionarios - 1)];
    // Caso o funcionário já tenha sido  sorteado, sorteia novamente.
    if ($sorteado[2] == $sorteado[1]) {
        --$i;
    }
}
# Terceira posição
for ($i = 1; $i < 2; $i++) {
    $sorteado[3] = $funcionarios[rand(0,$numFuncionarios - 1)];
    // Caso o funcionário já tenha sido  sorteado, sorteia novamente.
    if ($sorteado[3] == $sorteado[1] || $sorteado[3] == $sorteado[2]) {
        --$i;
    }
}
# Quarta posição
for ($i = 1; $i < 2; $i++) {
    $sorteado[4] = $funcionarios[rand(0,$numFuncionarios - 1)];
    // Caso o funcionário já tenha sido  sorteado, sorteia novamente.
    if ($sorteado[4] == $sorteado[1] || $sorteado[4] == $sorteado[2] || $sorteado[4] == $sorteado[3]) {
        --$i;
    }
}
# Quinta posição
for ($i = 1; $i < 2; $i++) {
    $sorteado[5] = $funcionarios[rand(0,$numFuncionarios - 1)];
    // Caso o funcionário já tenha sido  sorteado, sorteia novamente.
    if ($sorteado[5] == $sorteado[1] || $sorteado[5] == $sorteado[2] || $sorteado[5] == $sorteado[3] || $sorteado[5] == $sorteado[4]) {
        --$i;
    }
}
# Sexta posição
for ($i = 1; $i < 2; $i++) {
    $sorteado[6] = $funcionarios[rand(0,$numFuncionarios - 1)];
    // Caso o funcionário já tenha sido  sorteado, sorteia novamente.
    if ($sorteado[6] == $sorteado[1] || $sorteado[6] == $sorteado[2] || $sorteado[6] == $sorteado[3] || $sorteado[6] == $sorteado[4] || $sorteado[6] == $sorteado[5]) {
        --$i;
    }
}
# Sétima posição
for ($i = 1; $i < 2; $i++) {
    $sorteado[7] = $funcionarios[rand(0,$numFuncionarios - 1)];
    // Caso o funcionário já tenha sido  sorteado, sorteia novamente.
    if ($sorteado[7] == $sorteado[1] || $sorteado[7] == $sorteado[2] || $sorteado[7] == $sorteado[3] || $sorteado[7] == $sorteado[4] || $sorteado[7] == $sorteado[5] || $sorteado[7] == $sorteado[6]) {
        --$i;
    }
}

// Exibindo posições
echo '<div class="topo">';
    echo '<div class="posicoes">';
        echo "<b>ORDEM DO SORTEIO:</b>&nbsp;&nbsp; ";
        echo "<b>[1</b> - " . $sorteado[1] . "] &nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<b>[2</b> - " . $sorteado[2] . "] &nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<b>[3</b> - " . $sorteado[3] . "] &nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<b>[4</b> - " . $sorteado[4] . "] &nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<b>[5</b> - " . $sorteado[5] . "] &nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<b>[6</b> - " . $sorteado[6] . "] &nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<b>[7</b> - " . $sorteado[7] . "]";
    echo '</div>';


    // Botão IMPRIMIR
    echo '<div class="botoes">';
        echo '<form>
            <button class="refresh" onClick="window.location.href=window.location.href">Sortear Novamente</button>
            <input class="imprimir" type="button" value="Imprimir" onClick="window.print()"/>   
            </form>';
    echo '</div>';
echo "</div>";

?>





<div class="sorteio"><h2> </h2></div>
    <div class="div-table">
        <div class="titulo">-Segunda-</div>
        <table class="tabela">
            <thead>
                <tr>
                    <th></th>
                    <th>Sobra</th>
                    <th>Caçamba 1</th>
                    <th>J</th>
                    <th>Passa</th>
                    <th>Caçamba 2</th>
                    <th>Shrink</th>
                    <th>Pallet</th>
                </tr>
            </thead>
            <tbody> 
                <tr><th class="tbody-th">14:28</th>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                </tr>
                <tr><th class="tbody-th">15:30</th>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                </tr>
                <tr><th class="tbody-th">16:30</th>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                </tr>
                <tr><th class="tbody-th">17:30</th>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                </tr>
                <tr><th class="tbody-th">18:30</th>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                </tr>
                <tr class="janta"><th class="tbody-th">19:15</th><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td></tr>
                <tr><th class="tbody-th">20:15</th>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                </tr>
                <tr><th class="tbody-th">21:30</th>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                </tr>
                <tr><th class="tbody-th">22:30</th>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="div-table">
        <div class="titulo">-Terça-</div>
        <table class="tabela">
            <thead>
                <tr>
                    <th></th>
                    <th>Sobra</th>
                    <th>Caçamba 1</th>
                    <th>J</th>
                    <th>Passa</th>
                    <th>Caçamba 2</th>
                    <th>Shrink</th>
                    <th>Pallet</th>
                </tr>
            </thead>
            <tbody> 
                 <tr><th class="tbody-th">14:28</th>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                </tr>
                <tr><th class="tbody-th">15:30</th>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                </tr>
                <tr><th class="tbody-th">16:30</th>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                </tr>
                <tr><th class="tbody-th">17:30</th>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                </tr>
                <tr><th class="tbody-th">18:30</th>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                </tr>
                <tr class="janta"><th class="tbody-th">19:15</th><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td></tr>
                <tr><th class="tbody-th">20:15</th>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                </tr>
                <tr><th class="tbody-th">21:30</th>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                </tr>
                <tr><th class="tbody-th">22:30</th>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="div-table">
        <div class="titulo">-Quarta-</div>
        <table class="tabela">
            <thead>
                <tr>
                    <th></th>
                    <th>Sobra</th>
                    <th>Caçamba 1</th>
                    <th>J</th>
                    <th>Passa</th>
                    <th>Caçamba 2</th>
                    <th>Shrink</th>
                    <th>Pallet</th>
                </tr>
            </thead>
            <tbody> 
                <tr><th class="tbody-th">14:28</th>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                </tr>
                <tr><th class="tbody-th">15:30</th>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                </tr>
                <tr><th class="tbody-th">16:30</th>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                </tr>
                <tr><th class="tbody-th">17:30</th>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                </tr>
                <tr><th class="tbody-th">16:30</th>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                </tr>
                <tr class="janta"><th class="tbody-th">19:15</th><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td></tr>
                <tr><th class="tbody-th">20:15</th>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                </tr>
                <tr><th class="tbody-th">21:30</th>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                </tr>
                <tr><th class="tbody-th">22:30</th>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="div-table">
        <div class="titulo">-Quinta-</div>
        <table class="tabela">
            <thead>
                <tr>
                    <th></th>
                    <th>Sobra</th>
                    <th>Caçamba 1</th>
                    <th>J</th>
                    <th>Passa</th>
                    <th>Caçamba 2</th>
                    <th>Shrink</th>
                    <th>Pallet</th>
                </tr>
            </thead>
            <tbody> 
                <tr><th class="tbody-th">14:28</th>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                </tr>
                <tr><th class="tbody-th">15:30</th>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                </tr>
                <tr><th class="tbody-th">16:30</th>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                </tr>
                <tr><th class="tbody-th">17:30</th>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                </tr>
                <tr><th class="tbody-th">18:30</th>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                </tr>
                <tr class="janta"><th class="tbody-th">19:15</th><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td></tr>
                <tr><th class="tbody-th">20:15</th>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                </tr>
                <tr><th class="tbody-th">21:30</th>                    
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                </tr>
                <tr><th class="tbody-th">22:30</th>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="div-table">
        <div class="titulo">-Sexta-</div>
        <table class="tabela">
            <thead>
                <tr>
                    <th></th>
                    <th>Sobra</th>
                    <th>Caçamba 1</th>
                    <th>J</th>
                    <th>Passa</th>
                    <th>Caçamba 2</th>
                    <th>Shrink</th>
                    <th>Pallet</th>
                </tr>
            </thead>
            <tbody> 
                <tr><th class="tbody-th">14:28</th>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                </tr>
                <tr><th class="tbody-th">15:30</th>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                </tr>
                <tr><th class="tbody-th">16:30</th>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                </tr>
                <tr><th class="tbody-th">17:30</th>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                </tr>
                <tr><th class="tbody-th">18:30</th>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                </tr>
                <tr class="janta"><th class="tbody-th">19:15</th><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td><td>***JANTA***</td></tr>
                <tr><th class="tbody-th">20:15</th>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                </tr>
                <tr><th class="tbody-th">21:30</th>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                </tr>
                <tr><th class="tbody-th">22:30</th>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="div-table">
        <div class="titulo">-Sábado-</div>
        <table class="tabela">
            <thead>
                <tr>
                    <th></th>
                    <th>Sobra</th>
                    <th>Caçamba 1</th>
                    <th>J</th>
                    <th>Passa</th>
                    <th>Caçamba 2</th>
                    <th>Shrink</th>
                    <th>Pallet</th>
                </tr>
            </thead>
            <tbody> 
                <tr><th class="tbody-th">11:00</th>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                </tr>
                <tr><th class="tbody-th">12:00</th>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                </tr>
                <tr><th class="tbody-th">13:00</th>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                </tr>
                <tr class="janta"><th class="tbody-th">14:00</th><td>***LANCHE***</td><td>***LANCHE***</td><td>***LANCHE***</td><td>***LANCHE***</td><td>***LANCHE***</td><td>***LANCHE***</td><td>***LANCHE***</td></tr>
                <tr><th class="tbody-th">14:30</th>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                </tr>
                <tr><th class="tbody-th">15:00</th>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                    <td><?php echo $sorteado[5] ?></td>
                </tr>
                <tr><th class="tbody-th">16:00</th>
                    <td><?php echo $sorteado[5] ?></td>
                    <td><?php echo $sorteado[6] ?></td>
                    <td><?php echo $sorteado[7] ?></td>
                    <td><?php echo $sorteado[1] ?></td>
                    <td><?php echo $sorteado[2] ?></td>
                    <td><?php echo $sorteado[3] ?></td>
                    <td><?php echo $sorteado[4] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
