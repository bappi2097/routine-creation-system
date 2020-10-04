<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div class="w-1/2 m-auto my-12 bg-white p-10 rounded-md">
        <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="routine">
                    Import Routine File
                </label>

                <input class="border border-gray-400 p-2 w-full" type="file" name="routine" id="routine"
                    placeholder="Enter Excel" required accept=".xlsx, .xls, .csv">
                @error('routine')
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
    <form action="{{route('create')}}" method="get">
    <table class="table-auto mx-auto bg-white">
        <thead>
            <tr>
                <th class="px-4 py-2">Semester</th>
                <th class="px-4 py-2">Section</th>
                <th class="px-4 py-2">CRE</th>
                <th class="px-4 py-2">Course Code</th>
                <th class="px-4 py-2">Course Name</th>
    
            </tr>
        </thead>
        <tbody>
        @foreach($routines as $routine)
            <tr>
                <td class="border px-4 py-2">{{ $routine->semester}}</td>
                <td class="border px-4 py-2">{{ $routine->semester}}</td>
                @foreach($routine->courses as $course)
                    <td class="border px-4 py-2">{{$course['credit']}}</td>
                    <td class="border px-4 py-2">{{$course['code']}}</td>
                    <td class="border px-4 py-2">{{$course['name']}}</td>
                @endforeach
            </tr>
        @endforeach 
        </tbody>
    </table>
    </form>
</body>

</html>