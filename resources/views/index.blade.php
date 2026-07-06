<h1>Stazione di Lecco {{ now()->format('d/m/Y') }}</h1>
<a href="{{ route('departures') }}">Treni in partenza</a>
<hr>

<h2>Tutti i treni</h2>

<x-train-timetable :departingTrains="$allTrains"/>
