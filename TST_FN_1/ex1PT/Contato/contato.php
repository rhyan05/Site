<?php
    include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $menssagem = $_POST['msg'];

            $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, menssagem) VALUES ('$nome', '$email', '$telefone', '$menssagem')");
?>


<!--https://www.youtube.com/watch?v=VCsNIRXNsmY -->

<!--label e o que ira aparecer para o usuario-->

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="/ex1PT/Contato/mobilecontato.css"> 
    <title>Contato</title>
    
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap');
/*o label ele ira identificar em qual aquele botao/input esta interligado"for", ademais, ele permite criar uma classe dentro
dele o que ajuda a editar no css*/
* {
    box-sizing: border-box;/*desconsidera o padding e a margin*/
    padding: 0;
    margin: 0;
}

body {
    font-family: 'Roboto', sans-serif;
    background-image: linear-gradient(to right, rgb(14, 74, 109), rgb(15,54,71));
 /*   background-image: linear-gradient(to right, rgb(14, 74, 109), rgb(15,54,71));*/
/*degrade*/
}

a {
    text-decoration: none;
    color: inherit;
}
#navbar {
    width: 100%;
    background: #111;
    color: #eee;
    height: 80px;
    position: fixed; /*faz o cabeçalho nao sair la de cima*/
}

#navbar-container {
    width: 80%;
    height: 100%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 2rem;
}

#navbar-items {
    display: flex;
        /*ele deixa tudo na mesma linha */
    list-style: none;
        /*ele retira a lista que tem */
    text-transform: uppercase;
}

#navbar-items li {
    padding: 10px;
}
.box{
    color: #eee;
    font-family: 'Tilt Neon', sans-serif;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0, 0.5);
    padding: 15px;
    border-radius: 15px;
    width: 20%;
}
fieldset{/*eu estou chamando uma açao em si, logo nao preciso 
    declarar se uma classe ou um id*/
    border: 3px solid dodgerblue;
}
legend{/*.box legend posso tbm colocar dessa forma*/
    border: 1px solid dodgerblue;
    padding: 1px;
    text-align: center;
    background-color: dodgerblue;
    border-radius: 8px;
    font-weight: bold;

}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid #eee;
    outline: none;
    color: white;
    font-size: 15px;
    font-family: 'Tilt Neon', sans-serif;
    width: 100%;
    letter-spacing: 2px;/*aumenta os espaços entre os caracteres*/
}
.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
.inputUser:focus ~.labelInput, .inputUser:valid ~.labelInput{/*efeito ao clicar em um input*/
    /*esse valid faz tipo um verificador para que nao ocorra um erro, tipo eu digitar algo e dps sair ele voltar a posiçao inicial ou algo assim*/
    top: -20px;
    font-size: 14px;
    color: dodgerblue;
}
#submit{
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#submit:hover{
    background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
}
    </style>
</head>

<body>
    <nav id="navbar">
        <div id="navbar-container">
            <h1 class="logo">IT Solutions</h1>
            <ul id="navbar-items">
                <li><a href="/ex1PT/Home/index.html#showcase">Início</a></li>
                <li><a href="/ex1PT/Home/index.html#showcase#clients">Sobre</a></li>
                <li><a href="/ex1PT/Home/index.html#showcase#gallery">Galeria</a></li>
                <li><a href="/ex1PT/Contato/contato.php">Contato</a></li>
                <li><a href="/ex1PT/Product/product.html">Contato</a></li>
            </ul>
        </div>
    </nav>

        <div class="box">
            <form action="formulario.php" method="post"> <!--O banco que ira receber as info-->
                <fieldset>
                    <legend><b>Formulário</b></legend>
                    <br>
                    <div class="inputbox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                        <br><br><br>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">email</label>
                        <br><br><br>
                    </div>
                    <div class="inputbox">
                        <input type="number" name="num" id="num" class="inputUser" required>
                        <label for="num" class="labelInput">Telefone</label>
                        <br><br><br>
                    </div>
                    <div class="inputbox">
                        <input name="msg" id="msg" class="inputUser" required>
                        <label for="msg" class="labelInput" rows="5" cols="50">Menssagem</label>
                        <br><br><br>
                    </div>

                    <input type="submit" name="submit" id="submit" value="Enviar">

                </fieldset>
            </form>
        </div>

    </form>
</body>
</html>