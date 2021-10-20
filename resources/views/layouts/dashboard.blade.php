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
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div id="contadorEstatistica" class="row text-center mb-2">
            
        </div>
                
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                       
                    </div>
                </div>
            </div>
        </div>
        <!--Fim do conteudo-->
    </div> 
</div>
<script>
    //Secção do Form Wizard
    $(document).ready(function() {
        $.ajax({
            url: "{{ url('contadorEstatistica') }}",
            success:function(data){
                $('#contadorEstatistica').html(data);
            },
            error: function(e)
			{

			}
        })
    });
</script>
@stop