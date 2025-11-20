# PHP: Kit-de-Boas-Vindas
2º Verificação de Aprendizagem:  aplicando os conhecimentos de Git e Github para tralbaho em equipe, utilizando o PHP.

## Paradigma principal
PHP é primariamente uma linguagem de programação imperativa e orientada a objetos (OO), mas historicamente possui fortes raízes no paradigma procedural.

Paradigma Procedural/Imperativo: O PHP começou como uma linguagem puramente procedural (PHP/FI) e grande parte do código legado e muitos scripts simples ainda são escritos nesse estilo. Neste paradigma, o código é uma sequência de comandos (instruções) que mudam o estado do programa. O foco é em como o programa opera (usando funções e procedimentos).

Paradigma Orientado a Objetos (OO): A partir do PHP 5, ele adotou completamente o paradigma OO, tornando-se uma linguagem moderna com suporte a classes, objetos, herança, interfaces, e traits. Esse paradigma organiza o código em objetos, que combinam dados e as funções que operam sobre esses dados (métodos). Hoje, o uso de frameworks como Laravel e Symfony incentiva fortemente o design OO.

## Onde essa linguagem é mais utilizada?
A principal área de utilização do PHP é em Servidores (Back-End) para Desenvolvimento Web. Servindo também para funções correlacionadas como:
- Processamento de formulários.
- Interação com bancos de dados (CRUD - Criar, Ler, Atualizar, Deletar).
- Gerenciamento de sessões e autenticação de usuários.
- Geração dinâmica de conteúdo HTML para ser exibido no navegador.

Além disso, grandes projetos como WordPress, Joomla, e Drupal (sistemas de gerenciamento de conteúdo - CMS), além de frameworks poderosos como Laravel e Symfony, são construídos em PHP.

## Vantagens e desvantagens do PHP
A maior vantagem do PHP é sua **simplicidade inicial** e o **vasto ecossistema de Desenvolvimento Web**.

- Simplicidade Inicial: É extremamente fácil para um iniciante começar a programar em PHP e colocar um script para funcionar. A sintaxe é tolerante e a integração com HTML é nativa e fluida.
- Vasto Ecossistema: O PHP alimenta uma enorme porcentagem da web (especialmente via WordPress). Isso significa que há uma abundância de documentação, tutoriais, bibliotecas, CMS (como WordPress, o mais popular do mundo), e uma comunidade gigantesca para suporte.

Em relação as desvantagens do PHP em relação a outras Linguagens podemos destacar **a Biblioteca limitada** e a **limitação em aplicações de tempo real**.

- Limitação em Tempo Real: Embora o PHP tenha evoluído (com a extensão Swoole, por exemplo), ele não é a escolha mais eficiente para aplicações que exigem conexões persistentes, comunicação em tempo real (websockets) ou um grande número de operações de I/O não-bloqueantes, onde runtimes como o Node.js geralmente se destacam.
- Biblioteca limitada: O PHP é extremamente forte no ecossistema web (lidando com HTTP, bancos de dados, etc.). No entanto, para *áreas fora do desenvolvimento web* (como Machine Learning, análise de dados complexa, ou programação de sistemas de baixo nível), a biblioteca padrão e o tooling são menos robustos em comparação com linguagens como Python ou Java.

Vantagens | Desvantagens
--------- | ------
Simplicidade Inicial | limitação da Biblioteca
Vasto Ecossistema | limitação em aplicações de tempo real
Domínio na Web | Usada praticamente apenas para web
