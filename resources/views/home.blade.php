@extends('layouts.app')
@section('content')
<div class="my-12 mx-auto bg-white p-10 rounded-md">
    <div class="">
        <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="routine">
                    Import Routine File
                </label>

                <input class="border border-gray-400 p-2 w-full" type="file" name="routine" id="routine"
                    placeholder="Enter Excel" required accept=".xlsx, .xls, .csv">
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@include('_allocation')
@endsection