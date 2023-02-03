<div id="events-container" class="col-md-12">
            <h2>Últimos pedidos</h2>
            <p class="subtitle">Veja os pedidos dos últimos dias</p>

            <div id="cards-container" class="row">

                @foreach($products->slice(0, 4) as $product)
                    <div class="card col-md-3">
                        <div class="card-body">
                            <p class="card-date"></ion-icon>{{ date('d/m/Y', strtotime(($product->date)))}}</p>
                            <h5 class="card-title">
                            <ion-icon name="alert-circle-outline"></ion-icon>

                            @if($product->status == 1)
                              Fechado
                            @else
                                Aberto
                            @endif
                            </h5>
                            <p class="card-value"> R$ {{ $product -> value}},00</p>
                            <p class="card-name"></ion-icon> {{ $product -> name}}</p>
                        </div>
                    </div>
                @endforeach
                @if(count($products) == 0)
                    <p>Não há pedidos disponíveis</p>
                @endif
            </div>
       </div>
