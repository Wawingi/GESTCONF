@foreach($imprensas as $impr)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$impr->nome}}</td>
    <td>{{$impr->telefone}}</td>
    <td>{{$impr->proveniencia}}</td>
    <td><a target="_blank" href='{{ url("gerarPasse/".base64_encode($impr->id)) }}' class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-qrcode mr-1"></i>Gerar Pass</a></td>
</tr>
@endforeach