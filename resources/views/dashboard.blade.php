@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 900px; margin: auto; padding: 40px 20px;">

    <h2 style="color: #007bff; margin-bottom: 15px; border-bottom: 2px solid #007bff; padding-bottom: 8px;">
        🏠 M'Rise Housing MIS Dashboard
    </h2>

    <div style="font-size: 16px; color: #333; margin-bottom: 30px;">
        👤 Welcome, <strong>{{ Auth::user()->name }}</strong> (<em>{{ Auth::user()->email }}</em>)
    </div>

    <div style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 40px;">
        <a href="{{ route('schemes.create') }}">
            <button style="padding: 12px 20px; background-color: #28a745; color: white; border: none; border-radius: 6px; font-weight: 500; cursor: pointer;">
                ➕ Add Housing Details
            </button>
        </a>

        <a href="{{ route('schemes.index') }}">
            <button style="padding: 12px 20px; background-color: #ffc107; color: white; border: none; border-radius: 6px; font-weight: 500; cursor: pointer;">
                📝 Edit Details
            </button>
        </a>

        <a href="{{ route('schemes.index') }}">
            <button style="padding: 12px 20px; background-color: #17a2b8; color: white; border: none; border-radius: 6px; font-weight: 500; cursor: pointer;">
                📋 View All Housing Details
            </button>
        </a>
    </div>

    <hr style="border-top: 2px solid #dee2e6; margin-bottom: 40px;">

    <div style="text-align: center; padding: 30px; background-color: #f8f9fa; border-radius: 8px;">
        <h4 style="margin-bottom: 10px;">🗺️ GIS Map of India</h4>
        <p style="color: #666;">Showing India location on map using Leaflet</p>

        <div id="india-map" style="height: 400px; border: 2px solid #ced4da; border-radius: 8px;"></div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var map = L.map('india-map').setView([22.9734, 78.6569], 5);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Add a click listener to get lat/lng
        map.on('click', function (e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;

            // Optionally, place a marker there
            L.marker([lat, lng]).addTo(map)
                .bindPopup("📍 Latitude: " + lat.toFixed(5) + "<br>📍 Longitude: " + lng.toFixed(5))
                .openPopup();

            // Log to console or fill a hidden input
            console.log("Lat:", lat, "Lng:", lng);

            // Optional: Set this in a form input
            // document.getElementById('lat').value = lat;
            // document.getElementById('lng').value = lng;
        });
    });
</script>

@endpush
