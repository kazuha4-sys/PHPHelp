import sqlite3 as sql 
from rich.console import Console 
from rich.text import Text 

console = Console()

# Conectar ao banco de dados (ou criar se não existir)

conn = sql.connect('databse.db')
cursor = conn.cursor()

# Criar tablea 

cursor.execute('''
CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    idade INTEGER
)
''')
# Para insirir dados 
#usuarios = [
#    ("Alice", "alice@email.com", 25),
#    ("Bob", "bob@email.com", 30),
#    ("Carlos", "carlos@email.com", 22)
#]

#cursor.executemany("INSERT INTO usuarios (nome, email, idade) VALUES (?, ?, ?)", usuarios)

# Salvar as alterações e fechar a conexão 
conn.commit()
conn.close()


console.print("[bold green] Database criado com sucesso![/ bold green]")