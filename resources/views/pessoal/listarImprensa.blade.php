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
                            <li class="breadcrumb-item active">Listar Imprensa</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Listagem da Equipa de Imprensa</h4>
                </div>
            </div>
        </div>
        <br>        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body"> 
                    <table id="paginationFullNumbers" class="table table-bordered" cellspacing="0" width="100%">
                            <thead id="cabecatabela">
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Contacto</th>
                                    <th>Proveniência</th>
                                    <th width="15%"></th>
                                </tr>
                            </thead>
                            <tbody id="dataTable">
                                
                            </tbody>
                        </table>               
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<script>
    function carregarDataTable(){
        $.ajax({
            url: "{{ url('getPessoas') }}/2",
            method: "GET",
            success:function(data){
                $('#dataTable').html(data);
                $('#paginationFullNumbers').DataTable({
                    "pagingType": "full_numbers"
                });
            },
            error: function(e)
			{
				alert("erro ao carregar dados");
			}
        })
    }
    carregarDataTable();
</script>
@stop