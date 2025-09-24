<?php

require_once '../core/sql.php';

$id = 1;
$nome = 'Hugo';
$email = 'hugo.silveira@aluno.ifsp.edu.br';
$senha = '123mudar';
$dados = ['nome'  => $nome,
          'email' => $email,
          'senha' => $senha];

$entidade = 'usuario';
$criterio = [['id', '=',$id]];
$campos = ['id', 'nome', 'email'];
print_r($dados);
echo '<br>';
print_r($campos);
echo '<br>';
print_r($criterio);
echo '<br>';

// teste geracao INSERT
$instrucao = insert($entidade, $dados);
echo $instrucao. '<BR>';

// teste geracao UPDATE
$instrucao = update($entidade, $dados, $criterio);
echo $instrucao. '<BR>';

// teste geracao SELECT
$instrucao = select($entidade, $dados, $criterio);
echo $instrucao. '<BR>';

// teste geracao DELETE
$instrucao = delete($entidade, $criterio);
echo $instrucao. '<BR>';
?>