@extends('pdf.masterPDF')
@section('content')
<div>
    <h2 style="margin:200px 0px 0px 192px;color:red">{{$pessoa->id}}</h2>
    <h2 style="margin:0px 0px 0px 75px;color:red">{{$pessoa->nome}}</h2>
    <img style="margin:0px 0px 0px 95px" height="115px" width="115px" src="data:image/jpg;base64,{{$qrCode}}">
</div>
@stop