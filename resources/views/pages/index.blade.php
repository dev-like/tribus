@extends('pages.base')

@section('body')
<script src="{{ asset('theme/js/lib/lightgallery.js') }}" charset="utf-8"></script>

@include('pages.partials._menu')
<section class="banner">
  <div class="banner-inner">

    <div class="container">
      <div class="row">
        <div class="col-md-6 bg">
          <a href="#" class="btn">KIT TRIBUS</a>
        </div>
        <div class="col-md-6 bg">
          <a href="#" class="btn">INSCRIÇÕES</a>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="conferencia">
  <div class="container">

    <h1>A CONFERÊNCIA TRIBUS</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with   desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

  </div>
</section>

<section class="ministrantes">
  <div class="container">

    <h1>MINISTRANTES</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

    <div class="row">
      <div class="circulo-dourado">
        <div class="img-ministrantes">
          <div class="ministrante">
            <div class="info">
              <h3>Nome do Palestrante</h3>
              <span>Aqui vai uma pequena <br> descrição sobre o palestrante</span>
            </div>
          </div>
        </div>
      </div>
      <div class="circulo-dourado">
        <div class="img-ministrantes">
          <div class="ministrante">
            <div class="info">
              <h3>Nome do Palestrante</h3>
              <span>Aqui vai uma pequena <br> descrição sobre o palestrante</span>
            </div>
          </div>
        </div>
      </div>
      <div class="circulo-dourado">
        <div class="img-ministrantes">
          <div class="ministrante">
            <div class="info">
              <h3>Nome do Palestrante</h3>
              <span>Aqui vai uma pequena <br> descrição sobre o palestrante</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="versiculo">
      <p>Mantenha Deus sempre no seu coração, mantendo-se seguro e confiante. <br> <b>Salmos 119:11</b> </p>
    </div>
  </div>
</section>

<section class="dnatribus" id="dnatribus">
  <div class="container">
    <div class="row">

      <div class="col-md-6 dna">

        <div class="cx-dna visao">
          <h3>VISÃO</h3>
          <p>
            Incendiar os corações por amor de Jesus dos jovens de Imperatriz e região
          </p>
        </div>

        <div class="cx-dna">
          <h3>MISSÃO</h3>
          <p>
            Criar uma cultura de adoração, evangelismo, leitura da palavra de Deus de
             uma forma intensa e vertical, gerando uma mudança no caráter, através de
            conferências, movimentos, reuniões, ações e na individualidade de cada um,
            sem descrição dos tipos de pessoas, mas sem esquecer os que curtem um
            estilo underground.
          </p>
        </div>

        <div class="cx-dna">
          <h3>VALORES</h3>
          <p>
            Ter Jesus no centro de tudo e de todos<br>
            Amar a Deus e as pessoas<br>
            Servir a Igreja e as pessoas<br>
            Viver baseado no nosso manual da vida que é a bíblia sagrada<br>
            Ter uma vida de oração e evangelismo<br>
            Criar conexões com pessoas com laços de amor<br>
          </p>
        </div>

      </div>

      <div class="col-md-6 imagem">
        <div class="bordar">

          <div class="img">

          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="galeria">
  <div class="container">
    <h1>GALERIA</h1>

      <div class="demo-gallery">
        <ul id="lightgallery" class="list-unstyled row">

            <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ asset('theme/imagens/galeria/1.jpg')}}">
                <a href="">
                    <img class="img-responsive" src="{{ asset('theme/imagens/galeria/1.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ asset('theme/imagens/galeria/2.jpg')}}">
                <a href="">
                    <img class="img-responsive" src="{{ asset('theme/imagens/galeria/2.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ asset('theme/imagens/galeria/3.jpg')}}">
                <a href="">
                    <img class="img-responsive" src="{{ asset('theme/imagens/galeria/3.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ asset('theme/imagens/galeria/4.jpg')}}">
                <a href="">
                    <img class="img-responsive" src="{{ asset('theme/imagens/galeria/4.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ asset('theme/imagens/galeria/5.jpg')}}">
                <a href="">
                    <img class="img-responsive" src="{{ asset('theme/imagens/galeria/5.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ asset('theme/imagens/galeria/6.jpg')}}">
                <a href="">
                    <img class="img-responsive" src="{{ asset('theme/imagens/galeria/6.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ asset('theme/imagens/galeria/7.jpg')}}">
                <a href="">
                    <img class="img-responsive" src="{{ asset('theme/imagens/galeria/7.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ asset('theme/imagens/galeria/8.jpg')}}">
                <a href="">
                    <img class="img-responsive" src="{{ asset('theme/imagens/galeria/8.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ asset('theme/imagens/galeria/9.jpg')}}">
                <a href="">
                    <img class="img-responsive" src="{{ asset('theme/imagens/galeria/9.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ asset('theme/imagens/galeria/10.jpg')}}">
                <a href="">
                    <img class="img-responsive" src="{{ asset('theme/imagens/galeria/10.jpg')}}">
                </a>
            </li>

        </ul>
      </div>

  </div>
</section>

@include('pages.partials._footer')
@endsection

@section('script')

<script src="{{ asset('theme/js/jquery-1.9.1.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('theme/js/lib/lightgallery-all.js') }}" charset="utf-8"></script>
@include('pages.partials._scripts')

<script>

    $(document).ready(function() {
        $("#lightgallery").lightGallery();
    });

$(document).ready(function(){

  $('section#dnatribus .cx-dna h3').click(function(){
    $(this).siblings('p').slideToggle('fast');
    $('.circle-plus').toggleClass('opened');
  });

});
</script>

@endsection
