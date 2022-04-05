<?php
include('./conexao.php');

// $query = "SELECT d.nome, d.cpf, d.plano, d.preco, d.status, d.data , p.beneficiarios  FROM `dadospessoais` AS d INNER JOIN `dadosprincipais` AS p ON d.forekey = p.forekey WHERE p.beneficiarios <> '' AND d.nome <> '' ORDER BY d.id DESC";
// $sql = $pdo->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
// $sql->execute();
// $results = $sql->fetchAll(PDO::FETCH_ASSOC);
// $json_data['data'] = $results;
// print_r(json_encode($json_data));

// $query = "SELECT * FROM `dadospessoais` AS d WHERE vendedor = 'ti@unidentis.com.br'";
// $sql = $pdo->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
// $sql->execute();
// $results = $sql->fetchAll(PDO::FETCH_ASSOC);
// foreach($results as $result){
//     $forekey = $result['forekey'];
//     $cpfFinanceiro = $result['cpf'];
//     $cpfTitular = $result['cpf_titular'];
//     $sqlArray[] = "DELETE FROM dadosprincipais WHERE forekey='$forekey' ";
//     $sqlArray[] = "DELETE FROM dependentes WHERE forekey='$forekey' ";
//     $sqlArray[] = "DELETE FROM endereco WHERE forekey='$forekey' ";
//     $sqlArray[] = "DELETE FROM dadospessoais  WHERE forekey='$forekey' ";
//     $sqlArray[] = "DELETE FROM fotos WHERE forekey='$forekey' ";
//     $sqlArray[] = "DELETE FROM contratocartao WHERE forekey='$forekey'";
//     $sqlArray[] = "DELETE FROM usuario WHERE forekey = '$forekey'";
//     if ($cpfFinanceiro != $cpfTitular):
//         $sqlArray[] = "DELETE FROM responsavel WHERE forekey = '$forekey'";
//     endif;
//     foreach($sqlArray as $query){
//         $sql = $pdo->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
//         $sql->execute();
//     }
//     $sqlArray = [];
// }
