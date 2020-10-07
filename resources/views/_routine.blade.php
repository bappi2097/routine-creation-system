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
            <th colspan="3" class="border border-gray-300 px-4 py-2">08.30-10.00</th>
            <th colspan="3" class="border border-gray-300 px-4 py-2">10.00-11.30</th>
            <th colspan="3" class="border border-gray-300 px-4 py-2">11.30-01.00</th>
            <th colspan="3" class="border border-gray-300 px-4 py-2">01.00-02.30</th>
            <th colspan="3" class="border border-gray-300 px-4 py-2">02.30-04.00</th>
            <th colspan="3" class="border border-gray-300 px-4 py-2">04.00-05.30</th>
        </tr>
        <tr>
            <th class="border border-gray-300 px-4 py-2">Class</th>
            <th class="border border-gray-300 px-4 py-2">Course</th>
            <th class="border border-gray-300 px-4 py-2">Teacher</th>
            <th class="border border-gray-300 px-4 py-2">Class</th>
            <th class="border border-gray-300 px-4 py-2">Course</th>
            <th class="border border-gray-300 px-4 py-2">Teacher</th>
            <th class="border border-gray-300 px-4 py-2">Class</th>
            <th class="border border-gray-300 px-4 py-2">Course</th>
            <th class="border border-gray-300 px-4 py-2">Teacher</th>
            <th class="border border-gray-300 px-4 py-2">Class</th>
            <th class="border border-gray-300 px-4 py-2">Course</th>
            <th class="border border-gray-300 px-4 py-2">Teacher</th>
            <th class="border border-gray-300 px-4 py-2">Class</th>
            <th class="border border-gray-300 px-4 py-2">Course</th>
            <th class="border border-gray-300 px-4 py-2">Teacher</th>
            <th class="border border-gray-300 px-4 py-2">Class</th>
            <th class="border border-gray-300 px-4 py-2">Course</th>
            <th class="border border-gray-300 px-4 py-2">Teacher</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border px-4 py-2">Class</td>
            <td class="border px-4 py-2">Course</td>
            <td class="border px-4 py-2">Teacher</td>
            <td class="border px-4 py-2">Class</td>
            <td class="border px-4 py-2">Course</td>
            <td class="border px-4 py-2">Teacher</td>
            <td class="border px-4 py-2">Class</td>
            <td class="border px-4 py-2">Course</td>
            <td class="border px-4 py-2">Teacher</td>
            <td class="border px-4 py-2">Class</td>
            <td class="border px-4 py-2">Course</td>
            <td class="border px-4 py-2">Teacher</td>
            <td class="border px-4 py-2">Class</td>
            <td class="border px-4 py-2">Course</td>
            <td class="border px-4 py-2">Teacher</td>
            <td class="border px-4 py-2">Class</td>
            <td class="border px-4 py-2">Course</td>
            <td class="border px-4 py-2">Teacher</td>
        </tr>
    </tbody>
</table>
@endsection