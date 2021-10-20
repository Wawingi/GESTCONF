@foreach($delegados as $del)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$del->nome}}</td>
    <td>@if($del->sexo==1) Masculino @else Feminino @endif</td>
    <td>{{$del->cartao_militante}}</td>
    <td>{{$del->cap}}</td>
    <td>{{$del->tempo_militancia}} Anos</td>
    <td><a target="_blank" href='{{ url("gerarPasse/".base64_encode($del->id)) }}' class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-qrcode mr-1"></i>Gerar Pass</a></td>
</tr>
@endforeach