<table class="table-auto border border-gray-400 bg-white">
    <thead>
        <tr>
            <th class="border border-gray-300 px-4 py-2">SL.</th>
            <th class="border border-gray-300 px-4 py-2">Semester</th>
            <th class="border border-gray-300 px-4 py-2">Section</th>
            <th class="border border-gray-300 px-4 py-2">Students</th>
            <th class="border border-gray-300 px-4 py-2">CRE</th>
            <th class="border border-gray-300 px-4 py-2">Course Code</th>
            <th class="border border-gray-300 px-4 py-2">Course Name</th>
            <th class="border border-gray-300 px-4 py-2">A</th>
            <th class="border border-gray-300 px-4 py-2">B</th>
            <th class="border border-gray-300 px-4 py-2">C</th>
            <th class="border border-gray-300 px-4 py-2">D</th>
            <th class="border border-gray-300 px-4 py-2">E</th>
            <th class="border border-gray-300 px-4 py-2">F</th>
        </tr>
    </thead>
    <tbody>
        @foreach($routines as $index=>$routine)
        @foreach($routine->courses as $course_index=>$course)
        <tr>
            @if ($course_index==0)
            <td class="border px-4 py-2" rowspan="{{count($routine->courses)}}">
                {{ $index+1}}
            </td>
            <td class="border px-4 py-2" rowspan="{{count($routine->courses)}}">
                {{ $routine->semester}}
            </td>
            <td class="border px-4 py-2" rowspan="{{count($routine->courses)}}">
                @foreach ($routine->sections as $section)
                {{$section}} {{$loop->last ? '' : ','}}
                @endforeach
            </td>
            <td class="border px-4 py-2" rowspan="{{count($routine->courses)}}"> {{ $routine->number_of_student}}
            </td>
            @endif
            <td class="border px-4 py-2 {{$routine->color->code}}"> {{$course['credit']}} </td>
            <td class="border px-4 py-2 {{$routine->color->code}}"> {{$course['code']}} </td>
            <td class="border px-4 py-2 {{$routine->color->code}}"> {{$course['name']}} </td>
            @foreach ($course['teachers'] as $teacher)
            <td class="border px-4 py-2 {{$routine->color->code}}"> {{$teacher["initial"]}} </td>
            @endforeach
        </tr>
        @endforeach
        @endforeach
    </tbody>
</table>