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
                            <li class="breadcrumb-item active">Registar Utilizador</li>
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
                        <form method="post" id="validarFormulario" action="{{ url('registarUtilizador') }}">
                            @csrf   
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group mb-3">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o nome">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label for="genero">Utilizador</label><br>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="ex: andre.jose">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label for="data_nascimento">Contacto</label>
                                        <input type="number" class="form-control" name="telefone" id="telefone">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label for="funcao">Municipio</label>
                                        <select id="municipio" name="municipio" class="custom-select">
                                            <option value="1">Belas</option>
                                            <option value="2">Cacuaco</option>
                                            <option value="3">Cazenga</option>
                                            <option value="4">Icolo e Bengo</option>
                                            <option value="5">Kilamba Kiaxi</option>
                                            <option value="6">Luanda</option>
                                            <option value="7">Quiçama</option>
                                            <option value="8">Talatona</option>
                                            <option value="9">Viana</option>
                                            <option value="10">Geral-CPPL</option>
                                        </select>                                          
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label for="funcao">Perfil</label>
                                        <select id="tipo" name="tipo" class="custom-select">
                                            <option value="1">Administrador</option>
                                            <option value="2">Operador</option>
                                        </select>                                          
                                    </div>
                                </div>   
                                <button class="btn btn-primary btn-rounded"><i class="far fa-save"> Registar</i></button>
                                <button type="reset" class="btn btn-warning btn-rounded"><i class="far fa-window-close"> Limpar</i></button>                  
                            </div>
                            <hr>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Fim do conteudo-->
    </div> 
</div>
<script>
    // Validação do formulário do funcionário
    $( "#validarFormulario").validate( {
		rules: {					
			nome: {
				required: true,
                pattern: /^[a-zA-ZáÁàÀçÇéÉèÈõÕóÓãÃúÚ\s]+$/
			},
			username: {
				required: true,
                pattern: /^[a-zA-ZáÁàÀçÇéÉèÈõÕóÓãÃúÚ\s]+[.]{1}[a-zA-ZáÁàÀçÇéÉèÈõÕóÓãÃúÚ\s]+$/,
			},
            telefone: {
				required: true,
                minlength:9,
                maxlength:9
			},
            municipio:{
                required: true,    
            },
            tipo:{
                required: true,    
            }
		},
		messages: {					
			nome: {
                required: "O nome deve ser fornecido.",
                pattern: "Informe um nome válido contendo apenas letras alfabéticas"
			},
			username: {
                required: "O nome de utilizador deve ser fornecido.",
                pattern: "O padrão do nome de utilizador está inválido."
			},
            telefone: {
				required: "O número do telefone deve ser fornecido",
                minlength: "O tamanho mínimo deve ser 9 dígitos",
                maxlength: "O tamanho máximo deve ser 9 dígitos"
			}
		},
		errorElement: "em",
		errorPlacement: function ( error, element ) {
			// Add the `invalid-feedback` class to the error element
			error.addClass( "invalid-feedback" );
			if ( element.prop( "type" ) === "checkbox" ) {
				error.insertAfter( element.next( "label" ) );
			} else {
				error.insertAfter( element );
			}
		},
		highlight: function ( element, errorClass, validClass ) {
			$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
		},
		unhighlight: function (element, errorClass, validClass) {
			$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
		}
    });    
</script>
@stop