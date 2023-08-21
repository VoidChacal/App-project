<?php
    session_start();
	include('assets/php/Config.php');
	HeaderEcho(
        'Home', 
        [
            [0, 'http-equiv="X-UA-Compatible" content="IE=edge"'],
            [0, 'name="viewport" content="width=device-width, initial-scale=1.0"'],
            [1, 'assets/css/index.css'],
            [2, 'assets/java/script.js'],
            [2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
            [2, 'https://code.jquery.com/jquery-3.2.1.slim.js', 'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"'],
        ],
        'assets/imgs/Logo.png'
    );
?>
    <body class="RaibowBg-1 flexDisplay">
		<button class="irTop" style="background-image: url('assets/imgs/nigger.png');"></button>
		<!--tolls-->
		<div class="Block-top flexDisplay">
			<div class="certerTop flexDisplay">
				<div class="logoTop"></div>
				<div class="FastAcess flexDisplay">
					<button class="topicOne bntScroll">O que é este Site</button>
					<button class="topicOne bntScroll">Diferencial</button>
					<button class="topicOne bntScroll">Entrar</button>
					<button class="topicOne bntScroll">Desenvolvedores</button>
				</div>
				<button class="MenuBar" onclick=""><i class="fa-solid fa-bars"></i></button>
			</div>
		</div>
		<!--"sumário"-->
		<div class="Block-One flexDisplay">
			<div class="BigBlockOne flexDisplay">
				<div class="textOne flexDisplay">
					<button class="topicOne bntScroll">O que é este Site</button>
					<button class="topicOne bntScroll">Diferencial</button>
					<button class="topicOne bntScroll">Entrar</button>
					<button class="topicOne bntScroll">Desenvolvedores</button>
				</div>
				<div class="text2One flexDisplay"></div>
			</div>
			<div class="shortBlockOne flexDisplay">
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-book-open"></i>
					<p class="palagrafyOne">aaaaa</p>
				</div>
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-users"></i>
                    <p class="palagrafyOne">aaaaa</p>
				</div>
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-user-pen"></i>
                    <p class="palagrafyOne">aaaaa</p>
				</div>
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-sack-xmark"></i>
                    <p class="palagrafyOne">aaaaa</p>
				</div>
			</div>
		</div>
		<div class="Block-Two flexDisplay">
			<div class="meioBlock2 flexDisplay">
				<div class="textBlock2 flexDisplay">
					<h2>O que é este Site?</h2>
					<p>Nosso site é ...</p>
				</div>
				<img src="assets/imgs/luca.png" class="imgReprBlock2">
			</div>
			<div class="meioBlock2 typeMain2-Block2 flexDisplay">
				<img src="assets/imgs/bitcoin.png" class="imgReprBlock2">
				<div class="textBlock2 flexDisplay">
					<div class="blockIconBlock2 flexDisplay">
						<i class="fa-solid fa-globe"></i>
						<h4>Web</h4>
					</div>
					<div class="blockIconBlock2 cor2-Block2 flexDisplay">
						<i class="fa-solid fa-book-open-reader"></i>
						<h4>App</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="Block-Tre flexDisplay">
			<div class="cardMost-tre flexDisplay">
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-star"></i>
			    <p class="cardTextTre flexDisplay"><label>Diferenciais</label>...</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-cube"></i>
			    <p class="cardTextTre flexDisplay"><label>Item A</label>...</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-address-book"></i>
			    <p class="cardTextTre flexDisplay"><label>Item B</label>...</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-people-robbery"></i>
			    <p class="cardTextTre flexDisplay"><label>Item C</label>...</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-ranking-star"></i>
			    <p class="cardTextTre flexDisplay"><label>Item D</label>...</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-heart"></i>
			    <p class="cardTextTre flexDisplay"><label>Bem-vindo</label>bussy</p>
			  </div>
			</div>
		</div>
		<div class="Block-Two flexDisplay">
			<div class="meioBlock2 flexDisplay">
				<div class="textBlock2 flexDisplay">
					<h2>Entre e Participe!</h2>
					<p>Faça sua conta e administre os onibus da sua empresa por aqui</p>
				</div>
				<img src="assets/imgs/joia.png" class="imgReprBlock2">
			</div>
			<div class="meioBlock2 typeMain2-Block2 flexDisplay">
				<div class="textBlock4 flexDisplay">
					<div class="blockIconBlock2 cor2-Block4 flexDisplay">
						<i class="fa-solid fa-person-walking-arrow-right"></i>
						<button class="BtnEntrarBlock4" onclick="">Entrar</button>
					</div>
					<div class="blockIconBlock2 cor2-Block2 cor2-Block4 flexDisplay">
						<i class="fa-solid fa-user-plus"></i>
						<button class="BtnEntrarBlock4 cssBlock4" onclick="">Se Cadastrar</button>
					</div>
				</div>
			</div>
		</div>
		<div class="Block-Five flexDisplay">
			<div class="centerBlock5 flexDisplay">
				<div class="TextBlock5 flexDisplay">
					<h3>Cronometrais</h3>
					<p>essa Equipe ....</p>
				</div>
				<div class="developerBlock5 flexDisplay">
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/91744500?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Murilo G. - Programador</label>
                    </div>
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/92901966?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Rafael R. - Programador</label>
                    </div>
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/91744500?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Laryssa N.- Não sei</label>
                    </div>
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/91744500?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Emanuelle G. - Não sei</label>
                    </div>
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/91744500?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Ana Beatriz S. - Não sei</label>
                    </div>
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/91744500?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Yasmin C. - Não sei</label>
                    </div>
				</div>
			</div>
		</div>
        <script type="text/javascript">
            function Scroll0Display(item) {
                let fun = window.scrollY === 0 ? 0 : 1;
                ocultar(item, fun);
            }
			window.addEventListener("load", ()=>{ Scroll0Display('.irTop'); });
			window.addEventListener("scroll", ()=>{ Scroll0Display('.irTop'); });

			document.querySelector(".irTop").addEventListener("click", function() {
			    window.scrollTo({ top: 0, behavior: 'smooth' });
			});
			document.querySelector(".logoTop").addEventListener("click", function() {
			    window.scrollTo({ top: 0, behavior: 'smooth' });
			});

			let scrollsTops = [1000, 1750, 2500, 3300, 1000, 1750, 2500, 3300];

			const buttons = document.querySelectorAll('.bntScroll');

			buttons.forEach((button, index) => {
			    button.addEventListener('click', () => {
			        const scrollDistance = scrollsTops[index];
			        window.scrollTo({ top: scrollDistance, behavior: 'smooth' });
			    });
			});
		</script>
    </body>
<?php 
    footEcho();
?>