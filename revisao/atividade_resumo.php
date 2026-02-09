<?php
    session_start();

    class Aluno{
        private $nome;
        private $sobrenome;
        private $nota;
        private $dataNascimento;

        public function __construct($nome, $sobrenome, $nota, $dataNascimento){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->nota = $nota;
            $this->dataNascimento = $dataNascimento;
        }

        public function salvar(){
            //Criar o array se ainda não existir
            if (!isset($_SESSION['Alunos'])) {
                $_SESSION['Alunos'] = [];
            }

            //cauculo idade 
            $dataNascimento = $this->dataNascimento;
            $dataNascObj = new DateTime($dataNascimento);
            $dataAtual = new DateTime();
            $idade = $dataNascObj->diff($dataAtual)->y;

            //Mostra a idade
            //echo "Idade: " . $idade . " anos";


            $_SESSION['Alunos'][] = [
                'nome' => $this->nome,
                'sobrenome' => $this->sobrenome,
                'nota' => $this->nota,
                'dataNascimento' => $this->dataNascimento,
                'idade' => $idade
            ];
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nota = $_POST['nota'];
        $dataNascimento = $_POST['dataNascimento'];


        $aluno = new Aluno($nome, $sobrenome, $nota, $dataNascimento);
        $aluno->salvar();

    }

    if(isset($_GET['reset'])) {
        session_destroy();
    }

        function calcularmedia ($alunos) {
        $soma = 0;
        $quantidade = 0;

        foreach ($alunos as $aluno) {
            $soma = $soma + intval ($aluno ['nota']);
            $quantidade++;
        }

        $media = $soma / $quantidade;

        return $media;
    }

    // Exibir session
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
</head>
<body>
    <h2 style="font-family:Arial">Cadastro de alunos</h2>
    <form action="" method="POST" style="background:#f2f2f2; padding:15px border-radius:8px; width:300px">
        Nome: <br>
        <input type="text" name="nome" value="" style="width:90%; margin-bottom:10px"><br>

        Sobrenome: <br>
        <input type="text" name="sobrenome" value="" style="width:90%; margin-bottom:10px"><br>
        
        Nota:<br>
        <input type="number" name="nota" value="" style="width:90%; margin-bottom:10px"><br>
        
        Data Nascimento:<br>
        <input type="date" name="dataNascimento" value="" style="width:90%; margin-bottom:10px"><br>

        <button type="submit" style="background:green; color:white; padding:5px 10px;">Cadastrar</button>
        <button type="reset" style="background:red; color:white; padding:5px 10px;">Limpar</button>
    </form>
    <?php if(isset($_SESSION['Alunos'])): ?>
        <table border="1">
            <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Nota</th>
                        <th>Data Nascimento</th>
                        <th>Idade</th>
                    </tr>
            </thead>
            <br><br>
            <tbody>
                <?php foreach ($_SESSION['Alunos'] as $aluno): ?>
                    <tr>
                        <td><?= $aluno['nome'] ?></td>
                        <td><?= $aluno['sobrenome'] ?></td>
                        <td><?= $aluno['nota'] ?></td>
                        <td><?= $aluno['dataNascimento'] ?></td>
                        <td><?= $aluno['idade'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <span> Média dos Alunos: <?= calcularmedia($_SESSION['Alunos']) ?></span>
        <?php endif; ?>
    </body>
</html