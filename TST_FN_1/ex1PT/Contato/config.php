<?php
 /*http://localhost/projetos/tst_prot/it-solutions-end/tstLX/contato.html
 https://www.youtube.com/watch?v=QOeDE7nPDq0 */
    $dbHost ='Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'forms-tst';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword, $dbName);

 /** */   if($conexao->connect_errno){
        echo "erro";
    }else{
        echo "feito";
    }
?>