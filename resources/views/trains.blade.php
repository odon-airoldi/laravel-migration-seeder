<h1>Trains</h1>

<hr>


@foreach ( $trains as $train )
    
    {{ $train['stazione_partenza'] }}<br>

@endforeach

<hr>


@foreach ( $departing_trains as $train )
    
    {{ $train['stazione_partenza'] }}<br>

@endforeach