@extends('layouts.plantilla')

@section('style')
<link rel="stylesheet" href="{{ url('/css/carrusel.css') }}" />
@stop

@section('content')
  <!--INICA CARRUSEL -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="first-slide" src="{{ url('/img/banner/bg1.jpg') }}" alt="First slide">
        <div class="container">
          <div class="carousel-caption d-none d-md-block text-right">
            <h1>IBE - Orientación educativa.</h1>
            <p>“Nunca consideres el estudio como una obligación, sino como una oportunidad para penetrar en el bello y maravilloso mundo del saber”.- Albert Einstein</p>
            <p><a class="btn btn-lg btn-info" href="#" role="button">Ver vídeo</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="{{ url('/img/banner/bg2.jpg') }}" alt="Second slide">
        <div class="container">
          <div class="carousel-caption d-none d-md-block  text-right">
            <h1>Tus estudios.</h1>
            <p>Con IBE estamos dispuestos para ayudarte a elegir tus próximos estudios, aquí podrás obtener orientación, acompañamiento académico, educación complementaria, realizar pruebas vocacionales, escuchar opiniones y concepciones de la actualidad.</p>
            <p><a class="btn btn-lg btn-info" href="#" role="button">Servicios</a></p>
          </div>
      </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="{{ url('/img/banner/bg0.jpg') }}" alt="Third slide">
        <div class="container">
          <div class="carousel-caption d-none d-md-block text-right">
            <h1>¿Qué estudiar? ¿Qué hacer?</h1>
            <p>Hemos tomado tiempo, recursos y esfuerzo para que tengas una idea más aterrizada de la profesión que vas a elegir, así no perderás tiempo ni dinero a futuro.</p>
            <p><a class="btn btn-lg btn-info" href="#" role="button">Carreras</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--FIN CARRUSEL -->
@stop
