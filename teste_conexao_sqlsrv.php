<?php
$serverName = "nome-do-servidor"; // "localhost\SQLEXPRESS" "NOTEDELL3420\SQL2022" "192.168.0.14" se for o nome da instância
$connectionOptions = [
    "Database" => "nome-do-banco-de-dados", // nome do banco de dados
    "Uid" => "nome-do-usuario", // usuário do SQL Server
    "PWD" => "senha-do-usuario" // senha do usuário
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn) {
    echo "✅ Conexão com SQL Server realizada com sucesso!";
} else {
    echo "❌ Erro de conexão:";
    print_r(sqlsrv_errors());
}
