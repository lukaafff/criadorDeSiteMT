<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guide Home - Página Cadastrar Imóvel segunda etapa</title>

    <link rel="stylesheet" href="/css/SiteCorretor/guideHome.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideStandard.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideContato.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideCadastrarImovel.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideEncomendarImovel.css">
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
      <section class="container">
        <div class="containerFlex">
            <div class="containerEncomendar">
              <h1 class="titleEncomendar colorBlack">Segunda Etapa</h1>
              <form action="">
                  <div class="top">
                      <h2 class="subTitle colorBlack">Informe mais detalhes sobre seu imóvel</h2>
                      <div class="containerInputs containerInputsMargin">
                          <div class="inputBox">
                              <label for="endereco" class="label">Endereço</label>
                              <input type="text" id="endereco" placeholder="Digite seu endereço" class="input inputMargin" required>
                          </div>
                      </div>
                  </div>

                  <div class="bottom">
                      {{-- <div class="containerInputs containerInputMargin">
                        <div class="inputBox">
                            <label for="cidade" class="label">Cidade</label>
                            <input type="text" id="cidade" placeholder="Digite a cidade" class="input inputMargin" required>
                        </div>
                        <div class="inputBox">
                            <label for="bairro" class="label">Bairro</label>
                            <input type="text" id="bairro" placeholder="Digite o bairro" class="input" required>
                        </div>
                      </div> --}}
                      <div class="containerInputs containerInputMargin">
                        <div class="inputBox">
                            <label for="quartos" class="label">Quartos</label>
                            <select name="quartos" id="quartos" class="input inputMargin" required>
                                <option value="" disabled selected>Selecione...</option>
                                <option value="option1">Não possui</option>
                                <option value="option2">1 quarto</option>
                                <option value="option3">2 quartos</option>
                                <option value="option4">3 quartos</option>
                                <option value="option5">4 quartos</option>
                                <option value="option6">5 quartos</option>
                                <option value="option7">6 quartos</option>
                                <option value="option8">7 quartos</option>
                                <option value="option9">8 quartos</option>
                                <option value="option10">9 quartos</option>
                                <option value="option11">10 quartos</option>
                                <option value="option12">11 quartos</option>
                                <option value="option13">12 quartos</option>
                                <option value="option14">13 quartos</option>
                                <option value="option15">14 quartos</option>
                                <option value="option16">15 quartos</option>
                                <option value="option17">16 quartos</option>
                                <option value="option18">17 quartos</option>
                                <option value="option19">18 quartos</option>
                                <option value="option20">19 quartos</option>
                                <option value="option21">20 quartos</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <label for="suites" class="label">Suítes</label>
                            <select name="suites" id="suites" class="input inputMargin" required>
                                <option value="" disabled selected>Selecione...</option>
                                <option value="option1">Não possui</option>
                                <option value="option2">1 suíte</option>
                                <option value="option3">2 suítes</option>
                                <option value="option4">3 suítes</option>
                                <option value="option5">4 suítes</option>
                                <option value="option6">5 suítes</option>
                                <option value="option7">6 suítes</option>
                                <option value="option8">7 suítes</option>
                                <option value="option9">8 suítes</option>
                                <option value="option10">9 suítes</option>
                                <option value="option11">10 suítes</option>
                                <option value="option12">11 suítes</option>
                                <option value="option13">12 suítes</option>
                                <option value="option14">13 suítes</option>
                                <option value="option15">14 suítes</option>
                                <option value="option16">15 suítes</option>
                                <option value="option17">16 suítes</option>
                                <option value="option18">17 suítes</option>
                                <option value="option19">18 suítes</option>
                                <option value="option20">19 suítes</option>
                                <option value="option21">20 suítes</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <label for="banheiros" class="label">Banheiros</label>
                            <select name="banheiros" id="banheiros" class="input inputMargin" required>
                                <option value="" disabled selected>Selecione...</option>
                                <option value="option1">Não possui</option>
                                <option value="option2">1 banheiro</option>
                                <option value="option3">2 banheiros</option>
                                <option value="option4">3 banheiros</option>
                                <option value="option5">4 banheiros</option>
                                <option value="option6">5 banheiros</option>
                                <option value="option7">6 banheiros</option>
                                <option value="option8">7 banheiros</option>
                                <option value="option9">8 banheiros</option>
                                <option value="option10">9 banheiros</option>
                                <option value="option11">10 banheiros</option>
                                <option value="option12">11 banheiros</option>
                                <option value="option13">12 banheiros</option>
                                <option value="option14">13 banheiros</option>
                                <option value="option15">14 banheiros</option>
                                <option value="option16">15 banheiros</option>
                                <option value="option17">16 banheiros</option>
                                <option value="option18">17 banheiros</option>
                                <option value="option19">18 banheiros</option>
                                <option value="option20">19 banheiros</option>
                                <option value="option21">20 banheiros</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <label for="vagas" class="label">Vagas</label>
                            <select name="vagas" id="vagas" class="input inputMargin" required>
                                <option value="" disabled selected>Selecione...</option>
                                <option value="option1">Não possui</option>
                                <option value="option2">1 vaga</option>
                                <option value="option3">2 vagas</option>
                                <option value="option4">3 vagas</option>
                                <option value="option5">4 vagas</option>
                                <option value="option6">5 vagas</option>
                                <option value="option7">6 vagas</option>
                                <option value="option8">7 vagas</option>
                                <option value="option9">8 vagas</option>
                                <option value="option10">9 vagas</option>
                                <option value="option11">10 vagas</option>
                                <option value="option12">11 vagas</option>
                                <option value="option13">12 vagas</option>
                                <option value="option14">13 vagas</option>
                                <option value="option15">14 vagas</option>
                                <option value="option16">15 vagas</option>
                                <option value="option17">16 vagas</option>
                                <option value="option18">17 vagas</option>
                                <option value="option19">18 vagas</option>
                                <option value="option20">19 vagas</option>
                                <option value="option21">20 vagas</option>
                            </select>
                        </div>
                      </div>
                      <div class="containerInputs containerInputMargin">
                        <div class="inputBox">
                            <label for="areaUtil" class="label">Área útil</label>
                            <input type="number" id="areaUtil" placeholder="Área útil em m²" class="input inputMargin" required>
                        </div>
                        <div class="inputBox">
                            <label for="areaTotal" class="label">Área total</label>
                            <input type="number" id="areaTotal" placeholder="Área total em m²" class="input inputMargin" required>
                        </div>
                        <div class="inputBox">
                            <label for="venda" class="label notRequired">Valor de venda</label>
                            <input type="text" id="venda" placeholder="R$ 000,00" class="input inputMargin valor">
                        </div>
                        <div class="inputBox">
                            <label for="locacao" class="label notRequired">Valor de locação</label>
                            <input type="text" id="locacao" placeholder="R$ 000,00" class="input inputMargin valor">
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
        let SPMaskBehavior = function (val) {
          return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
          onKeyPress: function(val, e, field, options) {
              field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };
        $('#telefone').mask(SPMaskBehavior, spOptions);
        $('.valor').mask('000.000.000.000.000,00', {reverse: true});
    </script>
  </body>
  </html>
