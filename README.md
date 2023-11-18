# Chamados
Repositório criado para entrega de trabalho de Banco de Dados. 

Proposta realizada pelo professor: 

Criar 3 telas, o objetivo de cada uma é:

 - <b>Tela de Cadastro de Chamado:</b> Nessa tela o aluno deverá inserir o RA, NOME, PROBLEMA (combo box com problemas pré-cadastrados), descricao do problema e sala onde está. Após inserção das informações cadastrar no banco de dados.
   
- <b>Tela de Consulta do Técnico:</b> Nessa tela deverá ser montada uma tabela exibindo R.A, PROBLEMA, SALA, DESCRICAO, HORA DE CADASTRO e um botão para RESOLVER o chamado, assim que resolvido deve sumir da tela de visualização (NÃO É PARA APAGAR, apenas para mudar o status)
  
- <b>Tela de Consulta por R.A:</b> Nessa tela deverá ter um campo para digitar o R.A, quando pesquisarmos alimentar uma table com R.A, PROBLEMA, SALA, DESCRIÇÃO, HORA CADASTRO e HORA RESOLVIDO (se estiver resolvido) e RESOLVIDO (mostrar "resolvido" ou "não resolvido")
A entrega deverá ser: Código HTML + PHP + MYSQL (arquivo de criação do banco de dados)

Critérios de aceite para a tela de Consulta por RA:

- Deve ser add um input para inserir o RA do aluno.
- Logo abaixo do RA deve ter um botão para avançar na pesquisa.
- Quando o botão for ativado deve realizar uma busca de todos os chamados com o RA selecionado.
- Os chamados devem ser apresentados independente do status dele.
- Eles devem ser apresentados na tabela seguindo as colunas: ID, Hora de cadastro, RA, Nome, Sala, Tipo do problema, Descrição, Status, Hora de resolução

Aluno: João Pedro dos Santos Lopes - RA: 1963012
