@extends('frontend.templates.master', ['title' => 'Cursos'])

@section('content')
<div class="box-header-title">
  <div class="container">
    <h1>Front-end</h1>

    <nav>
      <ul>
        <li class="active"><a href="">Todos os cursos</a></li>
        <li><a href="">CSS</a></li>
        <li><a href="">HTML</a></li>
        <li><a href="">Javascript</a></li>
        <li><a href="">Angular</a></li>
        <li><a href="">ReactJS</a></li>
        <li><a href="">ES6</a></li>
        <li><a href="">Automação</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="box-cursos-list container">
  <h2>Cursos de ReactJS</h2>

  <div class="grid-3 grid-md-sm-2 grid-sm-1">
    <a href="{{ url('curso') }}" class="curso">
      <img src="{{ asset('assets/images/react.png') }}" alt="">
      <h3>ReactJS: Iniciante</h3>
      <p>Estrutura de pastas, controllers, models, services e muito mais...</p>
      <div class="info hidden-xs">
        32h
        <span>Básico</span>
      </div>
    </a>

    <a href="{{ url('curso') }}" class="curso">
      <img src="{{ asset('assets/images/angular.png') }}" alt="">
      <h3>AngularJS: Iniciante</h3>
      <p>Estrutura de pastas, controllers, models, services e muito mais...</p>
      <div class="info hidden-xs">
        48h
        <span>Básico</span>
      </div>
    </a>

    <a href="{{ url('curso') }}" class="curso">
      <img src="{{ asset('assets/images/angular.png') }}" alt="">
      <h3>AngularJS: Intermediário</h3>
      <p>Estrutura de pastas, controllers, models, services e muito mais...</p>
      <div class="info hidden-xs">
        18h
        <span>Intermediário</span>
      </div>
    </a>
  </div>
</div>

<div class="box-cursos-list container">
  <h2>Cursos de AngularJS</h2>

  <div class="grid-3 grid-md-sm-2 grid-sm-1">
    <a href="{{ url('curso') }}" class="curso">
      <img src="{{ asset('assets/images/angular.png') }}" alt="">
      <h3>ReactJS: Iniciante</h3>
      <p>Estrutura de pastas, controllers, models, services e muito mais...</p>
      <div class="info hidden-xs">
        32h
        <span>Básico</span>
      </div>
    </a>
    <a href="{{ url('curso') }}" class="curso">
      <img src="{{ asset('assets/images/react.png') }}" alt="">
      <h3>AngularJS: Iniciante</h3>
      <p>Estrutura de pastas, controllers, models, services e muito mais...</p>
      <div class="info hidden-xs">
        48h
        <span>Básico</span>
      </div>
    </a>
    <a href="{{ url('curso') }}" class="curso">
      <img src="{{ asset('assets/images/angular.png') }}" alt="">
      <h3>AngularJS: Intermediário</h3>
      <p>Estrutura de pastas, controllers, models, services e muito mais...</p>
      <div class="info hidden-xs">
        18h
        <span>Intermediário</span>
      </div>
    </a>
  </div>
</div>
@endsection