# README: Teste-PHP

## Visão Geral

Este código PHP representa um painel de controle simples para uma aplicação web. O painel fornece um resumo visual de estatísticas-chave, incluindo o número de clientes, usuários e fornecedores. Além disso, ele inclui uma tabela dinâmica que exibe informações do usuário.

# README: Estrutura de Pastas do Projeto

## Visão Geral

Este projeto PHP segue uma estrutura organizada no padrão MVC para facilitar a manutenção e o desenvolvimento. Abaixo está a hierarquia de pastas e seus principais conteúdos:

```
projeto/
│
├── controller/
│   └── dashboard.php
│
├── models/
│   └── data_request.class.php
│
├── views/
│   ├── assets/
│   │   ├── css/
│   │   ├── fonts/
│   │   ├── img/
│   │   ├── plugins/
│   │   └── scripts/
│   │       ├── app.js
│   │       ├── index.js
│   │       └── main.js
│   │
│   ├── layout/
│   │   ├── cabecalho.php
│   │   ├── menu.php
│   │   └── rodape.php
│   │
│   ├── favicon.ico
│   └── index.php
│
└── README.md
```

## Descrição das Pastas e Arquivos

- **controller/**: Contém os controladores da aplicação, sendo `dashboard.php` responsável pelas ações específicas do painel de controle.

- **models/**: Armazena as classes relacionadas ao acesso e manipulação de dados. O arquivo `data_request.class.php` é uma dessas classes.

- **views/**: Contém a interface do usuário e outros elementos visuais.

  - **assets/**: Engloba recursos estáticos como folhas de estilo, fontes, imagens, plugins e scripts.

    - **css/**: Estilos da aplicação.
    
    - **fonts/**: Fontes utilizadas na aplicação.
    
    - **img/**: Imagens utilizadas na aplicação.
    
    - **plugins/**: Bibliotecas ou plugins externos utilizados no projeto.
    
    - **scripts/**: Scripts JavaScript da aplicação.

      - **app.js**: Script padrão que veio no teste.
      
      - **index.js**: Script padrão que veio no teste.
      
      - **main.js**: Script principal que gera os conteúdos dinâmicos AJAX.

  - **layout/**: Contém os arquivos de layout compartilhados.

    - **cabecalho.php**: Cabeçalho da página.
    
    - **menu.php**: Menu de navegação da aplicação.
    
    - **rodape.php**: Rodapé da página.

  - **favicon.ico**: Ícone da aplicação exibido no navegador.

  - **index.php**: Página inicial da aplicação. Contém apenas a instrução de redirecionamento para `views/index.php`.



---


## Inicialização

O código começa incluindo os arquivos de layout necessários e inicializando uma instância da classe `DataRequest`, responsável por lidar com a recuperação de dados.

```php
include 'layout/cabecalho.php';
include 'layout/menu.php';
$dataRequest = new DataRequest();
```

## Estrutura do Painel de Controle

O painel de controle é estruturado usando o Bootstrap e contém várias seções:

1. **Configuração de Modal do Portlet de Exemplo**: Um formulário modal para configurar portlets, embora o conteúdo seja atualmente estático.

2. **Cabeçalho da Página**: Exibe o título da página, navegação por trilhas e um seletor de intervalo de datas.

3. **Estatísticas do Painel de Controle**: Três seções separadas exibindo estatísticas para clientes, usuários e fornecedores. Cada seção inclui um número, uma descrição e um link "Visualizar".

4. **Tabela Dinâmica**: Uma tabela exibindo informações do usuário com colunas para ID, Nome, Sobrenome, Usuário e Status. A tabela inclui uma linha de espaço reservado e é destinada a ser preenchida dinamicamente.

## Uso

Para integrar este painel de controle em uma aplicação web existente, siga estas etapas:

1. Inclua os arquivos de layout necessários no início do seu arquivo PHP.

2. Ajuste os caminhos dos arquivos conforme necessário.

3. Instancie a classe `DataRequest` para lidar com as solicitações de dados.

4. Personalize o conteúdo do painel de controle com base nos requisitos da sua aplicação.

5. Certifique-se de que os estilos e scripts necessários para o Bootstrap e quaisquer outras dependências estejam incluídos.

6. Ajuste o conteúdo e a funcionalidade do formulário modal conforme necessário.

7. Personalize a tabela dinâmica com base nos dados do usuário que você deseja exibir.

8. Inclua o arquivo de rodapé no final do seu arquivo PHP.

```php
include 'layout/rodape.php';
```

## Notas


- A tabela dinâmica é preenchida dinamicamente usando métodos da classe `DataRequest`.


---
