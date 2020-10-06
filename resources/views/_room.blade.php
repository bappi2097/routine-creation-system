@extends('layouts.app')
@section('content')
<div class="mx-4 my-12 bg-white p-10 rounded-md page-content">
    <div class="container">
        <form action="{{route('roomStore')}}" method="post">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="room_no">
                    Room No
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="room_no" id="room_no"
                    placeholder="Enter your name" required>
                @error('room_no')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="room_type">Room Type</label>
                <select class="border border-gray-400 p-2 w-full" name="room_type" id="room_type" required>
                    <option class="py-1 border-b border-b-gray-300" value="Theory">Theory</option>
                    <option class="py-1 border-b border-b-gray-300" value="Lab">Lab</option>>
                </select>
                @error('room_type')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="free_days">Free Days</label>
                <select class="border border-gray-400 p-2 w-full" name="free_days[]" id="free_days" multiple required>
                    <option class="py-1 border-b border-b-gray-300" value="Sataurday">Sataurday</option>
                    <option class="py-1 border-b border-b-gray-300" value="Sunday">Sunday</option>
                    <option class="py-1 border-b border-b-gray-300" value="Monday">Monday</option>
                    <option class="py-1 border-b border-b-gray-300" value="Tuesday">Tuesday</option>
                    <option class="py-1 border-b border-b-gray-300" value="Wednesday">Wednesday</option>
                    <option class="py-1 border-b border-b-gray-300" value="Thrusday">Thrusday</option>
                    <option class="py-1 border-b border-b-gray-300" value="Friday">Friday</option>
                </select>
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="free_slot">
                    Free Slot
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="free_slot" id="free_slot"
                    placeholder="Enter your name" required>
                @error('free_slot')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection