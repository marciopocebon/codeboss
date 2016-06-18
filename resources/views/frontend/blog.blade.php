@extends('frontend.templates.master', ['title' => 'Blog'])

@section('content')
<div class="box-header-title">
  <div class="container">
    <div class="has-search">
      <h1>Blog</h1>

      <form action="" method="get" id="search">
        <label for="s">
          <input type="search" name="s" id="s" placeholder="Busca...">
        </label>
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>

    <nav>
      <ul>
        <li class="active"><a href="">Todos os posts</a></li>
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

<div class="container container-blog">
  <p class="subtitle">Todos os posts</p>
  <div class="grid-3 grid-lg-md-2 grid-md-1">
    <article class="blog-item">
      <a href="#">
          <span class="image-container" style="background-image:url({{ asset('assets/images/post-example.jpg') }})"></span>
      </a>
      <div class="info">
        <header>
          <h1><a href="#">Why You Shouldn’t Be Scared of TypeScript</a></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
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
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
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
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
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
</div>
@endsection