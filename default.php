<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu-mobile.css">
    <link rel="icon" href="assetsPet/Logo.ico">
    
  
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PMXPBFD5');</script>
<!-- End Google Tag Manager -->
    <title>Casa PetZen</title>
</head>

<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMXPBFD5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <header class="header ">
        <div>
            <nav class="navbar">
                <img class="logo" src="assetsPet/LogoExtenso.png" alt="">
                <nav>
                    <ul>
                        <li><a href="default.php">Home</a></li>
                        <li><a style="cursor: pointer;" onclick="scrollToContact()">Sobre Nós</a></li>
                        <li><a href="#cards-flex">Serviços</a></li>
                        <li><a href="Pages/galeria.html">Fotos</a></li>                       
                        <li><a href="#Ctc">Contato</a></li>
                    </ul>
                    
                </nav>

                <div class="menu-hamburguer">
                    <input type="checkbox" id="menu-hamburguer" class="input-menu-hamburguer">

                    <label for="menu-hamburguer">
                        <div class="menu">
                            <span class="hamburguer"></span>
                        </div>
                    </label>
                </div>
            </nav>
        </div>
    </header>

    <nav class="navMobile">

        <h2>Menu</h2>

        <ul>
            <li><a onclick="fecharNav()" href="default.php">Home</a></li>
            <li><a onclick="fecharNav()" href="Pages/daycare.html">Day Care</a></li>
            <li><a onclick="fecharNav()" href="Pages/hospedagem.html">Hospedagem</a></li>
            <li><a onclick="fecharNav()" href="#cards-flex">Serviços</a></li>
            <li><a onclick="fecharNav()" href="Pages/galeria.html">Fotos</a></li>    
            <li><a style="cursor: pointer;" onclick="fecharNav(),scrollToSobre()" >Sobre Nós</a></li>
            <li><a onclick="fecharNav()" href="#Ctc">Contato</a></li>
            
        </ul>





    </nav>

    <section class="banner" id="banner">

        <article class="banner-imagem">
            
            <a style="cursor: pointer;" onclick="scrollToSobre()">Conheça-nos</a>

        </article>

    </section>

    
    <section class="sobre-nos" id="sobre-nos" >
        <div class="class-sobre-nos" >
            
            <div class="texto-sobre" >
                <h1 class="title">Sobre Nós</h1>
                    <p>A Casa Pet Zen é uma creche e hotel que oferece serviços aos tutores de cães que desejam proporcionar interação e companhia a seus animais enquanto estiverem fora de casa (trabalhando ou viajando). 
                    <br>
                    
                    Um dos diferenciais é o espaço amplo e acolhedor, provido de estímulos realmente naturais (plantas, terra e grama) e atividades físicas (brincadeiras) que reduzem a ansiedade, estimulam a socialização e promovem muito gasto de energia.

                    <br>
                    
                    Nosso ambiente está localizado em área nobre no meio da cidade, no bairro da Vila Romana zona oeste de São Paulo e com fácil acesso à Marginal Pinheiros.</p>
                
            </div>
            <div class="card">
              <a href="Pages/galeria.html">
              <img src="assetsPet/Galeria.jpg" alt="" class="sobre-nos-img">
              </a>
               <a href="Pages/galeria.html">
                <div class="card-content">
                    <span class="card-title">Galeria de Fotos</span>
                    <span class="card-ver-mais">Ver mais</span>
                </div>
               </a>
            </div>
            
        </div>

    </section>

    <section class="cards-flex" id="cards-flex">
        <div>
            <h1 class="title">Serviços</h1>
        </div>
        <section class="card-section" data-aos="fade-up" data-aos-duration="500">
            <div  class="card">
                <a href="Pages/daycare.html">
                    <img src="assetsPet/DAYCAREPT1.jpg" alt="">
                </a>
               <a href="Pages/daycare.html">
                <div class="card-content">
                    <span class="card-title">Day Care</span>
                    <span class="card-ver-mais">Ver mais</span>
                </div>
               </a>
            </div>
            <div class="card">
              <a href="Pages/hospedagem.html">
                <img src="assetsPet/Hospedagemm.jpg" alt="">
              </a>
               <a href="Pages/hospedagem.html">
                <div class="card-content">
                    <span class="card-title">Hospedagem</span>
                    <span class="card-ver-mais">Ver mais</span>
                </div>
               </a>
            </div>
        </section>
    </section>

    

     <main class="parallax-banner">
        <section class="parallax background">

        </section>

    </main>
    <br><br><br> 


    <!-- AVALIAÇÕES GOOGLE MAPS -->

    <h1 class="title">Avaliações</h1>

    <section class="avaliacoes">


      

        <!--  -->
        <div class="avaliacoes-card">
            <div class="usuarioimg1">
                <img class="usuario_img" src="icons/User1.png" alt="">
            </div>
            <div class="usuario1">
                <h2>Julio Barbiellini</h2>
            </div>

            <div>
                <div class="estrelas-avaliacoes">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                </div>
                <div class="textosava1">
                    <p>
                        Maravilhoso Lugar !!! indico a todos !!!
                        se vc quer que seu filho seja tratado com todo amor e carinho esse é o lugar !! Obrigado Luan e Rosangela vcs são incriveis
                    </p>
                </div>
                <div class="textosglg1">
                    <a  href="https://g.co/kgs/MqW9Mk" target="_blank" >Ver mais</a>
                </div>
                    
                
            </div>
        </div>


        <div class="avaliacoes-card">
            <div class="usuarioimg2">
                <img class="usuario_img" src="icons/User2.png" alt="">
            </div>
            <div class="usuario2">
                <h2>Amanda Fatore dos Santos</h2>
            </div>

            <div>
                <div class="estrelas-avaliacoes">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                </div>
                <div class="textosava2">
                    <p>
                        Lugar muito aconchegante, perfeito para quem preza por uma qualidade de vida para seu animalzinho, companheiro, serviço de qualidade e completo, desde cuidado, alimentação e lazer, super recomendo
                    </p>
                </div>
                <div class="textosglg2">
                    <a  href="https://g.co/kgs/xadVtK" target="_blank">Ver mais</a>
                </div>
                
                
            </div>
        </div>

        
  <div class="avaliacoes-card">
    <div class="usuarioimg3">
        <img class="usuario_img" src="icons/User3.png" alt="">
    </div>
    <div class="usuario3">
        <h2>Leila Correia</h2>
    </div>

    <div>
        <div class="estrelas-avaliacoes">
            <img src="icons/estrela_avaliacao.png" alt="">
            <img src="icons/estrela_avaliacao.png" alt="">
            <img src="icons/estrela_avaliacao.png" alt="">
            <img src="icons/estrela_avaliacao.png" alt="">
            <img src="icons/estrela_avaliacao.png" alt="">
        </div>
        <div class="textosava3">
        <p>
            Deixamos nosso filho pela primeira vez na PetZen.E adoramos a experiência! Eles mandaram fotos e vídeos pra não ficar tão preocupada e com saudades. E abriram excessão num pedido que fiz que deixou a mamãe bem feliz! Ainda me devolveram ele limpinho de banho tomado! Voltará mais vezes.
        </p>
        </div>
        <div class="textosglg3">
        <a  href="https://g.co/kgs/uxjppU" target="_blank">Ver mais</a>
        </div>
       
    </div>
        
    </section>

