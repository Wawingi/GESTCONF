@extends('layouts.inicio')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">GEST-CONFERÊNCIA</a></li>
                            <li class="breadcrumb-item active">Meu Perfil</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <br><br> 

        <!-- mensagens de validação de erros -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Alerta de inserção sucesso -->
        @if(session('info'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sucesso!</strong>
                    {{ session('info')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <!-- Alerta de inserção sucesso -->
        @if(session('error'))
            <div class="alert alert-error alert-dismissible fade show" role="alert">
                <strong>Sucesso!</strong>
                    {{ session('info')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
        <!-- Inclusão da Modal -->
        @include('pages.modalTrocarSenha')
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">  
                        
                        <div class="card-box" style="text-align: center">
                            <h4><i class="mdi mdi-account-badge-horizontal"></i> MEU PERFIL</h4> 
                            <hr id="Linha"><br><br> 
                            <div class="row">
                                <div class="col-5">
                                    <img src="images/users/user.jpg" alt="user-image" width="120px" height="120px" class="rounded-circle" style="border: 1px solid rgb(108, 117, 125);">
                                </div> 
                                <div class="col-7">
                                    <p><i class="mdi mdi-account-circle-outline"></i> {{Auth::user()->nome}}</p> 
                                    <p><i class="mdi mdi-shield-account"></i>{{Auth::user()->username}}</p> 
                                    <p><i class="mdi mdi-phone"></i> {{Auth::user()->telefone}}</p> 
                                    <a href="#" class="btn btn-sm btn-warning btn-rounded waves-effect waves-light btn-rounded" data-toggle="modal" data-target="#modalAlterar" data-backdrop="static" data-keyboard="false"><i class="fas fa-user-lock mr-1"></i>Alterar Senha</a> 
                                </div>
                            </div> 
                            <br>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<script>
    
</script>
@stop