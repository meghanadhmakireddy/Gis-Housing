@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 700px; margin: auto; padding: 40px 20px;">
    <h2 style="color: #007bff; margin-bottom: 30px; border-bottom: 2px solid #007bff; padding-bottom: 10px;">
        ✏️ Edit Housing Details
    </h2>

    <form action="{{ route('schemes.update', $scheme->id) }}" method="POST" style="background-color: #f8f9fa; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        @csrf
        @method('PUT')

        {{-- Owner Name --}}
        <div style="margin-bottom: 20px;">
            <label for="name" style="font-weight: bold;">🏷️ Owner Name:</label>
            <input type="text" name="owner_name" id="owner_name" value="{{ $scheme->owner_name }}" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        </div>

        {{-- Address --}}
        <div style="margin-bottom: 20px;">
            <label for="description" style="font-weight: bold;">📝 Address:</label>
            <textarea name="description" id="description" rows="4" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">{{ $scheme->description }}</textarea>
        </div>

        {{-- Number of People --}}
        <div style="margin-bottom: 20px;">
            <label for="helping_people" style="font-weight: bold;">👥 Number of people live:</label>
            <input type="number" name="helping_people" id="helping_people" value="{{ $scheme->helping_people }}" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        </div>

        {{-- Fund Usage --}}
        <div style="margin-bottom: 30px;">
            <label for="fund_usage" style="font-weight: bold;">💰 Fund Usage (₹):</label>
            <input type="number" name="fund_usage" id="fund_usage" value="{{ $scheme->fund_usage }}" step="0.01" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        </div>

        {{-- Latitude --}}
        <div style="margin-bottom: 20px;">
            <label for="latitude" style="font-weight: bold;">🌍 Latitude:</label>
            <input type="text" name="latitude" id="latitude" value="{{ $scheme->latitude }}" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        </div>

        {{-- Longitude --}}
        <div style="margin-bottom: 20px;">
            <label for="longitude" style="font-weight: bold;">🌍 Longitude:</label>
            <input type="text" name="longitude" id="longitude" value="{{ $scheme->longitude }}" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        </div>

      

        {{-- Action Buttons --}}
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ route('schemes.index') }}" style="color: #007bff; text-decoration: none;">⬅️ Back to List</a>
            <button type="submit" style="background-color: #007bff; color: white; padding: 12px 20px; border: none; border-radius: 6px; font-weight: 600; cursor: pointer;">
                💾 Update Details
            </button>
        </div>
    </form>
</div>
@endsection
