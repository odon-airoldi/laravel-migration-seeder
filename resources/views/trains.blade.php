<h1>Stazione di Lecco</h1>
{{ now()->format('d/m/Y') }}
<hr>


@foreach ( $trains as $train )
    
    {{ $train['stazione_partenza'] }}<br>

@endforeach

<hr>

<h2>Treni in partenza</h2>
<ul>
@foreach ( $departing_trains as $train )
    
    <li>
        Destinazione: {{ $train->stazione_arrivo }}
        <ul>
            <li>Orario Partenza {{ $train->orario_partenza->format('H:i') }}</li>
            <li>Provenienza: {{ $train->stazione_partenza }}</li>
            <li>Codice {{ $train->codice_treno }}</li>
            <li>@if ( $train->treno_ritardo > 0) Ritardo {{ $train->treno_ritardo }}' @else In orario @endif</li>
            
        </ul>
    </li>

@endforeach
</ul>