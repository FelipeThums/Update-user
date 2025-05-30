# Atualização de Perfil de Usuário com PHP e MySQL

Este projeto implementa um endpoint simples em PHP para atualizar informações de perfil de um usuário armazenado em um banco de dados MySQL, utilizando `firebase_uid` como chave de identificação.

## 🛠️ Tecnologias Utilizadas

- PHP 7+
- MySQL
- Firebase Authentication (UID)
- HTML (formulário de origem, não incluído)
- mysqli (com `prepared statements`)

## 🚀 Funcionalidade

Este script é responsável por:

- Conectar ao banco de dados MySQL
- Receber dados via método `POST` (como `uid`, telefone, descrição, etc.)
- Atualizar as informações do usuário no banco com segurança
- Retornar mensagens HTTP adequadas (`200 OK` ou `400 Bad Request`)

## 📥 Campos Esperados via POST

| Campo                     | Descrição                            |
|--------------------------|----------------------------------------|
| `uid`                    | UID do usuário (Firebase)             |
| `telefone`               | Número de telefone                    |
| `descricao`              | Descrição pessoal                     |
| `setor`                  | Setor profissional                    |
| `formacao_academica`     | Formação acadêmica                    |
| `experiencia_profissional` | Experiência profissional           |
| `certificados`           | Certificações                         |

## 💡 Boas Práticas Aplicadas

- ✅ Uso de **Prepared Statements** para evitar SQL Injection
- ✅ Verificação de conexão com o banco
- ✅ Retorno de códigos HTTP apropriados
- ❗ Recomenda-se complementar com:
  - Validação e sanitização dos dados recebidos
  - Controle de acesso/autenticação (ex: verificar se o usuário tem permissão para atualizar aquele UID)
  - Uso de variáveis de ambiente para armazenar credenciais

## 🔐 Segurança

> Em ambiente de produção:
- **Nunca use usuário root sem senha.**
- Utilize arquivos `.env` ou serviços de configuração seguros.
- Implemente autenticação/autorização adequada.

## 📂 Estrutura do Projeto

