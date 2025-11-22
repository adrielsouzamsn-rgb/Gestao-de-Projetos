<?php
// teste_conexao.php
require_once "db.php";

header("Content-Type: text/plain; charset=utf-8");

try {
    echo "=== TESTE DE CONEXÃO COM BANCO DE DADOS ===\n\n";
    
    // Teste 1: Verificar se $pdo foi criado
    if (!isset($pdo)) {
        throw new Exception("Variável \$pdo não foi definida");
    }
    echo "✅ Variável \$pdo encontrada\n";
    
    // Teste 2: Testar conexão executando uma query simples
    $stmt = $pdo->query("SELECT 1 as teste");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo "✅ Query simples executada com sucesso\n";
    
    // Teste 3: Verificar se o banco "ppa" existe e listar tabelas
    echo "\n=== TABELAS EXISTENTES ===\n";
    $stmt = $pdo->query("SHOW TABLES");
    $tabelas = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
    if (empty($tabelas)) {
        echo "⚠️  Nenhuma tabela encontrada no banco 'ppa'\n";
        echo "   Você precisa criar as tabelas primeiro\n";
    } else {
        echo "✅ Tabelas encontradas:\n";
        foreach ($tabelas as $tabela) {
            echo "   - $tabela\n";
        }
    }
    
    // Teste 4: Verificar configurações
    echo "\n=== CONFIGURAÇÕES ===\n";
    echo "Host: " . $host . "\n";
    echo "Banco: " . $dbname . "\n";
    echo "Usuário: " . $user . "\n";
    
    echo "\n🎉 CONEXÃO BEM-SUCEDIDA! Tudo funcionando!\n";
    
} catch (Exception $e) {
    echo "❌ ERRO NA CONEXÃO:\n";
    echo "   " . $e->getMessage() . "\n";
    
    echo "\n=== VERIFICAÇÕES ===\n";
    echo "1. O MySQL/MariaDB está rodando?\n";
    echo "2. O banco 'ppa' existe?\n";
    echo "3. Usuário 'root' tem acesso?\n";
    echo "4. A senha está correta? (atualmente vazia)\n";
}
?>
