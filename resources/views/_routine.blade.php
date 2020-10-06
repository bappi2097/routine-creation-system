@extends('layouts.app')
@section('content')
<div class="m-2">
    <form method="POST" action="/">
        @csrf
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Generate Routine
            </button>
        </div>
    </form>
</div>
@endsection