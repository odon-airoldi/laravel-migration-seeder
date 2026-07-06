<h1>Stazione di Lecco</h1>
{{ now()->format('d/m/Y') }}
<hr>


{{-- @foreach ( $trains as $train )
    
    {{ $train['stazione_partenza'] }}<br>

@endforeach --}}

<hr>

<h2>Treni in partenza</h2>


<x-train-timetable :departingTrains="$departingTrains"/>
