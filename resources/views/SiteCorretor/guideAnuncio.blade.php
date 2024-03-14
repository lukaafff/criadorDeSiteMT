{{-- TEM QUE REFATORAR PARA O BOOTSTRAP --}}

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guide Home - Anuncio</title>

    <link rel="stylesheet" href="/css/SiteCorretor/guideStandard.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideHome.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideAnuncio.css">
    <link rel="stylesheet" href="/css/SiteCorretor/guideContato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
</head>


<body>
    <header>
      <div class="navCont">
        <div class="container nav-bar-flex">
          <div>
            <a href="#">
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
              <li><a class="btn-prin" href="#">Cadastrar imóvel</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <main class="mar-b30">
        <section class="container info-inicial ">
            <div>
                <nav class="nav-breadcrumb">
                    <ol class="d-flex flex-1 breadcrumb">
                        <li class="line"><a href="#">Home</a></li>
                        <li class="line">Apartamento</li>
                        <li>Apartamento Barra</li>
                    </ol>

                    <ul class="d-flex btnsOpts">
                        <li><a id="like" href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li class="list-share"><a id="share" href="#"><i class="fa-regular fa-share-nodes"></i></a></li>
                        <li><a onclick="window.print()" href="#"><i class="fa-solid fa-print"></i></a></li>
                        <ul class="item-list-share">
                          <li><a href="#"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a></li>
                          <li><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                          <li><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                          <li><a href="#"><i class="fa-brands fa-pinterest-p"></i> Pinterest</a></li>
                          <li><a href="#"><i class="fa-brands fa-linkedin"></i> Linkedin</a></li>
                          <li><a href="#"><i class="fa-regular fa-envelope-open"></i> E-mail</a></li>
                        </ul>
                      </ul>
                    </nav>
            </div>
            <div class="section-mt-15">
                <div class="name-valor">
                    <h1>Apartamento Leve E Moderno</h1>
                    <p>R$ 4.500/mês</p>
                </div>
                <div class="spansInfo">
                    <span class="card-span-1">Apartamento</span>
                    <span class="card-span-2">Para Alugar</span>
                </div>
                <p class="endereco"><i class="fa-regular fa-map"></i>2436 SW 8th St, Miami, FL 33135, USA</p>
            </div>
        </section>
        <section class="container">
          <div class="flex-main-cont">
            <div class="col-8">
              <div class="areaSub">
               <div class="links-photo">
                <ul class="list-links-photo">
                  <li><a class="ativo" href="#"><i class="fa-regular fa-image"></i></a></li>
                  <li><a href="#"><i class="fa-solid fa-map"></i></a></li>
                  <li><a href="#"><i class="fa-solid fa-street-view"></i></a></li>
                </ul>
               </div>
                <div class="carousel main-carousel ">
                  <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                  <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                  <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                  <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                  <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                  <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                </div>
                <div class="carousel carousel-nav">
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/></div>
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/></div>
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/></div>
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/></div>
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/></div>
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/></div>
              </div>
              </div>
              <div class="mobile-info">
                <nav class="nav-mobile-info">
                  <ul class="d-flex">
                    <li><a class="ativo" href="#"><i class="fa-regular fa-image"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-map"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-street-view"></i></a></li>
                  </ul>
                  <ul class="d-flex">
                    <li><a id="like" href="#"><i class="fa-regular fa-heart"></i></a></li>
                    <li class="list-share"><a id="share" href="#"><i class="fa-regular fa-share-nodes"></i></a></li>
                    <ul class="item-list-share">
                      <li><a href="#"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a></li>
                      <li><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                      <li><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                      <li><a href="#"><i class="fa-brands fa-pinterest-p"></i> Pinterest</a></li>
                      <li><a href="#"><i class="fa-brands fa-linkedin"></i> Linkedin</a></li>
                      <li><a href="#"><i class="fa-regular fa-envelope-open"></i> E-mail</a></li>
                    </ul>
                  </ul>
                </nav>
                <div class="section-mt-15">
                  <div class="spansInfo">
                      <span class="card-span-1">Apartamento</span>
                      <span class="card-span-2">Para Alugar</span>
                  </div>
                  <div class="name-valor">
                      <h1>Apartamento Leve E Moderno</h1>
                    </div>
                    <p class="endereco"><i class="fa-regular fa-map"></i>2436 SW 8th St, Miami, FL 33135, USA</p>
                    <p>R$ 4.500/mês</p>
              </div>
              </div>
              <div class="cards-imovel mar-b30">
                <h2 class="title-card-imovel">Visão Geral</h2>
                <div class="grid-visao-geral">
                  <div>
                    <p class="prin-info-visao-geral">Apartamento</p>
                    <p class="sub-info-visao-geral">Tipo de Propriedade</p>
                  </div>
                  <div>
                    <p class="prin-info-visao-geral"><i class="fa-solid fa-bed fa-lg"></i> 3</p>
                    <p class="sub-info-visao-geral">Quartos de dormir</p>
                  </div>
                  <div>
                    <p class="prin-info-visao-geral"><i class="fa-solid fa-shower fa-lg"></i> 2</p>
                    <p class="sub-info-visao-geral">Banheiros</p>
                  </div>
                  <div>
                    <p class="prin-info-visao-geral"><i class="fa-solid fa-car fa-lg"></i> 1</p>
                    <p class="sub-info-visao-geral">Garagem</p>
                  </div>
                  <div>
                    <p class="prin-info-visao-geral"><i class="fa-solid fa-ruler fa-lg"></i> 2560</p>
                    <p class="sub-info-visao-geral">Pés quadrados</p>
                  </div>
                  <div>
                    <p class="prin-info-visao-geral"><i class="fa-solid fa-calendar fa-lg"></i> 2016</p>
                    <p class="sub-info-visao-geral">Ano de construção</p>
                  </div>
                </div>
              </div>
              <div class="cards-imovel descricao-section">
                <h2 class="title-card-imovel">Descrição</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis animi eligendi inventore impedit deleniti? Numquam quasi molestias accusamus laborum commodi, voluptatibus sapiente at voluptas, beatae ducimus id amet explicabo quibusdam.</p>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam accusantium sunt repellendus consectetur voluptatibus ut facere explicabo delectus dicta voluptates atque quaerat eos odit id, qui molestias. Ab, neque ullam.</p>
              </div>
              <section class="cards-imovel">
                <h2 class="title-card-imovel">Detalhes</h2>
                <ul class="detalhesList">
                  <li>Sacada</li>
                  <li>Salão de festas</li>
                  <li>Piscina Infantil Aberta</li>
                  <li>Brinquedoteca</li>
                  <li>Elevador</li>
                  <li>Playground</li>
                  <li>Salão de Jogos</li>
                  <li>Academia</li>
                  <li>Piscina Adulto Aberta</li>
                  <li>Sauna Úmida</li>
                </ul>
              </section>
              <section class="cards-imovel">
                <h2 class="title-card-imovel">Detalhes</h2>
                {{-- <div class="area-mapa">
                  <img src="https://i.ibb.co/nRNFfmW/map.png" alt="">
                </div> --}}
                <div class="containerMap">
                  <div id="map">
                    <button id="show-map-button">Ver Mapa</button>
                    <div id="mapOverlay"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.5028675323883!2d-80.18262022382248!3d25.85292180482829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b22c59057bf1%3A0x7977972d22752b33!2s774%20NE%2084th%20St%2C%20Miami%2C%20FL%2033138%2C%20EUA!5e0!3m2!1spt-BR!2sbr!4v1708100324802!5m2!1spt-BR!2sbr" style="border:0; display:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframeMapa iframeMapaCapa" id="iframeMapa"></iframe>
                    <img src="https://i.ibb.co/nRNFfmW/map.png" alt="" class="iframeMapa imgCapaMapa" id="iframeMapa">
                  </div>
                </div>
              </section>
              <section >
                <h2 class="title-card-imovel mt-listagem">Listagens Semelhantes</h2>
                <div class="listagem-anuncios">
                  <div class="card-anuncio">
                    <div class="card-img">
                      <a href="">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                      </a>
                      <span class="like"><i class="fa-regular fa-heart" style="color: #fff;"></i></span>
                    </div>
                    <div class="card-info">
                      <div class="pd-card">
                        <a href="">
                          <h3 class="card-info-title">Casa com 3 quartos a venda</h3>
                        </a>
                        <p class="card-info-localizacao">Jardim da Saúde - São Paulo</p>
                        <div class="info-icones">
                          <div class="flex-icones"><i class="fa-solid fa-bed" style="color: #636363;"></i><span>4</span></div>
                          <div class="flex-icones"><i class="fa-solid fa-shower" style="color: #636363;"></i></i><span>2</span></div>
                          <div class="flex-icones"><i class="fa-solid fa-car" style="color: #636363;"></i><span>1</span></div>
                          <div class="flex-icones"><i class="fa-solid fa-ruler" style="color: #636363;"></i><span>450</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-anuncio">
                    <div class="card-img">
                      <a href="">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                      </a>
                      <span class="like"><i class="fa-regular fa-heart" style="color: #fff;"></i></span>
                    </div>
                    <div class="card-info">
                      <div class="pd-card">
                        <a href="">
                          <h3 class="card-info-title">Casa com 3 quartos a venda</h3>
                        </a>
                        <p class="card-info-localizacao">Jardim da Saúde - São Paulo</p>
                        <div class="info-icones">
                          <div class="flex-icones"><i class="fa-solid fa-bed" style="color: #636363;"></i><span>4</span></div>
                          <div class="flex-icones"><i class="fa-solid fa-shower" style="color: #636363;"></i></i><span>2</span></div>
                          <div class="flex-icones"><i class="fa-solid fa-car" style="color: #636363;"></i><span>1</span></div>
                          <div class="flex-icones"><i class="fa-solid fa-ruler" style="color: #636363;"></i><span>450</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-4">
              <div class="card-corretor positionSticky">
                <div class="property-form">
                  <form>
                    <div class="">
                      <div class="card-perfil-corretor">
                        <div class="img-perfil-corretor">
                          <img src="/profile/0b7229c4961a539b9c1ec60dbb7cc92f3744caa3c75ffa9b69921cdb58625b86.jpg" alt="">
                        </div>
                        <div class="info-corretor">
                          <p class="nome"><i class="fa-regular fa-user"></i> Samuel Palmer</p>
                          <a class="listagem" href="#">Ver listagens</a>
                        </div>
                      </div>
                      <div>
                        <div class="form-msg">
                          <input type="text" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-msg">
                          <input type="text" name="celular" placeholder="Celular">
                        </div>
                        <div class="form-msg">
                          <textarea name="texto-msg" id="texto-msg" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="form-btn">
                        <button class="sendMsg">Enviar mensagem</button>
                        <button class="wpp"><i class="fa-brands fa-whatsapp"></i> Whatsapp</button>
                      </div>
                      <div class="mostraTelefone">
                        <p>Mostrar telefone</p>
                      </div>
                      <div>
                        <p>Código do imóvel: <span>485C</span></p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="contactar" id="elemento1">
          <button type="button" id="elemento1" class="btnForForm" data-button="submit">Enviar mensagem</button>
      </div>
      <div class="bg-modal">
        <div class="cont-modal">
          <div class="modal-anuncio">
            <div class="header-modal">
              <div class="info-header-modal">
                <div>
                  <img width="80" src="https://demo02.houzez.co/wp-content/uploads/2016/03/logo-houzez-white.png" alt="">
                </div>
                <ul class="links-modal">
                  <li>
                    <a href="#"><i class="fa-regular fa-heart"></i> Favoritar</a>
                  </li>
                  <li><a href="#"><i class="fa-regular fa-share-nodes"></i> Compartilhar</a></li>
                </ul>
              </div>
              <button class="close"><i class="fa-solid fa-xmark fa-lg"></i></button>
            </div>
            <div class="carousel-lista-modal">
              <div class="carousel carousel-modal">
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
                <div class="carousel-cell"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
              </div>
              <div class="mobileForm">
                <div class="card-corretor">
                  <div class="property-form">
                    <form>
                      <div class="">
                        <div class="card-perfil-corretor">
                          <div class="img-perfil-corretor">
                            <img src="/profile/0b7229c4961a539b9c1ec60dbb7cc92f3744caa3c75ffa9b69921cdb58625b86.jpg" alt="">
                          </div>
                          <div class="info-corretor">
                            <p class="nome"><i class="fa-regular fa-user"></i> Samuel Palmer</p>
                            <a class="listagem" href="#">Ver listagens</a>
                          </div>
                        </div>
                        <div>
                          <div class="form-msg">
                            <input type="text" name="nome" placeholder="Nome">
                          </div>
                          <div class="form-msg">
                            <input type="text" name="celular" placeholder="Celular">
                          </div>
                          <div class="form-msg">
                            <textarea name="texto-msg" id="texto-msg" rows="4"></textarea>
                          </div>
                        </div>
                        <div class="form-btn">
                          <button class="sendMsg">Enviar mensagem</button>
                          <button class="wpp"><i class="fa-brands fa-whatsapp"></i> Whatsapp</button>
                        </div>
                        <div class="mostraTelefone">
                          <p>Mostrar telefone</p>
                        </div>
                        <div>
                          <p>Código do imóvel: <span>485C</span></p>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Botão whatsapp --}}
      <div id="whatsapp">
        <a href="#" target="_blank" id="toggle1" class="whatsapp">
          <i class="fa-brands fa-whatsapp"></i>
        </a>
      </div>
    </main>
    <footer class="footer">
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
    <script type="text/javascript" src="/js/create-anuncio.js"></script>
      <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

      <script>
        var elem = document.querySelector('.main-carousel');
        var elem2 = document.querySelector('.carousel-nav');
        var elem3 = document.querySelector('.carousel-modal');

        var flkty = new Flickity( elem, {
          // options
          cellAlign: 'left',
          pageDots: 'false',
          contain: true
        });

        var flkty2 = new Flickity( elem2, {
          // options
          asNavFor: ".main-carousel",
           contain: true,
           cellAlign: 'left',
           prevNextButtons: false,
           pageDots: false
        });

        var flkty = new Flickity( elem3, {
          // options
          pageDots: 'false',
          cellAlign: 'left',
          contain: true
        });

      </script>

      <script>
        document.getElementById('show-map-button').addEventListener('click', function() {
          document.getElementById('mapOverlay').style.display = 'none';
          document.getElementById('show-map-button').style.display = 'none';
          document.querySelector('.imgCapaMapa').style.display = 'none';
          document.querySelector('.iframeMapaCapa').style.display = 'block';
        });
      </script>
  </body>
  </html>


