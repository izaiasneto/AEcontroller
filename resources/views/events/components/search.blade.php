<form class="search-container" type="get" action="{{ url('/products/search') }}" method="GET">
        <div class="row">
                <div class="col">
                    <input class="form-control" type="search" id="titulo" name="nome" placeholder="Procurar por nome do cliente"/>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success">Search</button>
                </div>
                <div class="col">
                    <select class="custom-select" name="bairro_id" id="cidade" onchange="this.form.submit()">
                        <option value="">Selecione um bairro</option>
                        @foreach($bairros as $bairro)
                            <option value="{{$bairro->district}}">{{$bairro->district}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <input type="date" class="form-control" id="data_id" name="data" onchange="this.form.submit()">
                </div>
        </div>
</form>
