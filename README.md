# Programação WEB
#### Atividade Gerenciador de Email

### Objetivo
Desenvolver um sistema web utilizando as linguagens HTML, CSS e PHP.
Deverá utilizar também jQuery, Ajax, JSON e fazer persistência de dados em XML.

### Descrição
O sistema web deverá possuir uma primeira tela inicial de login;

Ao clicar em ”Caixa de Entrada” no menu, deverá listar todos os e-mails recebidos. Cada e- mail recebido ficará armazenado em um arquivo XML separado com o e-mail de quem enviou, e-mails de cópia, e-mail de quem recebeu, assunto e texto do e-mail;

Cada linha da lista de e-mails deverá conter:
* E-mail de quem enviou, assunto e parte do texto recebido por e-mail.

Caso o usuário clique em ”+ Nova Mensagem” deverá direcionar para uma outra página (0u uma nova janela) com as opções:

| Campo | Descrição |
| ------ | ------ |
| Para: | E-mail que receberá a nova mensagem. |
| Cc: | E-mail em cópia. |
| Assunto: | Texto do assunto do e-mail.  |
| Texto: | Campo textarea com todo o texto do e-mail. |

> Todos os dados acima deverão ser salvos em um novo arquivo XML que ficará dentro do projeto.
