<h1>Stazione di Lecco {{ now()->format('d/m/Y') }}</h1>
<a href="{{ route('index') }}">Torna alla home</a>
<hr>

<h2>Treni in partenza</h2>

<x-train-timetable :departingTrains="$departingTrains"/>
