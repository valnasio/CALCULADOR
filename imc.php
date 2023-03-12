   
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="css_imc.css">
<head>
    <meta charset="UTF-8">
    
    </head>

    <title>Resultado IMC</title>
           
    <body > 
        
        <!-- funções em php-->

        <table width="25%" height="30%" class="tabela">
            <tr>
                <td>
                
                
<?php 


//variaveis

$nome = $_GET['nome'];
$peso = $_GET['peso'];
$altura = $_GET['altura'];
$sobrenome = $_GET['sobre-nome'];
$email = $_GET['email'];

$imc = $peso / ($altura * $altura);

// variável que armazena o caminho da imagem a ser exibida
$imagem = '';

//exibir informação do nome e valor do imc
echo "Olá,  $nome $sobrenome. <br> Seu IMC é: " . number_format($imc, 1) . "<br>";

// condição para IMC alto
if ($imc > 25) {
    // atribui o caminho da imagem gordo.png à variável imagem
    $imagem =  './imagens/gordo.png'  ;
    echo "Você está acima do peso! <br>"; 
    
} 

//condição para imc regular ou baixo
else if ($imc < 18.5) {  
    // atribui o caminho da imagem magro.png à variável imagem
    $imagem = './imagens/muito-magro.png';
    echo "Você está muito abaixo do peso! <br>";
    
} else {
    // atribui o caminho da imagem magro.png à variável imagem
    $imagem = './imagens/magro.png';
    echo "Você está com IMC normal <br>";
    
}

// exibe a imagem correspondente ao valor do IMC

echo "<img  src='$imagem'>";


?>


</td>   
    </tr>
    </table>
        

        <!-- botão para retonar pra página do index -->

                <a id="botao" href="index.html"> <input  type="submit" value="INÍCIO" /></a>



    </body>
            <footer >
            Os dados coletado por esta aplicação poderão ser usados para prospecção de clientes!
            </footer>
    </html>
        


