@extends('layouts.app')

@section('content')
<div class="container max-w-xl mx-auto py-10">
    <h2 class="text-2xl font-bold text-blue-700 mb-6">👤 Edit Profile</h2>

    @if (session('status') === 'profile-updated')
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            ✅ Profile updated successfully!
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <div class="mb-4">
            <label for="name" class="block font-semibold mb-1">Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}"
                   class="w-full px-4 py-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block font-semibold mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}"
                   class="w-full px-4 py-2 border rounded" required>
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-black px-6 py-2 rounded">
            💾 Save Changes
        </button>
    </form>

    <hr class="my-6">

    <div>
        <h3 class="text-lg font-semibold text-red-600 mb-2">⚠️ Delete Account</h3>

        <form method="POST" action="{{ route('profile.destroy') }}" onsubmit="return confirm('Are you sure you want to delete your account?');">
            @csrf
            @method('DELETE')

            <div class="mb-4">
                <label for="password" class="block font-semibold mb-1">Confirm Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded" required>
            </div>

            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded">
                🗑️ Delete Account
            </button>
        </form>
    </div>
</div>
@endsection
