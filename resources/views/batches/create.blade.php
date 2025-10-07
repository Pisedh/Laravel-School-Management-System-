@extends ('layout')
@section('content')

<div class="flex min-h-screen  justify-center items-center bg-gray-100 ">
<div class="bg-white max-w-2xl p-9 w-full ">
    <h1 class="text-2xl font-bold text-center">Batch Form</h1>
    <form action="{{ route('batches.store') }}" method="POST" class="p-4 ">
        @csrf
       
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
       
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Course Name</label>
           <select name="course_name" id="course_name" class=" w-full p-3 block border border-gray-300 rounded-md shadow-sm ">
            @foreach ($courses as $id=>$name)
            <option value="{{$id}}">{{$name}}</option>
                
            @endforeach

           </select>
        </div>
        <div class="mb-4">
            <label for="start_year" class="block text-sm font-medium text-gray-700">Start year</label>
            <input type="date" name="start_year" id="start_year" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="end_year" class="block text-sm font-medium text-gray-700">End year</label>
            <input type="date" name="end_year" id="end_year" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="program" class="block text-sm font-medium text-gray-700">Program</label>
            <input type="text" name="program" id="program" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        
        <button type="submit" class="inline-block px-4 py-2 bg-gray-700  text-white rounded hover:bg-black">Add Batch</button>
    </form>
</div>
</div>
