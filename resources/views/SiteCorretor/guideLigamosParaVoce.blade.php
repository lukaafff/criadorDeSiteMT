<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guide Home - Página Home</title>

    <link rel="stylesheet" href="/css/SiteCorretor/guideHome.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideStandard.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideContato.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideEncomendarImovel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="/img/favicon.png" />

    <style>
        .containerInputs{
            margin-bottom: 20px !important
        }
        .inputBox{
            max-width: 100% !important;
        }
        .textareaBox{
            margin-top: 20px !important;
        }
        #textareaBox{
            display: none;
        }
    </style>
</head>


<body>
    <header>
      <div class="navCont">
        <div class="container nav-bar-flex">
          <div>
            <a href="https://demo02.houzez.co/">
              <img src="https://demo02.houzez.co/wp-content/uploads/2018/05/logo.png"
                  height="24" width="127" alt="logo">
            </a>
          </div>
          <button class="btn-mobile"><i class="fa-solid fa-bars"></i></button>
          <div class="d-flex mobile-menu">
            <button class="btn-close-mobile"><i class="fa-solid fa-xmark"></i></button>
            <ul class="d-flex align-items-center">
              <li class="bordar-menu-li"><a href="{{ route('home')}}">Home</a></li>
              <li class="bordar-menu-li"><a href="{{ route('contato')}}">Contato</a></li>
              <li class="bordar-menu-li"><a href="{{ route('encomendar-imovel')}}">Encomendar imóvel</a></li>
              <li class="bordar-menu-li"><a href="#" ><i class="fa-solid fa-phone-volume rightML-menu"></i> 21 99999-9999</a></li>
              <li class="bordar-menu-li"><a href="{{ route('ligamos-para-voce')}}">Ligamos para você</a></li>
              <ul class="social bordar-menu-li">
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
              </ul>
            </ul>
            <ul class="d-flex align-items-center areaSub ">
              <li class="bordar-menu-li"><a class="dropMenu" href="#">Mais <i class="fa-solid fa-chevron-down leftML-menu"></i></a>
                <ul class="sub-menu">
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Fórum</a></li>
                </ul>
              </li>
              <li><a class="btn-prin" href="{{ route('cadastrar-imovel')}}">Cadastrar imóvel</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <main>
        <section class="container colorText">
            <div class="containerFlex">
                <div class="containerEncomendar">
                    <h1 class="titleEncomendar">Ligamos para você</h1>
                    <form action="">
                        <div class="top">
                            <h2 class="subTitle">Seus dados</h2>
                            <div class="containerInputs">
                                <div class="inputBox">
                                    <label for="name" class="label">Nome</label>
                                    <input type="text" id="name" placeholder="Digite seu nome" class="input inputMargin" required>
                                </div>
                                <div class="inputBox">
                                    <label for="telefone" class="label">Telefone</label>
                                    <input type="text" id="telefone" placeholder="(00) 00000-0000" class="input" required>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="inputBox">
                                    <label for="interesse" class="label">Interesse</label>
                                    <select name="interesse" id="interesse" class="input" required onchange="mostrarTextarea()">
                                        <option value="option1" disabled selected>Selecione uma opção...</option>
                                        <option value="option2">Procuro imóvel para comprar</option>
                                        <option value="option3">Procuro imóvel para alugar</option>
                                        <option value="option4">Sou dono, quero vender meu imóvel</option>
                                        <option value="option5">Sou dono, quero alugar meu imóvel</option>
                                        <option value="outros">Outros</option>
                                    </select>
                                </div>
                                <div class="inputBox textareaBox" id="textareaBox">
                                    <label for="message" class="label">Mensagem</label>
                                    <textarea name="message" id="message" class="input textarea" required placeholder="Digite sua mensagem..."></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btnEnviar" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
      {{-- Botão whatsapp --}}
      <div id="whatsapp">
        <a href="#" target="_blank" id="toggle1" class="whatsapp">
          <i class="fa-brands fa-whatsapp"></i>
        </a>
      </div>
    </main>
    <footer>
        <div class="bg-footer-one">
        <div class="container cont-footer-one">
            <div class="d-flex uls-footer">
            <div class="list-footer">
                <p class="title-footer">Locais</p>
                <ul>
                <li><a href="">> Botafogo</a></li>
                <li><a href="">> Barra</a></li>
                <li><a href="">> Ipanema</a></li>
                <li><a href="">> Tijuca</a></li>
                </ul>
            </div>
            <div class="list-footer fontWhe">
                <p class="title-footer">Contato</p>
                <ul>
                <li class="white-text"><i class="fa-solid fa-map-location-dot"></i> 774 NE 84th St Miami, FL 33879</li>
                <li><a href="#" ><i class="fa-solid fa-phone-volume rightML-menu"></i> 21 99999-9999</a></li>
                <li><a href="#" ><i class="fa-solid fa-envelope"></i>  email@houzez.co</a></li>
                </ul>
            </div>
            </div>
            <div class="form-input">
            <p class="title-footer">Newsletter</p>
            <div class="cont-input">
                <input type="text" placeholder="Coloque seu E-mail">
                <button>Enviar</button>
            </div>
            <p class="text-info font-14">Houzez is a premium WordPress theme for Designers & Real Estate Agents.</p>
            </div>
        </div>
        </div>
        <div class="bg-footer-two">
        <div class="container cont-footer-two">
            <div class="flex-1 font-14">
            <p>endereço cadastrado no site</p>
            </div>
            <div class="flex-1 font-14">
            <p>© Copyright 2023. Todos os direitos reservados.</p>
            </div>
            <div class="flex-1 font-10">
            <p>As informações e valores estão sujeitos a alterações e podem conter imprecisões, podendo ser alterados a qualquer momento, sem aviso prévio, a critério dos proprietários.</p>
            </div>
        </div>
        </div>
    </footer>
    <script type="text/javascript" src="/js/guideStandard.js"></script>
    <script type="text/javascript" src="/js/create-home.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        function mostrarTextarea() {
            let select = document.getElementById("interesse");
            let mensagem = document.getElementById("textareaBox");
            let mensagemTextarea = document.getElementById("message");

            if (select.value === "outros") {
                mensagem.style.display = "block";
                mensagemTextarea.required = true;
            } else {
                mensagem.style.display = "none";
                mensagemTextarea.required = false;
            }
        }
    </script>

    <script>
        let SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

        $('#telefone').mask(SPMaskBehavior, spOptions);
    </script>
</body>
</html>
