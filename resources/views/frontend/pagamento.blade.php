@extends('templates.master', ['title' => 'Pagamento'])

@section('content')
<div class="box-login">
  <div class="container">
    <div class="row">
      <div class="login-form col-md-6 col-md-push-3">
        <h1>Escolha como deseja pagar</h1>
        <p>Escolha a melhor forma para você pagar. Lhe enviaremos a nota fiscal no e-mail.</p>

        <form action="">
          <div class="payment-options">
            <div class="row">
              <div class="col-md-6 b-r-1">
                <label><input type="radio" checked> Cartão de crédito (até 12x)</label>
              </div>
              <div class="col-md-6">
                <label><input type="radio"> Boleto bancário</label>
              </div>
            </div>
          </div>
          <div class="payment-form">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Nome do titular</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label for="">Número do cartão</label>
                  <input type="text" class="form-control" placeholder="0000 0000 0000 0000">
                </div>
              </div>
              <div class="col-md-4 form-inline">
                <div class="form-group form-inline">
                  <label for="">Vencimento</label>
                  <select class="form-control m-r-10">
                    <option value="">01</option>
                    <option value="">02</option>
                    <option value="">03</option>
                  </select>
                  <select class="form-control">
                    <option value="">2016</option>
                    <option value="">2017</option>
                    <option value="">2018</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Código seg.</label>
                  <input type="text" class="form-control" placeholder="3 dígitos">
                </div>
              </div>
            </div>
            <div class="row m-t-10">
              <div class="col-md-12">
                <img src="assets/images/cartao.png" alt="">
              </div>
            </div>
          </div>

          <button class="btn btn-primary btn-block btn-lg btn-alt">
            <i class="fa fa-check"></i>
            Começar a aprender
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection