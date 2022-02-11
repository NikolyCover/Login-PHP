<?php

session_start()

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/register.css">
    <title>Cadastro</title>
</head>
<body>
    <main class="container">
        <h1>Cadastro</h1>

        <?php
        
        if(isset($_SESSION['differentPw'])):

        ?>
        <div class="error">
            Senhas diferentes.
        </div>
        <?php

        endif;

        unset($_SESSION['differentPW']);

        ?>

        <form action="scripts/register.php" method="POST">
            <fieldset class="form-fieldset">
                <legend>Dados Pessoais:</legend>

                <div class="textfield">
                    <label for="name">Nome:</label>
                    <input class="input" type="text" name="name" placeholder="nome completo" required>
                </div>
                <div class="textfield">
                    <label for="rg">RG:</label>
                    <input class="input" type="text" name="rg" placeholder="digite somente números" required>
                </div>
                <div class="textfield">
                    <label for="cpf">CPF:</label>
                    <input class="input" type="text" name="cpf" placeholder="digite somente números" required>
                </div>
                <div class="textfield">
                    <label for="celphone">Celular:</label>
                    <input class="input" type="tel" name="celphone" placeholder="digite somente números, incluindo ddd" required>
                </div>
                <div class="textfield">
                    <label for="address">Endereço:</label>
                    <input class="input" type="text" name="address" placeholder="Logradouro, nome do logradouro e número" required>
                </div>
            </fieldset>

            <fieldset class="form-fieldset">
                <legend>Interesses</legend>

                <div class="checkbox-container">
                    <p>Escolha seus hoobys favoritos: </p>
                    
                    <div class="checkboxes">
                        <div class="field">
                            <input type="checkbox" name="hobbys[]" id="read" value="ler">
                            <label for="read">Ler</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="hobbys[]" id="dance" value="dançar">
                            <label for="dance">Dançar</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="hobbys[]" id="sing" value="cantar">
                            <label for="sing">Cantar</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="hobbys[]" id="draw" value="desenhar">
                            <label for="draw">Desenhar</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="hobbys[]" id="play" value="jogar">
                            <label for="play">Jogar</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="hobbys[]" id="run" value="correr">
                            <label for="run">Correr</label>
                        </div>
                    </div>
                </div>

                <div class="checkbox-container">
                    <p>Escolha seus carros favoritos: </p>
                        
                    <div class="checkboxes">
                        <div class="field">
                            <input type="checkbox" name="cars[]" id="fusca" value="fusca">
                            <label for="fusca">Fusca</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="cars[]" id="civic" value="Honda Civic">
                            <label for="civic">Honda Civic</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="cars[]" id="mareia" value="Mareia">
                            <label for="mareia">Mareia</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="cars[]" id="sandero" value="Sandero">
                            <label for="sandero">Sandero</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="cars[]" id="montana" value="Montana">
                            <label for="montana">Montana</label>
                        </div>
                        <div class="field">
                            <input type="checkbox" name="cars[]" id="tt" value="Audi TT">
                            <label for="tt">Audi TT</label>
                        </div>
                    </div>
                </div>

                <div class="select-container">
                    <p>Escolha sua modalidade de esporte favorita: </p>

                    <select class="multiple-select" name="sport">
                        <option value="Atletismo">Atletismo</option>
                        <option value="Basquete">Basquete</option>
                        <option value="Futebol de campo">Futebol de campo</option>
                        <option value="Futsal">Futsal</option>
                        <option value="Voleibol ">Voleibol </option>
                        <option value="Natação">Natação</option>
                        <option value="Ginástica">Ginástica</option>
                        <option value="Ciclismo">Ciclismo</option>
                        <option value="Surfe">Surfe</option>
                        <option value="Luta">Luta</option>
                        <option value="Tênis de mesa">Tênis de mesa</option>
                        <option value="Esgrima">Esgrima</option>
                        <option value="Badminton">Badminton</option>
                    </select>
                </div>

            </fieldset>

            <fieldset class="form-fieldset">
                <legend>Dados para login:</legend>

                <div class="textfield">
                    <label for="user">Email:</label>
                    <input class="input" type="email" name="user" placeholder="example@domain.com" required>
                </div>
                <div class="textfield">
                    <label for="password">Senha:</label>
                    <input class="input" type="password" name="password" placeholder="senha" required>
                </div>
                <div class="textfield">
                    <label for="password-confirmation">Confirmação de senha:</label>
                    <input class="input" type="password" name="password-confirmation" placeholder="digite sua senha novamente" required>
                </div>
            </fieldset>
            
            <input class="input submit" type="submit" value="Cadastrar">
        </form>
        <p class="change-page">Já tem uma conta? <a href="index.php">Fazer login</a></p>
    </main>
</body>
</html>