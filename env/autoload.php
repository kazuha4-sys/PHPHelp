<?php 
// Interpretar o arquivo .env para usar nos outros projetos 

// Para usar em outros projetos use:
// require '../env/autoload.php';

function loadENV($filePath) {
    if (!file_exists($filePath)) {
        throw new Exception("Arquivo .env não encontrado");
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Ignorar comentários
        if (strpos(trim($line), "#") === 0) continue;
        
        // Dividir as chaves e os valores de forma segura
        $list = explode("=", $line, 2);
        if (count($list) !== 2) continue; // Ignora linhas inválidas
        
        list($key, $value) = $list;
        
        // Remover espaços
        $key = trim($key);
        $value = trim($value);

        // Definir variável de ambiente
        putenv("$key=$value");
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value; // Algumas aplicações precisam do $_SERVER
    }      
}

// Carregar o arquivo .env
loadENV(__DIR__ . '/.env');

// Agora você pode acessar as variáveis com getenv(), $_ENV ou $_SERVER
$token = getenv('TOKEN'); // Ou $_ENV['TOKEN']

// Usando o token em alguma lógica
echo "Seu token é: " . $token;
?>
