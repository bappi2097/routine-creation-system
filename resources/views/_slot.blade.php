@extends('layouts.app')
@section('content')
<div class="mr-4 my-12 bg-white p-10 rounded-md page-content">
    <div class="container">
        <form action="{{route('slotStore')}}" method="post">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slot_type">Slot Type</label>
                <select class="border border-gray-400 p-2 w-full" name="slot_type" id="slot_type" required>
                    <option class="py-1 border-b border-b-gray-300" value="Summer">Summer</option>
                    <option class="py-1 border-b border-b-gray-300" value="Winter">Winter</option>>
                </select>
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="time">
                    Time
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="time" id="time"
                    placeholder="Enter Time" required>
                @error('time')
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