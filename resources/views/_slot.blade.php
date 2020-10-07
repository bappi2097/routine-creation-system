@extends('layouts.app')
@section('content')
<div class="mx-auto my-12 bg-white p-10 rounded-md">
    <div class="container">
        <form action="{{route('slotStore')}}" method="post">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 font-bold textl-g text-gray-700" for="slot_cat">Select Slot</label>
                <select class="border border-gray-400 p-2 w-full" name="slot_cat" id="slot_cat" required>
                    <option class="py-1 border-b border-b-gray-300" value="Slot A">Slot A</option>
                    <option class="py-1 border-b border-b-gray-300" value="Slot B">Slot B</option>
                    <option class="py-1 border-b border-b-gray-300" value="Slot C">Slot C</option>
                    <option class="py-1 border-b border-b-gray-300" value="Slot D">Slot D</option>
                    <option class="py-1 border-b border-b-gray-300" value="Slot E">Slot E</option>
                    <option class="py-1 border-b border-b-gray-300" value="Slot F">Slot F</option>
                </select>
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="time">
                    Time
                </label>
                <div class="flex">
                    <input class="border border-gray-400 p-2 w-1/2" type="time" name="start" id="start"placeholder="Enter Time" required>
                    <label class="block mb-2 font-bold  text-xstext-gray-700 mr-2 ml-2" for="to">To</label>
                    <input class="border border-gray-400 p-2 w-1/2" type="time" name="end" id="end"placeholder="Enter Time" required>
                 </div>
                @error('time')
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