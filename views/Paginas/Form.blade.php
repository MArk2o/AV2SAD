<h1>Form</h1>
<hr>
<form method="get">
    @csrf

    <b>Nome</b>
    <input type="text" name="nome" > <br><br>
    <b>email</b>
    <input type="text" name="email" > <br><br>

    <b>Senha</b>
    <input type="password" name="senha" > <br><br>

    <hr>
    <input type="submit" value="Logar">
</form>