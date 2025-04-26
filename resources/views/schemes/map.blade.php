@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="margin-top: 25px">🗺️ Location for: {{ $scheme->owner_name }} House</h3>

    <div id="map" style="height: 400px; margin-top: 20px;"></div>

    <a href="{{ route('schemes.index') }}" style="margin-top: 15px; display: inline-block;">⬅️ Back to All Schemes</a>
</div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    const map = L.map('map').setView([{{ $scheme->latitude }}, {{ $scheme->longitude }}], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    L.marker([{{ $scheme->latitude }}, {{ $scheme->longitude }}])
        .addTo(map)
        .bindPopup("<strong>{{ $scheme->owner_name }}</strong><br>{{ $scheme->description }}<br>{{$scheme->latitude}}<br>{{$scheme->longitude}}")
        .openPopup();
</script>
@endsection
