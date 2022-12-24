# AgendamentosApp

Olá!

Meu nome é Pedro Ivo Barbosa! Bem-vindo(a)!

Esse é um projeto realizado entre 21 e 24/12/2022 com intuito de aplicar, testar e desenvolver meus conhecimentos em programação.

Utilizei o máximo possível da estrutura em MVC do framework Laravel. Desse modo, a maior parte do código foi escrito em PHP. No banco de dados foi utilizado MySql, MariaDB.

O projeto simula uma interface simples para o que seria um consultório médico.

É possível cadastrar, editar e deletar, usuários, que podem ser médicos ou pacientes, e combinar dois destes para criar uma consulta, que também podem ser editadas e deletadas.

Além da estrutura de MVC do Laravel, também foi criado um recurso de API Rest para entregar os médicos cadastrados em formato JSON.

## Acessando e rodando o projeto

O projeto está sendo servido no ip (http://161.35.66.28/)

O recurso de API pode ser acessado no endereço (http://161.35.66.28/api/doctors)

Para rodar o projeto localmente, clone o repositório e com o terminal aberto na raiz do projeto, rode o comando:

> php artisan serve

Crie um arquivo **.env** com base no arquivo **.env.example** para conectar com seu banco de dados local.

Também terminal rode o comando:

> php artisan migrate

para executar as migrations e montar o banco de dados.

### Principais desafios:
    - utilizar o Blade, template engine do Laravel, para criar as views do front.
        -> Há meses desenvolvendo apenas api's no Laravel, voltar para desenvolver o front foi desafiador relembrar e aprender mais sobre essa ferramenta e instrumento.

    - servir o projeto inteiro, front, back e bd.

### Principais aprendizados:
    - a realização de um projeto, 'de cabo a rabo', foi uma superação pessoal!
    - colocar todo um projeto disponível na rede;
    - utilizar todo o mvc do laravel.

### Tecnologias utilizadas:
    - Bootstrap: estilizações;
    - Datatables: estilização e automação de tabelas (jQuery);
    - Forge e Digital Ocean para servir e fazer deploys do projeto;

#### Próximos passos e pontos de melhoria identificados:
    - introduzir controle de sessão e classes de usuários para que tenham experiências únicas ao interagir com o app;
    - adicionar maior formatação e controle de Requests, através do próprio artisan;
    - mais tratamento de possíveis erros;
    - mais formatação de mensagens vindas do back para feedback aos usuários de suas interações;
    - aumentar o número de dados das classes de usuários.
