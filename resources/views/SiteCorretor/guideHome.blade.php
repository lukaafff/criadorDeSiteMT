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
      <div class="back-img-solo">
        <div class="back-dark">
          <div class="info-header container">
            <p class="info-location">2195 SW 8th St, Miami, FL 33135, USA</p>
            <h1 class="info-title margin-info">Complex</h1>
            <p class="info-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates asperiores incidunt nostrum, illum sunt fuga illo, sint aliquid exercitationem dignissimos reprehenderit.</p>
            <p class="info-price margin-info">R$ 5000</p>
          </div>
        </div>
      </div>
      <div class="cont-form">
        <form class="form-search" action="">
          <div class="inputsInicial">
            <div class="flex-form-select">
              <div>
                <label for="">Pretensão</label>
                <div class="selectForm">
                  <p>Comprar</p>
                  <i class="fa-solid fa-chevron-down leftML-menu"></i>
                </div>
              </div>
              <ul class="listSelect">
                <li><a role="option" data-value="Comprar">Comprar</a></li>
                <li><a role="option" data-value="Alugar">Alugar</a></li>
                <li><a role="option" data-value="Vender">Vender</a></li>
              </ul>
            </div>
            <div class="flex-form-select">
              <div>
                <label for="">Tipo Imóvel</label>
                <div class="selectForm">
                  <p>Apartamento</p>
                  <i class="fa-solid fa-chevron-down leftML-menu"></i>
              </div>
            </div>
                <ul class="listSelect">
                  <li class="title-tipo-imovel">Residencial</li>
                  <li><a role="option" data-value="Apartamento">Apartamento</a></li>
                  <li><a role="option" data-value="Casa">Casa</a></li>
                  <li><a role="option" data-value="Chácara">Chácara</a></li>
                  <li><a role="option" data-value="Casa de Condomínio">Casa de Condomínio</a></li>
                  <li><a role="option" data-value="Flat">Flat</a></li>
                  <li><a role="option" data-value="Lote / Terreno">Lote / Terreno</a></li>
                  <li><a role="option" data-value="Sobrado">Sobrado</a></li>
                  <li><a role="option" data-value="Cobertura">Cobertura</a></li>
                  <li><a role="option" data-value="Kitnet">Kitnet</a></li>
                  <li><a role="option" data-value="Edifício Residencial">Edifício Residencial</a></li>
                  <li><a role="option" data-value="Loft">Loft</a></li>
                  <li><a role="option" data-value="Studio">Studio</a></li>
                  <li><a role="option" data-value="Casa de Vila">Casa de Vila</a></li>
                  <li><a role="option" data-value="Terreno em Condomínio">Terreno em Condomínio</a></li>
                  <li><a role="option" data-value="Vaga de Garagem">Vaga de Garagem</a></li>
                  <li><a role="option" data-value="Outros Imóveis">Outros Imóveis</a></li>
                  <li class="title-tipo-imovel">Comercial</li>
                  <li><a role="option" data-value="Consultório">Consultório</a></li>
                  <li><a role="option" data-value="Sala Comercial">Sala Comercial</a ></li>
                  <li><a role="option" data-value="Fazenda / Sítio">Fazenda / Sítio</a ></li>
                  <li><a role="option" data-value="Galpão / Depósito / Armazém">Galpão / Depósito / Armazém</a ></li>
                  <li><a role="option" data-value="Imóvel Comercial">Imóvel Comercial</a ></li>
                  <li><a role="option" data-value="Loja">Loja</a ></li>
                  <li><a role="option" data-value="Lote / Terreno">Lote / Terreno</a ></li>
                  <li><a role="option" data-value="Ponto Comercial">Ponto Comercial</a ></li>
                </ul>
            </div>
            <div class="input-search">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="search" placeholder="Pesquise Aqui...">
            </div>
            <div class="w-100">
              <button class="btnMore" type="button">Mais Filtros <i class="fa-solid fa-angles-down"></i></button>
            </div>
            <div class="w-100 desktop-btn-form">
              <input class="btnBuscar" type="submit" value="Encontrar Imóvel">
            </div>
          </div>
          <div class="moreList">
              <div class="flex-form-select">
                  <div class="selectForm">
                    <p>Preço de Venda</p>
                    <i class="fa-solid fa-chevron-down leftML-menu"></i>
                  </div>
                  <ul class="listSelect" >
                    <li><a role="option" data-value="Até 200.000">Até 200.000 </a></li>
                    <li><a role="option" data-value="De 200.000 até 400.000">De 200.000 até 400.000 </a></li>
                    <li><a role="option" data-value="De 400.000 até 600.000">De 400.000 até 600.000 </a></li>
                    <li><a role="option" data-value="De 600.000 até 800.000">De 600.000 até 800.000 </a></li>
                    <li><a role="option" data-value="De 800.000 até 1.000.000">De 800.000 até 1.000.000 </a></li>
                    <li><a role="option" data-value="De 1.000.000 até 2.000.000">De 1.000.000 até 2.000.000 </a></li>
                    <li><a role="option" data-value="De 2.000.000 até 4.000.000">De 2.000.000 até 4.000.000 </a></li>
                    <li><a role="option" data-value="De 4.000.000 até 6.000.000">De 4.000.000 até 6.000.000 </a></li>
                    <li><a role="option" data-value="De 6.000.000 até 8.000.000">De 6.000.000 até 8.000.000 </a></li>
                    <li><a role="option" data-value="Até 10.000.000">Até 10.000.000 </a></li>
                  </ul>
                </div>

              <div class="flex-form-select">
                <div class="selectForm">
                  <p>Quartos</p>
                  <i class="fa-solid fa-chevron-down leftML-menu"></i>
                </div>
                <ul class="listSelect ">
                  <li><a role="option" data-value="1+">1+</a></li>
                  <li><a role="option" data-value="2+">2+</a></li>
                  <li><a role="option" data-value="3+">3+</a></li>
                  <li><a role="option" data-value="4+">4+</a></li>
                  <li><a role="option" data-value="5+">5+</a></li>
                </ul>
              </div>
              <div class="flex-form-select newWidth-220">
                <div class="selectForm newWidth-220">
                  <p>Suites</p>
                  <i class="fa-solid fa-chevron-down leftML-menu"></i>
                </div>
                <ul class="listSelect">
                  <li><a role="option" data-value="1+">1+</a></li>
                  <li><a role="option" data-value="2+">2+</a></li>
                  <li><a role="option" data-value="3+">3+</a></li>
                  <li><a role="option" data-value="4+">4+</a></li>
                  <li><a role="option" data-value="5+">5+</a></li>
                </ul>
              </div>
              <div class="flex-form-select newWidth-119 ">
                <div class="selectForm newWidth-119">
                  <p>Vagas</p>
                  <i class="fa-solid fa-chevron-down leftML-menu"></i>
                </div>
                <ul class="listSelect">
                  <li><a role="option" data-value="1+">1+</a></li>
                  <li><a role="option" data-value="2+">2+</a></li>
                  <li><a role="option" data-value="3+">3+</a></li>
                  <li><a role="option" data-value="4+">4+</a></li>
                  <li><a role="option" data-value="5+">5+</a></li>
                </ul>
              </div>
              <div class="flex-form-select newWidth-160">
                <div class="selectForm newWidth-160">
                  <p>Área</p>
                  <i class="fa-solid fa-chevron-down leftML-menu"></i>
                </div>
                <ul class="listSelect">
                  <li><a role="option" data-value="Até 50 M²">Até 50 M²</a></li>
                  <li><a role="option" data-value="50 Até 75 M²">50 Até 75 M²</a></li>
                  <li><a role="option" data-value="75 Até 150 M²">75 Até 150 M²</a></li>
                  <li><a role="option" data-value="150 Até 200 M²">150 Até 200 M²</a></li>
                  <li><a role="option" data-value="200 Até 300 M²">200 Até 300 M²</a></li>
                  <li><a role="option" data-value="A partir de 300 M²">A partir de 300 M²</a></li>
                </ul>
              </div>
          </div>
          <div class="w-100 mobile-btn-form">
            <input class="btnBuscar" type="submit" value="Encontrar Imóvel">
          </div>
        </form>
      </div>
    </header>

    <main>
      <section class="container">
        <div class="info-destaque">
          <h1>Descubra Nossas Listagens Em Destaque</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptatibus!</p>
        </div>
        <div class="cardsFlex">
            <div class="card-anuncio">
              <div class="card-img">
                <a href="">
                  <img src="/img/exemploIMG.jpg" alt="">
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
                <div class="card-info-price pd-card">
                  <p>R$ 500.000,00 <span>Venda</span></p>
                  <p><span>Locação</span> R$ 5.000,00</p>
                </div>
              </div>
            </div>
            <div class="card-anuncio">
              <div class="card-img">
                <a href="">
                  <img src="/img/exemploIMG.jpg" alt="">
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
                <div class="card-info-price pd-card">
                  <p>R$ 500.000,00 <span>Venda</span></p>
                  <p><span>Locação</span> R$ 5.000,00</p>
                </div>
              </div>
            </div>
            <div class="card-anuncio">
              <div class="card-img">
                <a href="">
                  <img src="/img/exemploIMG.jpg" alt="">
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
                <div class="card-info-price pd-card">
                  <p>R$ 500.000,00 <span>Venda</span></p>
                  <p><span>Locação</span> R$ 5.000,00</p>
                </div>
              </div>
            </div>

            <div class="card-anuncio">
              <div class="card-img">
                <a href="">
                  <img src="/img/exemploIMG.jpg" alt="">
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
                <div class="card-info-price pd-card">
                  <p>R$ 500.000,00 <span>Venda</span></p>
                  <p><span>Locação</span> R$ 5.000,00</p>
                </div>
              </div>
            </div>
            <div class="card-anuncio">
              <div class="card-img">
                <a href="">
                  <img src="/img/exemploIMG.jpg" alt="">
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
                <div class="card-info-price pd-card">
                  <p>R$ 500.000,00 <span>Venda</span></p>
                  <p><span>Locação</span> R$ 5.000,00</p>
                </div>
              </div>
            </div>
            <div class="card-anuncio">
              <div class="card-img">
                <a href="">
                  <img src="/img/exemploIMG.jpg" alt="">
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
                <div class="card-info-price pd-card">
                  <p>R$ 500.000,00 <span>Venda</span></p>
                  <p><span>Locação</span> R$ 5.000,00</p>
                </div>
              </div>
            </div>

            <div class="card-anuncio">
              <div class="card-img">
                <a href="">
                  <img src="/img/exemploIMG.jpg" alt="">
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
                <div class="card-info-price pd-card">
                  <p>R$ 500.000,00 <span>Venda</span></p>
                  <p><span>Locação</span> R$ 5.000,00</p>
                </div>
              </div>
            </div>
            <div class="card-anuncio">
              <div class="card-img">
                <a href="">
                  <img src="/img/exemploIMG.jpg" alt="">
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
                <div class="card-info-price pd-card">
                  <p>R$ 500.000,00 <span>Venda</span></p>
                  <p><span>Locação</span> R$ 5.000,00</p>
                </div>
              </div>
            </div>
            <div class="card-anuncio">
              <div class="card-img">
                <a href="">
                  <img src="/img/exemploIMG.jpg" alt="">
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
                <div class="card-info-price pd-card">
                  <p>R$ 500.000,00 <span>Venda</span></p>
                  <p><span>Locação</span> R$ 5.000,00</p>
                </div>
              </div>
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
  </body>
  </html>
