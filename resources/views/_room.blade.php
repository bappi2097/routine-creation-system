@extends('layouts.app')
@section('content')
<div class="mx-auto my-12 bg-white p-10 rounded-md">
    <div class="container">
        <form action="{{route('roomStore')}}" method="post">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="room_no">
                    Room No
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="room_no" id="room_no"
                    placeholder="Enter Room No." required>
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
                <button type="submit" class="bg-blue-400 text-white rounded-full py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>  
<div class="mx-auto my-12 bg-white p-10 rounded-md">
    <div class="container">  
        <form action="{{route('dayTimeStore')}}" method="post">
            @csrf        
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="free_days">Free Days</label>
                <select class="border border-gray-400 w-full" name="free_days[]" id="free_days" multiple required>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Sataurday">Sataurday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Sunday">Sunday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Monday">Monday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Tuesday">Tuesday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Wednesday">Wednesday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Thrusday">Thrusday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Friday">Friday</option>
                </select>
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="free_slot">
                    Free Slot
                </label>
                <div class="flex">
                    <input class="border border-gray-400 p-2 w-1/2" type="time" name="start" id="start"placeholder="Enter Time" required>
                    <label class="block mb-2 font-bold  text-xstext-gray-700 mr-2 ml-2" for="to">To</label>
                    <input class="border border-gray-400 p-2 w-1/2" type="time" name="end" id="end"placeholder="Enter Time" required>
                 </div>
                @error('free_slot')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded-full py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection