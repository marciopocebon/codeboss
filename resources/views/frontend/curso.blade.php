@extends('frontend.templates.master', ['title' => 'Curso'])

@section('content')
<div class="box-cursos box-curso">
  <div class="container">
    <img src="{{ asset('assets/images/angular.png') }}" alt="">
    <h1>Angular: Iniciante</h1>
    <p>Entenda porquê o poderoso framework do Facebook já está no topo do mercado.</p>
    <div class="info">
      48h
      <span>Iniciante</span>
    </div>
    <a href="" class="btn btn-lg btn-alt btn-primary m-t-20">Matricule-se agora <i class="fa fa-graduation-cap"></i></a>
    <a href="" class="btn btn-lg btn-alt btn-default m-t-20 m-l-5">Código <i class="fa fa-github"></i></a>
  </div>
</div>

<div class="box-cursos box-aula">
  <div class="container-fluid">
    <div class="top">
      <ul>
        <li><a href="" class="btn btn-default btn-alt">Dúvidas <span class="hidden-xs">da aula</span> <i class="fa fa-question"></i> </a></li>
        <li><a href="" class="btn btn-default btn-alt btn-discussao">Discussão <span class="hidden-xs">do curso</span> <i class="fa fa-comments"></i> </a></li>
      </ul>
      <a href="" class="close"><i class="fa fa-remove"></i></a>
      <div class="clearfix"></div>
    </div>
    <iframe src="https://player.vimeo.com/video/49384334" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

    <div class="info">
      <div class="pull-left">
        <p>AngularJS: Iniciante</p>
        <h2>Estrutura de pastas</h2>
      </div>
      <div class="pull-right">
        <p>Iniciante</p>
        <time>18 min</time>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<div class="container">
  <ul class="info-curso">
    <li><i class="fa fa-user"></i> Apresentado por <strong>Diego Schell Fernandes</strong></li>
    <li><i class="fa fa-clock-o"></i> 180 minutos de curso</li>
    <li><i class="fa fa-file-text-o"></i> 3h de certificado</li>
  </ul>
</div>

<div class="box-aulas container">
  <div class="row">
    <div class="col-md-12">
      <ul class="list-aulas">
        <li class="header">
          Aulas
          <p class="pull-right">4/17 concluído</p>
        </li>
        <li class="watched">
          <a href="#">
            <i class="fa fa-check"></i> Introdução
            <span class="label label-primary m-l-10">Grátis</span>
            <time>18 min</time>
          </a>
        </li>
        <li class="modulo">
          Estrutura do projeto
          <p class="pull-right">2/3</p>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-play-circle"></i> Estrutura de pastas
            <span class="label label-primary m-l-10">Grátis</span>
            <time>14 min</time>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-play-circle"></i> Configuração Gulp e Git
            <time>10 min</time>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-play-circle"></i> Criando o app e entendo o Angular
            <time>25 min</time>
          </a>
        </li>
        <li class="modulo">
          Criando a aplicação
          <p class="pull-right">2/3</p>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-play-circle"></i> Primeiro controller
            <time>22 min</time>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-play-circle"></i> Service e directive
            <time>17 min</time>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-play-circle"></i> Views e snippets
            <time>19 min</time>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="box-discussao container">
  <h2>Discussão</h2>
  <p>Converse e discuta com outros integrantes do curso</p>
  <div class="comments">
    <form action="">
      <div class="form-group">
        <textarea class="text-editor" name="" placeholder="Deixe um comentário sobre o curso"></textarea>
      </div>
    </form>
    <ul class="comment-list">
      <li>
        <div class="comentario">
          <div class="row">
            <div class="img col-md-2 col-sm-3">
              <img src="{{ asset('assets/images/avatar1.png') }}" alt="">
            </div>
            <div class="col-md-10 col-sm-9">
              <div class="header">
                <strong>Diego Fernandes</strong>
                <time class="pull-right">3 meses atrás</time>
              </div>
              <div class="clearfix"></div>
              <div class="content">
                The spread operator is an ES6 feature, not a React feature. It's a direct way to access a collection as an iterable. So if you had an array like <pre><code>let myArray = [0, 1, 2, 3]</code></pre> you can access every element with the spread operator. <pre><code>console.log(...myArray)</code></pre> would output 0 1 2 3. <pre><code>Math.max(...myArray)</code></pre> would output 3. Please let me know if my explanation was any good.
              </div>
              <div class="content">
                <a href="" class="link-resposta">Responder</a>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="resposta">
        <div class="row">
          <div class="col-xs-10 col-xs-push-2">
            <div class="comentario">
              <div class="row">
                <div class="img col-md-2 col-sm-3">
                  <img src="{{ asset('assets/images/avatar2.png') }}" alt="">
                </div>
                <div class="col-md-10 col-sm-9">
                  <div class="header">
                    <strong>Seiton Clouza</strong>
                    <time class="pull-right">3 meses atrás</time>
                    <p>Em resposta a: Diego Fernandes</p>
                  </div>
                  <div class="clearfix"></div>
                  <div class="content">
                    The spread operator is an ES6 feature, not a React feature. It's a direct way to access a collection as an iterable. So if you had an array like <pre><code>let myArray = [0, 1, 2, 3]</code></pre>
                  </div>
                  <div class="content">
                    <a href="" class="link-resposta">Responder</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="resposta resposta-admin">
        <div class="row">
          <div class="col-xs-10 col-xs-push-2">
            <div class="comentario">
              <div class="row">
                <div class="img col-md-2 col-sm-3">
                  <img src="{{ asset('assets/images/avatar2.png') }}" alt="">
                  <p>
                    <span class="label label-default">Administrador</span>
                  </p>
                </div>
                <div class="col-md-10 col-sm-9">
                  <div class="header">
                    <strong>O Adm</strong>
                    <time class="pull-right">3 meses atrás</time>
                    <p>Em resposta a: Seiton Clouza</p>
                  </div>
                  <div class="clearfix"></div>
                  <div class="content">
                    The spread operator is an ES6 feature, not a React feature. It's a direct way to access a collection as an iterable. So if you had an array like <pre><code>let myArray = [0, 1, 2, 3]</code></pre>
                  </div>
                  <div class="content">
                    <a href="" class="link-resposta">Responder</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="comentario">
          <div class="row">
            <div class="img col-md-2 col-sm-3">
              <img src="{{ asset('assets/images/avatar3.png') }}" alt="">
            </div>
            <div class="col-md-10 col-sm-9">
              <div class="header">
                <strong>Diego Fernandes</strong>
                <time class="pull-right">3 meses atrás</time>
              </div>
              <div class="clearfix"></div>
              <div class="content">
                The spread operator is an ES6 feature, not a React feature. It's a direct way to access a collection as an iterable. So if you had an array like <pre><code>let myArray = [0, 1, 2, 3]</code></pre> you can access every element with the spread operator. <pre><code>console.log(...myArray)</code></pre> would output 0 1 2 3. <pre><code>Math.max(...myArray)</code></pre> would output 3. Please let me know if my explanation was any good.
              </div>
              <div class="content">
                <a href="" class="link-resposta">Responder</a>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
@endsection