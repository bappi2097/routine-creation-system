@extends('layouts.app')
@section('content')
<div class="mx-auto my-12 bg-white p-10 rounded-md">
    <div class="">
        <form action="{{route('dayStore')}}" method="post">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="days">Choose Days</label>
                <select class="border border-gray-400 w-full" name="days[]" id="days" multiple required>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Saturday">Saturday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Sunday">Sunday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Monday">Monday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Tuesday">Tuesday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Wednesday">Wednesday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Thrusday">Thrusday</option>
                    <option class="py-2 px-4 border-b border-b-gray-300" value="Friday">Friday</option>
                </select>
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