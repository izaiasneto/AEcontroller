<div id="dashboard-container" class="col-md-12">
            <div id="res-container" class="row">
            <div class="res col-md-3">
                    <div class="res-body">
                        <h5 class="res-title">VALOR TOTAL</h5>
                        <p class="res-value"><spam>R$ </spam>{{$products->sum('value')}},00 </p>
                    </div>
            </div>

            <div class="res col-md-3">
                    <div class="res-body">
                        <h5 class="res-title">TOTAL DE PEDIDOS</h5>
                        <p class="res-value">{{ count($products) }} </p>
                    </div>
            </div>
            <div class="res col-md-3">
                    <div class="res-body">
                        <h5 class="res-title">BAIRRO MAIS PEDIDO</h5>
                        <p class="res-value">Bessa</p>
                    </div>
            </div>
</div>
