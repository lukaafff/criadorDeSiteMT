<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guide Home - Página Contato</title>

    <link rel="stylesheet" href="/css/SiteCorretor/guideHome.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideStandard.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideContato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
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
      <section class="containerContato">
        <div class="bannerContainer">
            <div class="containerImg">
                <img src="/img/imgContato/whatsappContatoBanner.svg" alt="">
            </div>
            <div class="containerTexts">
                <span class="subTitle">Agora ficou <strong>mais fácil</strong> conversar conosco</span>
                <h1 class="title">Atendimento pelo <strong>WhatsApp</strong></h1>
            </div>
            <div class="containerWhats">
                <a href="#" class="btnWhatsapp" target="_blank" title="Clique para conversar no Whatsapp">Clique para Conversar</a>
            </div>
        </div>
        <div class="mainContainer">
            <div class="containerLeft">
              <h1 class="titleContatoPage">Fale Conosco</h1>
                <form action="">
                    <div class="inputFlex">
                        <div class="campoInput">
                            <label for="name" class="label">Nome</label>
                            <input type="text" id="name" placeholder="Digite seu nome" required class="inputNameTel input">
                        </div>
                        <div class="campoInput">
                            <label for="telefone" class="label">Telefone</label>
                            <input type="text" id="telefone" placeholder="(00) 00000-0000" required class="inputNameTel input" maxlength="15" oninput="formatarTel(this)">
                        </div>
                    </div>
                    <div class="campoInput campoImputBottom">
                        <label for="email" class="label">Email</label>
                        <input type="email" id="email" placeholder="Digite seu Email" required class="input inputBottom">
                    </div>
                    <div class="campoInput campoInputRadio">
                      <label class="label">Como quer ser respondido?</label>
                        <div class="flexRadio">
                          <div>
                            <input type="radio" id="resposta-telefone" name="resposta" value="telefone" required>
                            <label for="resposta-telefone" class="labelRadio">Telefone</label>
                          </div>

                          <div>
                            <input type="radio" id="resposta-email" name="resposta" value="email" required>
                            <label for="resposta-email" class="labelRadio">Email</label>
                          </div>

                          <div>
                            <input type="radio" id="resposta-whatsapp" name="resposta" value="whatsapp" required>
                            <label for="resposta-whatsapp" class="labelRadio">WhatsApp</label>
                          </div>
                        </div>
                    </div>
                    <div class="campoInput campoImputBottom">
                        <label for="message" class="label">Mensagem</label>
                        <textarea name="message" id="message" cols="30" rows="10" required class="input inputBottom textarea" placeholder="Digite sua mensagem"></textarea>
                    </div>

                    <button type="submit" value="Enviar" class="btnContato">Enviar</button>
                </form>
            </div>
            <div class="right">
              <div class="containerRight">
                <h3 class="title">Para dúvidas entre em contato:</h3>

                <div class="boxContato">
                  <h4 class="titleContato">Email:</h4>
                  <p class="textContato">
                    <img src="/img/imgContato/emailContato.svg" alt="ícone de email" class="iconContato">
                    <span class="spanContato" id="emailContato">email<span class="hidden">@houzez.co</span><a href="#" class="show-email"><span style="color:#222222;">...</span>(Ver Email)</a> </span>
                  </p>
                </div>

                <div class="boxContato">
                  <h4 class="titleContato">Endereço:</h4>
                  <p class="textContato">
                    <img src="/img/imgContato/addressContato.svg" alt="" class="iconContato">
                    <span class="spanContato">774 NE 84th St Miami, FL 33879</span>
                  </p>
                </div>

                <div class="boxContato">
                  <h4 class="titleContato">Telefone:</h4>
                  <p class="textContato">
                    <img src="/img/imgContato/phoneContato.svg" alt="" class="iconContato">
                    <span class="spanContato">(11) 96139-<span class="hidden">3362</span><a href="#" class="show-phone"><span style="color:#222222;">...</span>(Ver telefone)</a></span>
                  </p>
                </div>
              </div>
              <div class="containerRightBottom">
                <h3 class="title">Nossas redes sociais:</h3>
                <div class="containerSocial">
                  <a href="#" target="_blank" class="linkSocial" title="Facebook">
                    <img src="/img/imgContato/facebookContato.svg" alt="Ícone Facebook" class="iconSocial">
                  </a>
                  <a href="#" target="_blank" class="linkSocial" title="Twitter">
                    <img src="/img/imgContato/twitterContato.svg" alt="Ícone Twitter" class="iconSocial">
                  </a>
                  <a href="#" target="_blank" class="linkSocial linkYoutube" title="Youtube">
                    <img src="/img/imgContato/youtubeContato.svg" alt="Ícone Youtube" class="iconSocial iconYoutube">
                  </a>
                  <a href="#" target="_blank" class="linkSocial" title="Linkedin">
                    <img src="/img/imgContato/linkedinContato.svg" alt="Ícone Linkedin" class="iconSocial">
                  </a>
                  <a href="#" target="_blank" class="linkSocial" title="Instagram">
                    <img src="/img/imgContato/instagramContato.svg" alt="Ícone Instagram" class="iconSocial">
                  </a>
                  <a href="#" target="_blank" class="linkSocial" title="Skype">
                    <img src="/img/imgContato/skypeContato.svg" alt="Ícone Skype" class="iconSocial">
                  </a>
                </div>
              </div>
            </div>
        </div>
        <div class="containerMap">
          <div id="map">
            <button id="show-map-button">Ver Mapa</button>
            <div id="mapOverlay"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.5028675323883!2d-80.18262022382248!3d25.85292180482829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b22c59057bf1%3A0x7977972d22752b33!2s774%20NE%2084th%20St%2C%20Miami%2C%20FL%2033138%2C%20EUA!5e0!3m2!1spt-BR!2sbr!4v1708100324802!5m2!1spt-BR!2sbr" style="border:0; display:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframeMapa iframeMapaCapa" id="iframeMapa"></iframe>
            <img src="https://i.ibb.co/nRNFfmW/map.png" alt="" class="iframeMapa imgCapaMapa" id="iframeMapa">
          </div>
          <p class="textMap"><strong>Endereço:</strong> 774 NE 84th St Miami, FL 33879
            {{-- <a href="#" target="_blank" class="linkMapa">Ver endereço</a></p> --}}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=SUA_CHAVE_DA_API"></script> --}}

    {{-- <script>
        // Função para formatar o número de telefone enquanto o usuário digita
        function formatarTelefone(event) {
            var input = event.target;
            var valor = input.value.replace(/\D/g, '');

            // Verifica se o evento foi um backspace
            if (event.inputType === 'deleteContentBackward' && !/\d$/.test(valor)) {
                valor = valor.substring(0, valor.length - 1); // Remove o último caractere se for um não número
            }

            // Aplica a máscara para (00) 00000-0000
            var formatted = '(' + valor.substring(0, 2) + ') ' + valor.substring(2, 7) + '-' + valor.substring(7, 11);

            // Atualiza o valor no campo de entrada
            input.value = formatted;
        }

        // Adiciona um ouvinte de evento de entrada para chamar a função de formatação enquanto o usuário digita
        document.getElementById('telefone').addEventListener('input', formatarTelefone);
    </script> --}}
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

    <script>
      document.getElementById('show-map-button').addEventListener('click', function() {
        document.getElementById('mapOverlay').style.display = 'none';
        document.getElementById('show-map-button').style.display = 'none';
        document.querySelector('.imgCapaMapa').style.display = 'none';
        document.querySelector('.iframeMapaCapa').style.display = 'block';
      });
    </script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          let showPhoneLinks = document.querySelectorAll('.show-phone');
          showPhoneLinks.forEach(function(link) {
              link.addEventListener('click', function(event) {
                  event.preventDefault();
                  let parentSpan = this.parentElement;
                  let hiddenPart = parentSpan.querySelector('.hidden');
                  if (hiddenPart) {
                      hiddenPart.style.display = 'inline';
                      this.style.display = 'none';
                  }
              });
          });

          let showEmailLinks = document.querySelectorAll('.show-email');
          showEmailLinks.forEach(function(link) {
              link.addEventListener('click', function(event) {
                  event.preventDefault();
                  let parentSpan = this.parentElement;
                  let hiddenPart = parentSpan.querySelector('.hidden');
                  if (hiddenPart) {
                      hiddenPart.style.display = 'inline';
                      this.style.display = 'none';
                  }
              });
          });
      });
    </script>
</body>
</html>
