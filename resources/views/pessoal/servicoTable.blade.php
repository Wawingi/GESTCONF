@foreach($servicos as $serv)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$serv->nome}}</td>
    <td>{{$serv->telefone}}</td>
    <td>{{$serv->proveniencia}}</td>
    <td><a href='{{ url("#") }}' class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-qrcode mr-1"></i>Gerar Pass</a></td>
</tr>
@endforeach