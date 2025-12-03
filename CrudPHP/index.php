<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, sans-serif; /* Define a fonte padrão : Arial senão usar sans-serif*/
            margin: 20px; /* Adiciona uma margem */
            
            }

        .container{
        background-color: white;
        max-width: 400px; /* Define a largura máxima do contêiner*/
        padding: 25px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15); /*Chat gepetesco*/
        margin: 0 auto;   
            
        }

        #cadastro{
            display: flex;
            justify-content: center; /* horizontal */
            align-items: center;     /* vertical */
            margin-top: 100px;    
        }

       #titulo{
        max-width: 400px;
        text-align: center;
        margin: 0 auto;
        line-height: 100px;
}
          
        label, input, button{
            display: block; /*Faz com que os elementos se organixem na vertical, preenchendo toda a horizontal do container.*/
            margin-bottom: 10px; /* Adiciona um espaçamento inferior entre os elementos */
        }

        input[type="text"], input[type="password"]{
            width: 100%; /* Faz com que os campos de entrada ocupem toda a largura disponível dentro do contêiner */
            padding: 8px; /* Adiciona um espaçamento interno aos campos de entrada */
            box-sizing: border-box; /* Garante que o padding e a borda sejam incluídos na largura total do elemento */
        }

        button{
            padding: 10px 15px; 
            background-color: #8424d3; /* Define a cor de fundo do botão */
            color: white; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; /* Muda o cursor para indicar que o botão é clicável */
        }    
        
        button:hover{  /* Estilização da interação: cor do botão ao passar o mouse */
            background-color: #6b1aa8;
        }

        #imgPerfil{
           display: none;
           max-width: 100px;
           margin-top: 20px;
        }

        #classificacao{
            margin-top: 20px;
            font-weight: bold; /*Deixa com efeito negrito*/
        }
    </style>
</head>
<body>
    <h1 id="titulo">Login</h1>
    <div class="container">

        <form action="verificarLogin.php" method="POST" id="formLogin" autocomplete="off"> <!-- Post para enviar dados no php-->
        
            <label for="login" >Login:</label> 
            <input type="text" id="login" name="usuario" placeholder="Login"> 

            <label for="Senha">Senha:</label> 
            <input type="password" id="senha" name="senha" step="0.1" placeholder="Senha"> <!--passwd para ocultar senha -->

            <button type="Submit" id="btnLogar">Logar</button>
        </form>
    </div>
    <br>

    <a href="lista.php" id="cadastro">Verificar Cadastro</a>



    <script>
       
    </script>
</body>
</html>