</div>      
<div class="avalie_tambem">
 <a  href="https://www.google.com.br/maps/place/Casa+PetZen+-+Creche+e+Hotel+para+Cachorro/@-23.5297993,-46.6977204,17z/data=!4m8!3m7!1s0x94cef9a8492e8c87:0xe62168051dc7976b!8m2!3d-23.5297993!4d-46.6977204!9m1!1b1!16s%2Fg%2F11stb99v9r?entry=ttu">Avalie também!</a>
</div>
   

   <br><br>

    <main class="contato" id="Ctc">

        <div>
            <h1 class="title">Entre em contato conosco!</h1>
        </div>
		
		

        <div class="class-contato" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14632.300605362725!2d-46.706475130224604!3d-23.529799299999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef877a61b4b1f%3A0x150b8f575400d71a!2sR.%20Aur%C3%A9lia%2C%20891%20-%20Vila%20Romana%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005046-000!5e0!3m2!1spt-BR!2sbr!4v1688734302205!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form  action="Envia.php" name="formEnvia" method="POST" class="Contato"  >
                
                <div class="inputs">
                    <input type="text" name="Nome"  id= "teste" class="input"  placeholder="Nome"  required>
                    <input type="email" name="Email" id="teste" class="input" placeholder="E-mail" required/>                   
                    <input type="number" name="Telefone" required id="teste" class="input" placeholder="Número de Telefone" />
                    <textarea required  name="Mensagem" placeholder="Escreva uma mensagem:" id="" cols="30" rows="10"></textarea>
                </div>
                 <button type="submit">Enviar</button>
            </form>
			  
        </div>
    </main>
    

    <!-- BOTAO WHATSAPP -->
	<a target="_blank" class="btnInsta" href="https://www.instagram.com/casapetzen/">
        <img width="65" src="icons/instagram.png" alt="">
    </a>
    <a target="_blank" class="btnWhatsapp" href="https://wa.me/5511949995555?text=Olá Casa PetZen! Gostaria de entrar em contato">
        <img width="65" src="icons/whatsapp.png" alt="">
    </a>

    <!--  -->

    <footer id="footer">

        <div>
            
            <img class="logo" src="assetsPet/Logo.png" alt="">
        </div>
        <div class="listFooter">
            <h2>Atendimento</h2>
            <ul>
                <li><a target="_blank" href="https://wa.me/5511949995555?text=Olá Casa PetZen! Gostaria de entrar em contato">Fale conosco</a></li>
                <li><a  style="cursor: pointer;" onclick="scrollToEmail()">Contato</a></li>
               
            </ul>
        </div>
         <div class="listFooter">
            <h2>Informações</h2>
            <ul>
                <li>contato@casapetzen.com.br</li>
                <li>(11)94999-5555</li>
                <li>(11)98476-1106</li>
                <li>Rua Aurélia 891, Vila Romana - São Paulo SP</li>
            </ul>
        </div>
        
        <div class="redesSociais">
            <div>
                <a target="_blank" href="https://www.facebook.com/casapetzen">
                    <img src="icons/facebook (1).png" alt="">
                </a>
            </div>
            <div>
                <a target="_blank" href="https://www.instagram.com/casapetzen/">
                    <img src="icons/instagram (1).png" alt="">
                </a>
            </div>
            <div>
               <a target="_blank" href="https://www.tiktok.com/@casapetzen">
                <img src="icons/tiktok.png" alt="">
               </a>
            </div>
        </div>

        

    </footer>

     <div class="madeby">
        <p>© 2023 Casa PetZen. Todos os direitos reservados.</p>
        <p>
            Desenvolvido por <a href="https://www.linkedin.com/in/guilherme-sella-588390273/" target="_blank">Guilherme Sella</a>
            e <a href="https://www.linkedin.com/in/raphael-fran%C3%A7a-simonetti-76b625249/" target="_blank">Raphael Simonetti</a>
        </p>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

<script src="Js/main.js"></script>

</html>