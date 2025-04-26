@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 900px; margin: auto; padding: 40px 20px;">

    <h2 style="color: #343a40; margin-bottom: 30px; border-bottom: 2px solid #007bff; padding-bottom: 10px;">📋 All Housing Schemes</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div style="padding: 12px 20px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 6px; margin-bottom: 25px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add New Scheme --}}
    <div style="margin-bottom: 30px; text-align: right;">
        <a href="{{ route('schemes.create') }}" 
           style="background-color: #28a745; color: white; padding: 10px 18px; border-radius: 6px; text-decoration: none; font-weight: 500; transition: background-color 0.3s;">
            ➕ Add New Housing Details
        </a>
    </div>

    {{-- Schemes List --}}
    @forelse($schemes as $scheme)
        <div style="box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); padding: 25px 20px; margin-bottom: 25px; background-color: #ffffff; border-left: 5px solid #007bff; border-radius: 8px;">
            <h3 style="margin-bottom: 10px; color: #007bff;">🏠 {{ $scheme->owner_name }}</h3>
            <p style="margin-bottom: 10px; color: #555;">{{ $scheme->description ?? 'No description available.' }}</p>
            <p style="margin-bottom: 10px;"><strong>👥 Number of people live:</strong> {{ $scheme->helping_people ?? 'N/A' }}</p>
            <p style="margin-bottom: 15px;"><strong>💰 Fund Usage (₹):</strong> {{ $scheme->fund_usage ?? 'N/A' }}</p>

            {{-- Action Buttons --}}
            <div>
                <a href="{{ route('schemes.edit', $scheme->id) }}" 
                   style="margin-right: 15px; color: #0069d9; text-decoration: none; font-weight: 500;">
                    ✏️ Edit
                </a>

                <form action="{{ route('schemes.destroy', $scheme->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            onclick="return confirm('Are you sure you want to delete this scheme?')" 
                            style="color: #dc3545; border: none; background: none; font-weight: 500; cursor: pointer;">
                        🗑 Delete
                    </button>
                </form>

                <a href="{{ route('schemes.map', $scheme->id) }}" 
                   style="margin-left: 20px; color: #218838; text-decoration: none; font-weight: 500;">
                    📍 View on Map
                </a>
            </div>
        </div>
    @empty
        <p style="text-align: center; color: #888;">No schemes available yet.</p>
    @endforelse

</div>
@endsection
