<ul>
@foreach ( $departingTrains as $train )
    
    <li>
        Destinazione: {{ $train->stazione_arrivo }}
        <ul>
            <li>Data partenza {{ $train->orario_partenza->format('d/m/Y') }}</li>
            <li>Orario Partenza {{ $train->orario_partenza->format('H:i') }}</li>
            <li>Provenienza: {{ $train->stazione_partenza }}</li>
            <li>Codice {{ $train->codice_treno }}</li>
            <li>@if ( $train->treno_ritardo > 0) Ritardo {{ $train->treno_ritardo }}' @else In orario @endif</li>
            
        </ul>
    </li>

@endforeach
</ul>