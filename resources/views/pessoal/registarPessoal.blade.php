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
                            <li class="breadcrumb-item active">Registo de Participantes</li>
                            <li class="breadcrumb-item active">Registar Pessoal</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <br>        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body"> 
                        <!-- Registo de Imprensa e serviço--> 
                        <form id="formularioSalvarServicoImprensa" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label for="funcao">Tipo de Participante</label>
                                        <select onchange="mudarTipo()" id="tipo" name="tipo" class="custom-select custom-select-sm">
                                            <option value="1">Delegado</option>
                                            <option value="2">Imprensa</option>
                                            <option value="3">Serviço</option>
                                        </select>                                          
                                    </div>
                                </div>
                            </div>
                           
                            <div id="show_serv_impr" style="display:none">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="funcao">Nome</label>
                                            <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="Informe o nome">                                   
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="funcao">Contacto</label>
                                            <input type="number" class="form-control form-control-sm" name="telefone" id="telefone" placeholder="Informe o contacto telefónico">                                   
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="funcao">Proveniência</label>
                                            <input type="text" class="form-control form-control-sm" name="proveniencia" id="proveniencia" placeholder="Informe a proveniência">                                   
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-rounded"><i class="far fa-save"> Registar</i></button>
                                <button type="reset" class="btn btn-warning btn-rounded"><i class="far fa-window-close"> Limpar</i></button>
                            </div>
                        </form>
                        <!--Formulário Delegado-->
                        <form id="show_delegado" method="post" >
                            @csrf
                            <input type="hidden" id="tipo" name="tipo" value="1"/>
                            <div id="progressbarwizard">
                                <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                    <li class="nav-item">
                                        <a valor="1" href="#account-2" data-toggle="tab" class="nav-link mudarAba">
                                            <span class="number">1</span>
                                            <span class="d-none d-sm-inline">Dados Pessoais</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a valor="2" href="#profile-tab-2" data-toggle="tab" class="nav-link mudarAba">
                                            <span class="number">2</span>
                                            <span class="d-none d-sm-inline">Dados Adicionais</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a valor="3" href="#finish-2" data-toggle="tab" class="nav-link mudarAba">
                                            <span class="number">3</span>
                                            <span class="d-none d-sm-inline">Dados de Militância</span>
                                        </a>
                                    </li>
                                </ul>
                                            
                                <div class="tab-content b-0 pt-0 mb-0">
                                    <div id="bar" class="progress mb-3" style="height: 7px;">
                                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                                    </div>
                                   
                                    <!-- dados pessoais-->
                                    <div class="tab-pane" id="account-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label>Nome</label>
                                                    <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="Informe o nome">                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label>Sexo</label><br>
                                                    <div class="radio radio-info form-check-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" id="sexo" name="sexo" checked>
                                                        <label for="inlineRadio1"> Masculino </label>
                                                    </div>
                                                    <div class="radio form-check-inline">
                                                        <input type="radio" id="inlineRadio2" value="2" id="sexo" name="sexo">
                                                        <label for="inlineRadio2"> Feminino </label>
                                                    </div>                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label for="funcao">Estado Civil</label>
                                                    <select id="estado_civil" name="estado_civil" class="custom-select custom-select-sm">
                                                        <option value="1">Solteiro</option>
                                                        <option value="2">Casado</option>
                                                        <option value="3">Divorciado</option>
                                                        <option value="4">Viúvo</option>
                                                    </select>                                          
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label>B.I nº</label>
                                                    <input type="text" class="form-control form-control-sm" name="bilhete" id="bilhete" placeholder="Informe o número do BI">                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label>Data de nascimento</label>
                                                    <input type="date" class="form-control form-control-sm" name="data_nascimento" id="data_nascimento">                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label>Cartão Eleitoral</label>
                                                    <input type="text" class="form-control form-control-sm" name="cartao_eleitoral" id="cartao_eleitoral" placeholder="Informe o número do cartão">                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label>Grupo</label>
                                                    <input type="text" class="form-control form-control-sm" name="grupo" id="grupo" placeholder="Informe o número do cartão">                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <!-- dados profissionais-->
                                    <div class="tab-pane" id="profile-tab-2">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label for="funcao">Residente no Municipio</label>
                                                    <select id="municipio_actual" name="municipio_actual" class="custom-select custom-select-sm">
                                                        <option value="1">Belas</option>
                                                        <option value="2">Cacuaco</option>
                                                        <option value="3">Cazenga</option>
                                                        <option value="4">Icolo e Bengo</option>
                                                        <option value="5">Kilamba Kiaxi</option>
                                                        <option value="6">Luanda</option>
                                                        <option value="7">Quiçama</option>
                                                        <option value="8">Talatona</option>
                                                        <option value="9">Viana</option>
                                                    </select>                                          
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group mb-3">
                                                    <label>Telefone</label>
                                                    <input type="number" class="form-control form-control-sm" name="telefone" id="telefone" placeholder="Informe o contacto telefónico">                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label for="funcao">Habilitações</label>
                                                    <select id="habilitacoes" name="habilitacoes" class="custom-select custom-select-sm">
                                                        <option value="1">ANALFABETO</option>
                                                        <option value="2">ALFABETIZADO</option>
                                                        <option value="3">Iº CICLO - 7ª/9ª CLASSE</option>
                                                        <option value="4">IIº CICLO – 10ª/13ª CLASSE</option>
                                                        <option value="4">ENSINO SUPERIOR</option>
                                                    </select>                                          
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label>Profissão</label>
                                                    <input type="text" class="form-control form-control-sm" name="profissao" id="profissao" placeholder="Informe a profissão">                                   
                                                </div>
                                            </div>             
                                        </div>
                                    </div>

                                    <!-- dados militância -->
                                    <div class="tab-pane" id="finish-2">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label for="funcao">Municipio</label>
                                                    <select id="municipio_militancia" name="municipio_militancia" class="custom-select custom-select-sm">
                                                        <option value="1">Belas</option>
                                                        <option value="2">Cacuaco</option>
                                                        <option value="3">Cazenga</option>
                                                        <option value="4">Icolo e Bengo</option>
                                                        <option value="5">Kilamba Kiaxi</option>
                                                        <option value="6">Luanda</option>
                                                        <option value="7">Quiçama</option>
                                                        <option value="8">Talatona</option>
                                                        <option value="9">Viana</option>
                                                    </select>                                          
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label>Data de Ingresso</label>
                                                    <input type="date" class="form-control form-control-sm" name="data_ingresso" id="data_ingresso">                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label>Cartão Militante</label>
                                                    <input type="text" class="form-control form-control-sm" name="cartao_militante" id="cartao_militante">                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label>CAP nº</label>
                                                    <input type="text" class="form-control form-control-sm" name="cap" id="cap">                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label>Tempo de Militância</label>
                                                    <input type="number" class="form-control form-control-sm" name="tempo_militancia" id="tempo_militancia">                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-inline mb-0 wizard">
                                        <li class="previous list-inline-item">
                                            <button type="button" id="reduzirSteper" class="btn btn-rounded btn-secondary"><i class=" fas fa-arrow-left mr-1"></i>Anterior</button>
                                        </li>
                                        <li id="nextButton" class="next list-inline-item float-right">
                                            <a id="contarSteper" href="javascript: void(0);" class="btn btn-rounded btn-secondary">Próximo <i class=" fas fa-arrow-right"></i></a>
                                        </li>
                                        <li id="finishWizard" style="display:none" class="next list-inline-item float-right">
                                            <button class="btn btn-primary btn-rounded"><i class="far fa-save"> Registar</i></button> 
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<script>
    function mudarTipo(){
        var tipo=$('#tipo').val();

        if(tipo==2 ||tipo==3){
            document.getElementById("show_serv_impr").style.display = 'block';
            document.getElementById("show_delegado").style.display = 'none';
        }else{
            document.getElementById("show_serv_impr").style.display = 'none';
            document.getElementById("show_delegado").style.display = 'block';
        }
    }

    //Disable future date
    var today = new Date().toISOString().split('T')[0];
	document.getElementsByName("data_nascimento")[0].setAttribute('max', today);
	document.getElementsByName("data_ingresso")[0].setAttribute('max', today);

    //Secção do Form Wizard
    $(document).ready(function() {
        var cont=1;

        if(cont==1){
            $('#reduzirSteper').prop('disabled',true);
        }

        $('#contarSteper').click(function(){
            ++cont;
            if(cont==3){
                $('#nextButton').hide();
                $('#finishWizard').show();
            }
            if(cont>1&&cont<4){
                $('#reduzirSteper').prop('disabled',false);
            }            
        });
        $('#reduzirSteper').click(function(){
            --cont;
            if(cont<3){
                $('#nextButton').show();
                $('#finishWizard').hide();
            }  
            if(cont==1){
                $('#reduzirSteper').prop('disabled',true);
            }              
        });

        $('.mudarAba').click(function(){
            var valor = $(this).attr('valor');
            if(valor==1){
                $('#reduzirSteper').prop('disabled',true);
                $('#nextButton').show();
                $('#finishWizard').hide();
                cont=1;
            }
            if(valor==2){
                $('#reduzirSteper').prop('disabled',false);
                $('#nextButton').show();
                $('#finishWizard').hide();
                cont=2;
            }
            if(valor==3){
                $('#nextButton').hide();
                $('#finishWizard').show();
                $('#reduzirSteper').prop('disabled',false);
                cont=3;
            }
        });
    });

    $("#formularioSalvarServicoImprensa").validate({
        rules: {					
            nome: {
                required: true,
                pattern: /^[a-zA-ZáÁàÀçÇéÉèÈõÕóÓãÃúÚ\s]+$/
            },
            telefone: {
                required: true,
                minlength:9,
                maxlength:9
            },
            proveniencia: {
                required: true
            }
        },
        messages: {					
            nome: {
                required: "O nome deve ser fornecido.",
                pattern: "Informe um nome válido contendo apenas letras alfabéticas"
            },
            telefone: {
                required: "O número de telefone deve ser fornecido",
                minlength: "O tamanho mínimo deve ser 9 dígitos",
                maxlength: "O tamanho máximo deve ser 9 dígitos"
            },
            proveniencia: {
                required: "A proveniência deve ser fornecida"
            }                
        },
        
        //errorElement: "em",
        errorPlacement: function ( error, element ) {
            // Add the invalid-feedback` class to the error element
            //error.addClass( "invalid-feedback" );
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
        },
        
        submitHandler: function(formularioSalvarServicoImprensa,e){  			
            e.preventDefault();
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN':'<?php echo csrf_token() ?>'
                },
                url:"{{ url('registarPessoa') }}",
                method: "POST",
                data: $("#formularioSalvarServicoImprensa").serialize(),
                success:function(data){
                    if(data == 1){
                        Swal.fire({
                            text: "Registado com sucesso.",
                            icon: 'success',
                            timer:1500,
                            confirmButtonText: 'Fechar'
                        });

                        // $("#formularioSalvarServicoImprensa").trigger("reset");
                        //$('#formularioSalvarServicoImprensa [type=submit]').prop('disabled',true);
                       
                        location.reload();
                    }         
                },
                error: function(response){
					Swal.fire({
						text: 'Ocorreu um erro ao registar.',
						icon: 'error',
                        timer:1500,
						confirmButtonText: 'Fechar'
					})
                }
            });
        }            
    });

    $("#show_delegado").validate({
        rules: {					
            nome: {
                required: true,
                pattern: /^[a-zA-ZáÁàÀçÇéÉèÈõÕóÓãÃúÚ\s]+$/
            },
            data_nascimento: {
                required: true
            },
            telefone: {
                required: true,
                minlength:9,
                maxlength:9
            },
            profissao: {
                required: true,
            },
            data_ingresso: {
                required: true,
            }, 
            cartao_militante: {
                required: true,
            },
            cap: {
                required: true,
            },
            tempo_militancia: {
                required: true,
            }
            
        },
        messages: {					
            nome: {
                required: "O nome deve ser fornecido.",
                pattern: "Informe um nome válido contendo apenas letras alfabéticas"
            },
            telefone: {
                required: "O número de telefone deve ser fornecido",
                minlength: "O tamanho mínimo deve ser 9 dígitos",
                maxlength: "O tamanho máximo deve ser 9 dígitos"
            },
            data_nascimento: {
                required: "A data nascimento deve ser fornecida"
            },    
            profissao: {
                required: "A profissao deve ser informada",
            },       
            data_ingresso: {
                required: "A data ingresso deve ser fornecida"
            }, 
            cartao_militante: {
                required: "O cartao militante deve ser fornecido"
            }, 
            cap: {
                required: "Informe o CAP",
            },
            tempo_militancia: {
                required: "O tempo de militância deve ser fornecido",
            }               
        },
        
        //errorElement: "em",
        errorPlacement: function ( error, element ) {
            // Add the invalid-feedback` class to the error element
            //error.addClass( "invalid-feedback" );
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
        },
        
        submitHandler: function(show_delegado,e){  			
            e.preventDefault();
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN':'<?php echo csrf_token() ?>'
                },
                url:"{{ url('registarPessoa') }}",
                method: "POST",
                data: $("#show_delegado").serialize(),
                success:function(data){
                    if(data == 1){
                        Swal.fire({
                            text: "Registado com sucesso.",
                            icon: 'success',
                            timer:1500,
                            confirmButtonText: 'Fechar'
                        });

                        // $("#formularioSalvarServicoImprensa").trigger("reset");
                        //$('#formularioSalvarServicoImprensa [type=submit]').prop('disabled',true);
                       
                        location.reload();
                    }         
                },
                error: function(response){
					var erro='';
                    if( response.status === 422 ) {
                        $.each(response.responseJSON.errors,function(field_name,error){						
                            erro = error+' | '+erro
                        })
                        
                        Swal.fire({
                            text: erro,
                            icon: 'error',
                            confirmButtonText: 'Fechar'
                        })
                    }else{
                        Swal.fire({
                            text: 'Ocorreu um erro ao registar.',
                            icon: 'error',
                            confirmButtonText: 'Fechar'
                        })
                    }
                }
            });
        }            
    });
</script>
@stop