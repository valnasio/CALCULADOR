<!DOCTYPE html>
<html>


<link rel="stylesheet" type="text/css" href="estilos.css">

<title>Coleta de dados</title>
    <header class="header">
 <h1 >CALCULADORA DE IMC</h1>
        


        
    </header>

    <body class="body">
    

                     
        <br>
        <table  border="0"  >
            <tr>
                <td >
                    <!-- Envia informações do nome coletadas para imc.php--> 


                    <form action="imc.php" method="get">
                        <div id="box">
                     
                            <p> <strong>NOME</p></strong>
                            <!-- coleta o nome -->
                            <input type="text" class="caixa-de-texto" size="35"  placeholder="insira seu nome" required pattern="^[^-\s][a-zA-ZÀ-ú ]*" name="nome">

                            <p> <strong>SOBRENOME</p></strong>
                            <!-- coleta o sobrenome -->
                            <input type="text" class="caixa-de-text-" size="35"  placeholder="insira seu sobrenome" required pattern="^[^-\s][a-zA-ZÀ-ú ]*"  name="sobre-nome">

                            <p> <strong>E-MAIL</p></strong>
                            <!-- coleta o e-mail -->
                            <input type="text" class="caixa-de-text-" size="35"  placeholder="insira seu e-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email">

                            <p> <strong>PESO: </strong></p> 
                            <!-- Envia informações do peso coletadas para imc.php--> 
                            <input type="text" class="caixa-de-text-" size="35"  placeholder="insira seu peso" required pattern="[0-9]+(\.[0-9]{1,2})?%?" name="peso">

                            <p> <strong>ALTURA:</strong></p> 
                            <!-- Envia informações da altura coletadas para imc.php--> 
                            <input type="text" class="caixa-de-text-" size="35"  placeholder="insira sua altura (Ex: 1.65)" required pattern="[0-9]+(\.[0-9]{1,2})?%?" name="altura">

                            </div>
                            <br> 
                                                    <!--botão para enviar as informações apra imc.php-->

                                 <button> Calcular </button>

                            <br>
                                    </form>
                                </td>    
                            </tr>
                        </table>
                        </div>
                        </div>
                    </body>
                        <footer>
                                Os dados coletado por esta aplicação poderão ser usados para prospecção de clientes!
                            </footer>
                </html>
