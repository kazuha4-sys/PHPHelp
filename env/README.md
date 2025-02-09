* /ENV

Esta pasta contém dois arquivos principais:

- **.env**: Contém configurações e token que você usa no seu projeto
- **autoload.php**: Script que carrega automaticamente as depen~encias necessarias para o projeto

## Estrutura da pasta é a seguinte 📁:
env
├── .env                # Arquivo de configuração com tokens e haves do seu ambiente
├── autoload.php        # Arquivo para autoload de dependencias

## Como usar 

## 1. Configuração do Ambiente ⚙️

O arquivo `.env` contém variaveis de ambiente, como tokens e configurações de API, que seu projeto tera.

```ini
API_KEY=seu_token_aqui
DATABASE_URL=seu_database_url_aqui
SECRET_KEY=seu_segredo_aqui
```

**IMORTANTE**: Nunca compartilhe o arquivo ```.env`` publicamente, pois ele contém infomrações sensiveis.

### 2. Autoload de Dependências

Para usar o autoload no seu projeto, basta incluir o arquivo ``àutoload.php`` na parte superior dos seus scripts PHP. não é necessario baixar nada extra. Apneas use o seguinte comando em seus projetos.

```php
require ""../env/autoload.php""
```
Este comando vai carregar automaticamento todas as configurações do arquivo ``.env`` e garantir que seu ambiente esteja pronto para uso.

### 3. Configuração Adicional 
Se você precisar modificar o comportamento do autoload, edite o arquivo ``àutoload.php``. Este script pode incluir o carregamento de classes adicionais, bibliotecas externas ou qualquer outra configuração personalizada.

### Exemplo de USo 
No seu projeto, basta faer o seguinte em qualquer arquivo PHP onde você precise das configurações:

```php 
// Carrgar as configurações do ambiente 
require ../env/autoload.php;

// Agora você pode usar as variaveis definidas no .env 
echo getenv("API_KEY");
```

## Contribuição 🤝

Se você deseja contribuir para este projeto, basta fazer um fork, criar uma branch com suas mudanças e enviar um pull request.