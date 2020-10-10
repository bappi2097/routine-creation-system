@extends('layouts.app')
@section('content')
<div class="my-12">
    <form method="POST" action="{{route('routine-store')}}">
        @csrf
        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
            Generate Routine
        </button>
    </form>
</div>
<table class="table-auto border border-gray-400 bg-white">
    <thead>
        <tr>
            @foreach($slots as $slot)
                <th colspan="4" class="border border-gray-300 text-xs px-4 py-2"> {{ $slot->start }}-{{ $slot->end }}</th>
            @endforeach
        </tr>
        <tr>
            <th colspan="2" class="border text-xs border-gray-300 px-4 py-2">Class</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Course</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Teacher</th>
            <th colspan="2" class="border border-gray-300 text-xs px-4 py-2">Class</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Course</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Teacher</th>
            <th colspan="2" class="border border-gray-300 text-xs px-4 py-2">Class</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Course</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Teacher</th>
            <th colspan="2" class="border border-gray-300 text-xs px-4 py-2">Class</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Course</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Teacher</th>
            <th colspan="2" class="border border-gray-300 text-xs px-4 py-2">Class</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Course</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Teacher</th>
            <th colspan="2" class="border border-gray-300 text-xs px-4 py-2">Class</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Course</th>
            <th class="border border-gray-300 text-xs px-4 py-2">Teacher</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($routines as $index_day=>$day)
            <tr>
                <td class="border-0 px-4 py-6 bg-gray-200" colspan="24"></td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-center font-bold text-2xl" colspan="24">{{$index_day}}</td>
            </tr>
            @foreach ($day as $index_room=>$room)
                <tr>
                    @foreach ($room as $index_slot=>$slot)
                        <td class="border px-4 py-2"></td>
                        <td class="border px-4 text-xs py-2 {{$slot['color']}}">{{$index_room}}</td>
                        <td class="border px-4 text-xs py-2 {{$slot['color']}}">
                            {{$slot['course_code'] . $slot['section'] ."-". $slot['semester']}}</td>
                        <td class="border px-4 text-xs py-2 {{$slot['color']}}">{{$slot['teacher']}}</td>
                    @endforeach
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
@endsection