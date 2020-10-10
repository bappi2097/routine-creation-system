@extends('layouts.app')
@section('content')
<div class="mx-auto my-12 bg-white p-10 rounded-md">
    <div class="container">
        <form action="{{route('roomStore')}}" method="post">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="number">
                    Room No
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="number" id="number"
                    placeholder="Enter Room No." required>
                @error('number')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="type">Room Type</label>
                <select class="border border-gray-400 p-2 w-full" name="type" id="type" required>
                    <option class="py-1 border-b border-b-gray-300" value="1" selected>Theory</option>
                    <option class="py-1 border-b border-b-gray-300" value="0">Lab</option>>
                </select>
                @error('type')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>


<div class="mx-auto my-12 bg-white p-10 rounded-md">
    <div class="container">
        <form action="{{route('daySlotStore')}}" method="post">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="room">Room</label>
                <select class="p-2 border border-gray-400 w-full" name="room" id="room" required>
                    <option class="border-b border-b-gray-300" selected> Choose Room </option>
                    @foreach ($rooms as $room)
                    <option class="border-b border-b-gray-300" value="{{$room->number}}">
                        {{$room->number}}{{$room->type ? "" : " - Lab"}}
                    </option>
                    @endforeach
                </select>
                @error('room')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex">
                <div class="mb-6 w-1/2 mr-8">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="days">Days</label>
                    <select class="border border-gray-400 w-full" name="days[]" id="days" multiple>
                        @foreach ($days as $day)
                        <option class="py-2 px-4 border-b border-b-gray-300" value="{{$day->day}}">{{$day->day}}
                        </option>
                        @endforeach
                    </select>
                    @error('days')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 w-1/2">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slots">Slot</label>
                    <select class="border border-gray-400 w-full" name="slots[]" id="slots" multiple>
                        @foreach ($slots as $slot)
                        <option class="py-2 px-4 border-b border-b-gray-300" value="{{$slot->title}}">Slot
                            {{$slot->title}}
                        </option>
                        @endforeach
                    </select>
                    @error('slots')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection