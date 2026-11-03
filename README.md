# Portal de Projetos Acadêmicos (PPA)

> Projeto acadêmico desenvolvido em equipe durante a graduação em Análise e Desenvolvimento de Sistemas.
>
> **Status:** em desenvolvimento — projeto acadêmico, não indicado para uso em produção.

## Sobre o projeto

O Portal de Projetos Acadêmicos (PPA) é uma aplicação web criada com o objetivo de apoiar o gerenciamento de projetos acadêmicos. A proposta reúne recursos para organizar projetos, participantes, iniciativas e evidências das atividades realizadas pelos alunos.

O sistema considera diferentes perfis de acesso, como aluno, professor e administrador, com atividades relacionadas à participação em projetos e à validação de evidências.

## Funcionalidades previstas no projeto

- Cadastro e acesso de usuários.
- Visualização, criação e gerenciamento de projetos acadêmicos.
- Organização de participantes, etapas e iniciativas.
- Envio de evidências e anexos pelos alunos.
- Consulta e validação de evidências por professores.
- Separação de funcionalidades conforme o perfil do usuário.

**Observação:** o projeto está em desenvolvimento. Algumas telas e rotinas estão implementadas, mas a integração entre interface, armazenamento no navegador e backend/banco de dados ainda não está concluída. Portanto, nem todas as funcionalidades devem ser consideradas plenamente operacionais.

## Tecnologias e ferramentas

- **PHP:** rotinas de backend e conexão com o banco de dados.
- **JavaScript:** lógica e interações das funcionalidades da aplicação.
- **HTML5 e CSS3:** estrutura e estilização das páginas.
- **MySQL:** estrutura relacional para usuários, projetos, participantes e evidências.
- **Bulma:** framework CSS utilizado em páginas da aplicação.
- **XAMPP:** ambiente local sugerido para execução com Apache e MySQL.

## Estrutura do projeto

```text
Gestao-de-Projetos-main/
├── backend/             # Rotinas PHP e arquivos relacionados ao banco
│   ├── BD/              # Scripts SQL
│   ├── evidencias/      # Rotinas relacionadas às evidências
│   └── projetos/        # Rotinas relacionadas aos projetos
├── css/                 # Arquivos de estilo
├── imgs/                # Imagens e logotipos utilizados no projeto
├── js/                  # Scripts JavaScript
├── *.html               # Páginas da aplicação
├── *.php                # Cadastro, login, instalação e outras rotinas
└── README.md
```

## Como executar localmente

O projeto foi preparado para execução em ambiente local com PHP e MySQL. O procedimento abaixo é uma orientação inicial e pode exigir ajustes conforme a configuração do ambiente e a versão atual do código.

1. Instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html).
2. Inicie os serviços **Apache** e **MySQL** pelo painel do XAMPP.
3. Copie a pasta do projeto para o diretório `htdocs` do XAMPP.
4. No navegador, acesse `http://localhost/Gestao-de-Projetos-main/install.php` (ajuste o nome da pasta caso seja diferente).
5. Acesse a aplicação localmente após a criação do banco de dados.

### Atenção à segurança

Este projeto é acadêmico e não deve ser publicado em ambiente de produção sem revisão. O instalador presente no código contém uma credencial administrativa padrão e configurações locais de banco de dados. Antes de disponibilizar uma demonstração pública ou utilizar dados reais, revise e substitua essas configurações, proteja as credenciais, implemente armazenamento seguro de senhas e revise os controles de autenticação e autorização. **Não utilize a senha padrão do instalador em ambientes públicos.**

## Participação no desenvolvimento

Projeto realizado em equipe. Adriel Martins de Souza colaborou principalmente com atividades de programação e lógica das funcionalidades em JavaScript, além de atividades relacionadas à estruturação e manipulação de dados em SQL/MySQL, em conjunto com os demais integrantes. A interface visual foi desenvolvida por outros integrantes da equipe.

## Contexto acadêmico

Projeto desenvolvido no contexto do curso de **Análise e Desenvolvimento de Sistemas da FATEC Jundiaí**.

---

*Este repositório representa o desenvolvimento acadêmico do projeto e seu estado durante a construção. Funcionalidades, estrutura e instruções podem mudar conforme a equipe avance.*
