@extends('layouts.app')
@section('content')
<div class="mr-4 my-12 bg-white p-10 rounded-md page-content">
    <div class="container">
        <form action="{{route('teacherStore')}}" method="post">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="teacher_name">
                    Teacher Name
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="teacher_name" id="teacher_name"
                    placeholder="Enter Teacher Name" required>
                @error('teacher_name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="initial">
                    Teacher Initial
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="initial" id="initial"
                    placeholder="Enter Teacher Initial" required>
                @error('initial')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="off_days">Off Days</label>
                <select class="border border-gray-400 w-full" name="off_days[]" id="off_days" multiple required>
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
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection