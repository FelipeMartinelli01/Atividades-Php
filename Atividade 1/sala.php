<?php

/*
Crie um programa usando funções que vai ajudar a unimar
a abrir salas de ADS para o próximo ano. 
Vamos precisar considerar o número de turmas, 
o número de salas, mesas por sala, um computador por aluno
e os custos, por sala e total.

Custo por computador: R$3000
Custo por mesa: R$500
Cada turma tem no máximo 50 alunos
As salas tem 5 colunas por 10 fileiras (se a turma encher)
Cada mesa cabem dois computadores (dois alunos).

A função principal deve retornar um array com outros
arrays internos (um por turma que abrir), mais as 
infos gerais de custo. Exemplo.

Alunos: 90
Retorno:
Array(
"custoTotal":x,
"salas":2,
"turmas":array(
    "alunos":50,
    "computadores:50,
    "mesas":25,
    "custo":x
    )
)

*/
<?php

function calcularSalasADS($alunos) {
    $alunosPorTurma = 50;
    $alunosRestantes = $alunos;
    $turmas = [];

    while ($alunosRestantes > 0) {
        $alunosNaTurma = min($alunosPorTurma, $alunosRestantes);
        $computadoresNaTurma = $alunosNaTurma;
        $mesasNaTurma = ceil($alunosNaTurma / 2);
        $custoTurma = ($computadoresNaTurma * 3000) + ($mesasNaTurma * 500);

        $turmas[] = [
            "alunos" => $alunosNaTurma,
            "computadores" => $computadoresNaTurma,
            "mesas" => $mesasNaTurma,
            "custo" => $custoTurma
        ];

        $alunosRestantes -= $alunosNaTurma;
    }

    $custoTotal = array_reduce($turmas, function($carry, $turma) {
        return $carry + $turma['custo'];
    }, 0);

    $salasNecessarias = count($turmas);

    return [
        "custoTotal" => $custoTotal,
        "salas" => $salasNecessarias,
        "turmas" => $turmas
    ];
}

$alunosTotal = 90;
$resultado = calcularSalasADS($alunosTotal);

print_r($resultado);

?>
