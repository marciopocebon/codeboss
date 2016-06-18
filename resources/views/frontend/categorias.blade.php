@extends('frontend.templates.master', ['title' => 'Categorias'])

@section('content')
<div class="box-categorias">
  <div class="container grid-4 grid-lg-md-3 grid-md-sm-2 grid-sm-1">
    <a href="{{ url('cursos') }}" class="curso">
      <div class="image">
        <img src="{{ asset('assets/images/frontend.png') }}" alt="">
      </div>
      <div class="info">
        <h2>Front-end</h2>
        <p>CSS, Javascript, Angular,</p>
        <p>React, Gulp, entre outros...</p>
      </div>
    </a>
    <a href="{{ url('cursos') }}" class="curso">
      <div class="image">
        <img src="{{ asset('assets/images/backend.png') }}" alt="">
      </div>
      <div class="info">
        <h2>Back-end</h2>
        <p>PHP, Ruby on Rails,</p>
        <p>Laravel, Node, entre outros...</p>
      </div>
    </a>
    <a href="{{ url('cursos') }}" class="curso">
      <div class="image">
        <img src="{{ asset('assets/images/mobile.png') }}" alt="">
      </div>
      <div class="info">
        <h2>Mobile</h2>
        <p>Ionic, Cordova, Phonegap,</p>
        <p>jQuery Mobile, entre outros...</p>
      </div>
    </a>
    <a href="{{ url('cursos') }}" class="curso">
      <div class="image">
        <img src="{{ asset('assets/images/design.png') }}" alt="">
      </div>
      <div class="info">
        <h2>Design & UX</h2>
        <p>UX, Photoshop, Sketch,</p>
        <p>Interfaces, E-mail, entre outros...</p>
      </div>
    </a>
    <a href="{{ url('cursos') }}" class="curso">
      <div class="image">
        <img src="{{ asset('assets/images/ecommerce.png') }}" alt="">
      </div>
      <div class="info">
        <h2>E-commerce</h2>
        <p>Magento, WooCommerce,</p>
        <p>Módulos, entre outros...</p>
      </div>
    </a>
    <a href="{{ url('cursos') }}" class="curso">
      <div class="image">
        <img src="{{ asset('assets/images/seo.png') }}" alt="">
      </div>
      <div class="info">
        <h2>SEO</h2>
        <p>Estrutura, semântica, elementos,</p>
        <p>padrões, entre outros...</p>
      </div>
    </a>
    <a href="{{ url('cursos') }}" class="curso">
      <div class="image">
        <img src="{{ asset('assets/images/infra.png') }}" alt="">
      </div>
      <div class="info">
        <h2>Infra</h2>
        <p>Amazon AWS, Digital Ocean,</p>
        <p>Ubuntu, Linux, entre outros...</p>
      </div>
    </a>
    <a href="{{ url('cursos') }}" class="curso">
      <div class="image">
        <img src="{{ asset('assets/images/business.png') }}" alt="">
      </div>
      <div class="info">
        <h2>Business</h2>
        <p>Trabalho remoto, marketing,</p>
        <p>agile, scrum, entre outros...</p>
      </div>
    </a>
  </div>
</div>
@endsection