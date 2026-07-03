Trains<br>

{{ $trains }}

<hr>


@foreach ( $trains as $train )
    
    {{ $train['stazione_partenza'] }}<br>

@endforeach