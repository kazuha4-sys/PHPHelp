<?php 
// Remote COde Execution (RCE)

// Como funciona o RCE?
// Permite que um invasor execute código arbitrário no servidor.

// Exemplos:
eval($_GET['cmd']);
// Se o atacante acessar 'script.php/cmd=system('ls');', ele pode listar arquivos do servidor


// Formas de previnir:
// Evitar funções perigosas como 'eval()', 'exec()' e 'shell_exec()'.

// Usar espaceshellarg() ao executar comandos:
$command = escapeshellarg($_GET['cmd']);
exec("ls $cmd");
?>