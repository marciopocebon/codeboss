@extends('frontend.templates.master', ['title' => 'Cadastro'])

@section('content')
<div class="box-login">
  <div class="container">
    <div class="row">
      <div class="login-form col-md-6 col-md-push-3">
        <h1>Falta pouco para você começar</h1>
        <p>Preencha seus dados e escolha um tipo de assinatura.</p>

        <form action="">
          <h2>Dados pessoais</h2>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nome completo">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Telefone para contato">
          </div>
          <h2 class="m-t-20">Assinatura</h2>
          <div class="planos row">
            <div class="col-md-4">
              <div class="box-plano">
                <label><input type="radio"> Sem assinatura</label>
                <p class="m-t-10 f-12">Os cursos são comprados separadamente</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-plano">
                <label><input type="radio"> 6 meses</label>
                <h3>R$500,00</h3>
                <ul class="vantagens">
                  <li>
                    <i class="fa fa-check"></i> 20 cursos
                  </li>
                  <li>
                    <i class="fa fa-check"></i> 243 exercícios
                  </li>
                  <li class="disabled">
                    <i class="fa fa-remove"></i> 15% desconto
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-plano">
                <label><input type="radio"> 1 ano</label>
                <h3>R$850,00</h3>
                <ul class="vantagens">
                  <li>
                    <i class="fa fa-check"></i> 20 cursos
                  </li>
                  <li>
                    <i class="fa fa-check"></i> 243 exercícios
                  </li>
                  <li>
                    <i class="fa fa-check"></i> 15% desconto
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <a href="{{ url('pagamento') }}" class="btn btn-primary btn-block btn-lg btn-alt">
            Prosseguir
            <i class="fa fa-caret-right"></i>
          </a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection