<div class="col-md-6 col-xl-3">
    <div class="card-box">
        <i class="fas fa-address-card font-24"></i>
        <h3 class="text-primary">{{$contDelegado}}</h3>
        <p class="text-uppercase mb-1 font-13 font-weight-medium">Total Delegados</p>
    </div>
</div>
<div class="col-md-6 col-xl-3">
    <div class="card-box">
        <i class="fas fa-tv font-24"></i>
        <h3 class="text-warning">{{$contImprensa}}</h3>
        <p class="text-uppercase mb-1 font-13 font-weight-medium">Total Imprensa</p>
    </div>
</div>
<div class="col-md-6 col-xl-3">
    <div class="card-box">
        <i class="fas fa-user-tie font-24"></i>
        <h3 class="text-success">{{$contServico}}</h3>
        <p class="text-uppercase mb-1 font-13 font-weight-medium">Total Serviços</p>
    </div>
</div>
<div class="col-md-6 col-xl-3">
    <div class="card-box">
        <i class="fas fa-users font-24"></i>
        <h3 class="text-dark">{{$contDelegado+$contImprensa+$contServico}}</h3>
        <p class="text-uppercase mb-1 font-13 font-weight-medium">Total Geral</p>
    </div>
</div>