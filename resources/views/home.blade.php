@extends('layouts.app')

@section('content')
    <section>
        <div class="container pt-5">
            <h1>Lista treni</h1>
            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">Stazione di arrivo</th>
                        <th scope="col">Orario di partenza</th>
                        <th scope="col">Orario di arrivo</th>
                        <th scope="col">Codice Treno</th>
                        <th scope="col">Numero Carrozze</th>
                        <th scope="col">In orario</th>
                        <th scope="col">Cancellato</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td scope="row">{{ $train->azienda }}</td>
                                <td>{{ $train->stazione_di_partenza }}</td>
                                <td>{{ $train->stazione_di_arrivo }}</td>
                                <td>{{ $train->orario_di_partenza }}</td>
                                <td>{{ $train->orario_di_arrivo }}</td>
                                <td>{{ $train->codice_treno }}</td>
                                <td>{{ $train->numero_carrozze}}</td>
                                <td>{{ $train->in_orario  ? 'si' : 'no' }}</td>
                                <td>{{ $train->cancellato ? 'si' : 'no' }}</td>
                            </tr>  
                        @endforeach                     
                    </tbody>
                  </table>
            </div>
        </div>
    </section>
@endsection