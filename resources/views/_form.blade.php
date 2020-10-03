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
    <table class="table-auto mx-auto bg-white">
        <thead>
            <tr>
                <th class="px-4 py-2">Semester</th>
                <th class="px-4 py-2">Section</th>
                <th class="px-4 py-2">CRE</th>
                <th class="px-4 py-2">Course Code</th>
                <th class="px-4 py-2">Course Name</th>
                <th class="px-4 py-2">A</th>
                <th class="px-4 py-2">B</th>
                <th class="px-4 py-2">C</th>
                <th class="px-4 py-2">D</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-4 py-2">Semester</td>
                <td class="border px-4 py-2">Section</td>
                <td class="border px-4 py-2">CRE</td>
                <td class="border px-4 py-2">Course Code</td>
                <td class="border px-4 py-2">Course Name</td>
                <td class="border px-4 py-2">A</td>
                <td class="border px-4 py-2">B</td>
                <td class="border px-4 py-2">C</td>
                <td class="border px-4 py-2">D</td>
            </tr>
        </tbody>
    </table>
</body>

</html>