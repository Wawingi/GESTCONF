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
                            <li class="breadcrumb-item active">Utilizadores</li>
                            <li class="breadcrumb-item active">Listar Utilizadores</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <br><br> 
        
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
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">  
                        <table id="paginationFullNumbers" class="table table-bordered" cellspacing="0" width="100%">
                            <thead id="cabecatabela">
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Utilizador</th>
                                    <th>Telefone</th>
                                    <th>Município</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->nome}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->telefone}}</td>
                                    <td>{{$user->municipio}}</td>
                                    <td>
                                        @if($user->estado==1)
                                            <a href='{{ url("modificarEstado/".base64_encode($user->id)."/0") }}' class="btn btn-sm btn-rounded btn-warning"><i class=" fas fa-lock-open mr-1"></i>Desactivar</a>
                                        @elseif($user->estado==0)
                                            <a href='{{ url("modificarEstado/".base64_encode($user->id)."/1") }}' class="btn btn-sm btn-rounded btn-success"><i class=" fas fa-lock-open mr-1"></i>Activar</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>                     
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<script>
    
</script>
@stop