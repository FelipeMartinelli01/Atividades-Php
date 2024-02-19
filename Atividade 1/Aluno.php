<?php
/*
Considerar um cenário onde o foco da classe aluno é para realizar uma chamada.
Assim a classe aluno deve ter atríbutos que possam identificar cada aluno e qual cursto e disciplinas o aluno cursa.
Além disso deve ter um atríbuto $presente, que define se o aluno esteve em aula(1) ou faltou(0).

Crie a classe, depois crie 5 instâncias baseadas na classe Aluno.
Coloque as 5 instâncias em um array, seu papel é contar o total de aluno presentes e o total de faltantes.
Depois faça uma listagem na tela mostrando o nome de cada aluno e na frente se esteve em aula ou faltou.
*/

class Aluno {
    public $nome;
    public $curso;
    public $disciplinas;
    public $presente;

    public function __construct($nome, $curso, $disciplinas, $presente) {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->disciplinas = $disciplinas;
        $this->presente = $presente;
    }
}

$aluno1 = new Aluno("João", "Engenharia", ["Matemática", "Física", "Química"], 1);
$aluno2 = new Aluno("Maria", "Medicina", ["Anatomia", "Bioquímica", "Histologia"], 0);
$aluno3 = new Aluno("Pedro", "Direito", ["Direito Penal", "Direito Civil", "Direito Constitucional"], 1);
$aluno4 = new Aluno("Ana", "Psicologia", ["Psicologia Clínica", "Psicologia Social"], 0);
$aluno5 = new Aluno("Lucas", "Administração", ["Administração Financeira", "Marketing"], 1);

$alunos = [$aluno1, $aluno2, $aluno3, $aluno4, $aluno5];

$total_presentes = 0;
$total_faltantes = 0;

echo "Lista de Alunos e Presenças:\n";
foreach ($alunos as $aluno) {
    $presenca = ($aluno->presente == 1) ? "Presente" : "Faltou";
    echo "{$aluno->nome} - $presenca\n";
    
    // Atualiza os contadores
    if ($aluno->presente == 1) {
        $total_presentes++;
    } else {
        $total_faltantes++;
    }
}

// Exibe o total de alunos presentes e faltantes
echo "Total de Alunos Presentes: $total_presentes\n";
echo "Total de Alunos Faltantes: $total_faltantes\n";

