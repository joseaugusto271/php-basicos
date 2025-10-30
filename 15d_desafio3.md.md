
Desafio 15d
IGNACIO ANTONIO DA CUNHA NETO
•
15:39
10 pontos
Após estudarmos o CRUD em exemplos individuais e estudarmos a estrutura de login é hora de praticar.

Façam download deste desafio e incluam no repositório.
Leiam com atenção e criem o arquivos conforme as instruções.

Postem nesta atividade o link atualizado do seu gitHub.
15d_desafio3.md
Texto

Seus trabalhos
Atribuído
Comentários particulares
Comentários da turma
### 🎨 Desafio 3 (15d_desafio3): Perfil de Usuário Personalizado 👤

Crie um sistema de "login" simples onde o usuário informa seu nome e escolhe uma cor de fundo preferida. Uma segunda página, restrita, deve então usar essas informações da sessão para cumprimentar o usuário e personalizar a aparência da página.

**Você precisará de 3 arquivos:**

1.  **`15d_login.php` (Página de Entrada):**
    * Deve ter um formulário com um campo para o **Nome** e um campo de seleção (`<select>`) para a **Cor Favorita**.
    * Ao enviar, o script deve salvar o nome e a cor escolhida em variáveis de sessão (`$_SESSION`).
    * Após salvar, deve redirecionar para a `15d_perfil.php`.

2.  **`15d_perfil.php` (Página de Perfil):**
    * Deve verificar se o usuário está "logado". Se não, deve redirecioná-lo de volta para a página de login.
    * Deve exibir uma mensagem de boas-vindas com o nome do usuário.
    * Deve usar a cor da sessão para alterar o fundo da página.
    * Deve incluir um link para o script de logout.

3.  **`15d_logout.php` (Página de Saída):**
    * Deve destruir a sessão e redirecionar o usuário de volta para a página de login.