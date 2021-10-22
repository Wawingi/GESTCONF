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
                            <li class="breadcrumb-item active">Presença</li>
                            <li class="breadcrumb-item active">Marcar Presença</li>
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
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">  
                        <form id="formularioPesquisar" method="post"> 
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label>Informe a Ordem</label>
                                        <input required type="number" class="form-control" name="numero_ordem" id="numero_ordem" placeholder="Nº Ordem">
                                    </div>
                                </div>
                            </div>
                            <button style="margin-left:50%" type="submit" class="btn btn-secondary btn-rounded waves-effect waves-light"><i class="mdi mdi-find mr-1"></i>Pesquisar</button>
                        </form> 
                        
                        <form id="formularioMarcarPresenca" style="display:none" action="{{url('#')}}" method="post"> 
                            @csrf
                            <div style="border:solid 1px red;background-color:#737373;color:#fff" class="row">
                                <div class="col-md-3">
                                    <label>Nº Ordem: </label>
                                </div>
                                <div class="col-md-2">
                                    <b><p id="show_id"></p></b>
                                    <label><input readonly id="ordem" name="ordem" type="hidden"></label>
                                </div>
                                <div class="col-md-2">
                                    <label>Nome:</label>
                                </div>
                                <div class="col-md-5">
                                    <b><p id="show_nome"></p></b>
                                </div>
                            </div>
                            <br>
                            <button style="margin-left:50%" type="submit" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="mdi mdi-content-save mr-1"></i>Marcar</button>
                        </form>     
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<script>
    
    $('#formularioPesquisar').submit(function(e){
        e.preventDefault();

        var request = new FormData(this);

        $.ajax({
            url:"{{ url('pesquisarPessoa') }}",
            method: "POST",
            data: request,
            contentType: false,
            cache: false,
            processData: false,
            success:function(data){
                $('#ordem').val(data.id);
                document.getElementById("show_id").innerHTML = data.id;
                document.getElementById("show_nome").innerHTML = data.nome;
                
                $('#formularioPesquisar').hide();           
                $('#formularioMarcarPresenca').show();           
            },
            error: function(e){
                
            }
        });
    });
</script>
@stop