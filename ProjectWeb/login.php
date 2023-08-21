<?php
    session_start();
	include('assets/php/Config.php');
	HeaderEcho(
        'Entrar', 
        [
            [0, 'http-equiv="X-UA-Compatible" content="IE=edge"'],
            [0, 'name="viewport" content="width=device-width, initial-scale=1.0"'],
            [1, 'assets/css/login.css'],
            [2, 'assets/java/script.js'],
            [2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
            [2, 'https://code.jquery.com/jquery-3.2.1.slim.js', 'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"'],
        ],
        'assets/imgs/Logo.png'
    );
?>
    <body>
    <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form>
                    <h1>Crie sua Conta</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-github"></i></a>
                    </div>
                    <span>Ou use seu email</span>
                    <div class="scrool">
                        <input type="text" placeholder="Nome do CEO" />
                        <input type="text" placeholder="Nome da Empresa" />
                        <input type="email" placeholder="Email de Contato" />
                        <input type="password" placeholder="CNPJ" />
                        <input type="password" placeholder="Senha" />
                        <input type="password" placeholder="Confirmar Senha" />
                        <label for="imgLogoInput">Imagem da logo</label>
                        <input type="file" id="imgLogoInput"/>

                    </div>
                    <button>Cadastrar</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form>
                    <h1>Entrar</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-github"></i></a>
                    </div>
                    <span>Ou use seu email</span>
                    <input type="email" placeholder="Email ou Número de telefone" />
                    <input type="password" placeholder="Password" />
                    <a href="#">esqueceu a senha?</a>
                    <button>Entrar</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bem Vindo, de volta!</h1>
                        <p>Entre, e use o nosso total</p>
                        <button class="ghost" id="signIn">Entre</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Olá, Interresado!</h1>
                        <p>Seja bem vindo, a nossa plataforma</p>
                        <button class="ghost" id="signUp">Cadastra-se</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
<?php 
    footEcho();
?>