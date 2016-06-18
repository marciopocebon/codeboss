@extends('frontend.templates.master', ['title' => 'Página inicial'])

@section('content')
<section class="box-main">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-push-2 col-md-10 col-md-push-1">
        <h1>Decole seus conhecimentos web!</h1>
        <p>Dê um passo adiante com a <strong>codeboss</strong>. Cursos completos em video-aula com todas tecnologias web que o mercado está de olho.</p>
        <a href="#" class="btn btn-primary btn-lg btn-signin">Conheça nossos cursos <i class="fa fa-graduation-cap"></i></a>
      </div>
    </div>
  </div><!-- .container -->
</section><!-- .box-main -->

<section class="box-description">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-push-2">
        <p>
          Todos os cursos da <strong>codeboss</strong> são criados pensando no cenário atual de programação web, assim, os temas que são abordados nas aulas te preparam diretamente para o mercado de trabalho.
        </p>
      </div>
    </div>
  </div>
</section><!-- .box-description -->

<section class="box-testimonials" style="display:none">
  <div class="container">
    <h1>Quem já aprendeu, aprova!</h1>
    <div class="grid-3 grid-lg-1">
      <article class="comment">
        <img src="{{ asset('assets/images/avatar1.png') }}" alt="">
        <h2>Diego Fernandes</h2>
        <p class="small">28/05/2016</p>
        <p class="message">Molestiae, quas, magnam. Fuga dolorum praesentium temporibus.</p>
        <p class="course-about">Sobre o curso: <strong>ReactJS: iniciante</strong></p>
      </article>
      <article class="comment">
        <img src="{{ asset('assets/images/avatar2.png') }}" alt="">
        <h2>Cleiton Souza</h2>
        <p class="small">28/05/2016</p>
        <p class="message">Molestiae, quas, magnam. Fuga dolorum praesentium temporibus.</p>
        <p class="course-about">Sobre o curso: <strong>ReactJS: iniciante</strong></p>
      </article>
      <article class="comment">
        <img src="{{ asset('assets/images/avatar3.png') }}" alt="">
        <h2>Tua Mãe</h2>
        <p class="small">28/05/2016</p>
        <p class="message">Molestiae, quas, magnam. Fuga dolorum praesentium temporibus.</p>
        <p class="course-about">Sobre o curso: <strong>ReactJS: iniciante</strong></p>
      </article>
    </div>
  </div><!-- .container -->
</section><!-- .box-testimonials -->

<!-- blog posts -->
<section class="container container-blog" >
  <h1>Últimas do blog</h1>

  <div class="grid-3 grid-lg-1">
    <article class="blog-item">
      <a href="#">
          <span class="image-container" style="background-image:url({{ asset('assets/images/post-example.jpg') }})"></span>
      </a>
      <div class="info">
        <header>
          <h1><a href="#">Why You Shouldn’t Be Scared of TypeScript</a></h1>
        </header>
        <footer>
          <span>08/02/1995</span>
          <div class="tags">
            <a href="">es6</a>
            <a href="">javascript</a>
            <a href="">typescript</a>
          </div>
        </footer>
      </div>
    </article>
    <article class="blog-item">
      <a href="#">
          <span class="image-container" style="background-image:url({{ asset('assets/images/post-example.jpg') }})"></span>
      </a>
      <div class="info">
        <header>
          <h1><a href="#">Why You Shouldn’t Be Scared of TypeScript</a></h1>
        </header>
        <footer>
          <span>08/02/1995</span>
          <div class="tags">
            <a href="">es6</a>
            <a href="">javascript</a>
            <a href="">typescript</a>
          </div>
        </footer>
      </div>
    </article>
    <article class="blog-item">
      <a href="#">
          <span class="image-container" style="background-image:url({{ asset('assets/images/post-example.jpg') }})"></span>
      </a>
      <div class="info">
        <header>
          <h1><a href="#">Why You Shouldn’t Be Scared of TypeScript</a></h1>
        </header>
        <footer>
          <span>08/02/1995</span>
          <div class="tags">
            <a href="">es6</a>
            <a href="">javascript</a>
            <a href="">typescript</a>
          </div>
        </footer>
      </div>
    </article>
  </div>
</section>
@endsection