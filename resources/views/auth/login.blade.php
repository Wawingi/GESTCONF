@extends('layouts.app')
@section('content')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body p-4">
                        <form id="formularioLogar" method="post">
                            @csrf
                            <div class="text-center">
                                <h3><img height="100" src="{{url('images/logo.png')}}"></h3>
                            </div><br><br>
                                <img  id="logando" src="{{ url('images/loader.gif') }}"/>
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Username </label>
                                    <input class="form-control" name="username" type="text" id="username" required autofocus placeholder="Informe o username">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Senha</label>
                                    <input class="form-control" name="password" type="password" required id="senha" placeholder="Informe a senha">
                                </div>
                                <div style="color:red;text-align:center" id="errorLogar"></div>
                                <br>
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In   <i class="fas fa-arrow-right"></i></button>
                                </div>
                            <div class="text-center">
                                <h5><a href="#" class=" ml-1">Esqueceu a sua senha?</a></h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#formularioLogar').submit(function(e){
        e.preventDefault();
        var request = new FormData(this);
        $('#logando').show();
        $.ajax({
            url:"{{ url('logar') }}",
            method: "POST",
            data: request,
            contentType: false,
            cache: false,
            processData: false,
            success:function(data){
                $('#logando').hide();
                if(data == 1){
                    location.href="dashboard";
                }else{
                    document.getElementById("email").style.border = "1px solid red";
                    document.getElementById("senha").style.border = "1px solid red";
                    document.getElementById("errorLogar").innerHTML = "Erro ao efectuar o login, verifique o email ou a senha.";
                }
            },
            error: function(e){
                $('#logando').hide();
                alert('Erro ao logar');
            }
        });
    });
</script>
@endsection
