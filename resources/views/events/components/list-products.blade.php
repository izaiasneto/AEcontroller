<div class="col-md-10 offset-md-1 dashboard-events-container">
    <!-- Tabela -->
    @if(count($events) > 0)
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Status</th>
                <th scope="col">Data</th>
                <th scope="col">Nome do cliente</th>
                <th scope="col">Bairro</th>
                <th scope="col">Valor</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td scropt="row" id="id">{{ $event->id }}</td>
                    <td
                        id="status">
                        @if($event->status == 1)
                            Fechado
                        @else
                            Aberto
                        @endif
                    </td>
                    <td>{{ $event->date->format('d-m-Y')}}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->district }}</td>
                    <td>{{ $event->value }}</td>

                    <td>
                        <button type="button" class="showbtn btn btn-outline-info" value="{{ $event->id }}"><ion-icon name="eye-outline"></ion-icon></button>
                        <button type="button" class="editbtn btn btn-outline-warning" value="{{ $event->id }}"><ion-icon name="create-outline"></ion-icon></button>
                        <button type="button" class="deletebtn btn btn-outline-danger" value="{{ $event->id }}"><ion-icon name="trash-outline" ></ion-icon></button>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Você ainda não tem pedidos, <a href="/events/create">criar pedido</a></p>
    @endif
</div>
