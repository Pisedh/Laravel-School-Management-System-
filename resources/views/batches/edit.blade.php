@extends ('layout')
@section('content')

<div class="flex justify-center items-center bg-gray-100 min-h-screen ">
<div class="max-w-2xl w-full bg-white p-9">
    <form action="{{url ('batches/' .$batches->id)}}" method="POST" class="p-4 ">
        <h1 class="text-center font-bold text-2xl">Edit Batches</h1>
        @csrf 
        @method('PATCH')
       
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700"></label>
            <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 ">
        </div>
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{$batches->name}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        <div class="mb-4">
            <label for="start_year" class="block text-sm font-medium text-gray-700">Start year</label>
            <input type="date" name="start_year" id="start_year" value="{{$batches->start_year}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        <div class="mb-4">
            <label for="end_year class="block text-sm font-medium text-gray-700">end_year</label>
            <input type="date" name="end_year" id="end_year" value="{{$batches->end_year}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        <div class="mb-4">
            <label for="program" class="block text-sm font-medium text-gray-700">Program</label>
            <input type="text" name="program" id="program" value="{{$batches->program}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        
        <button type="submit" class="inline-block px-4 py-2 bg-gray-500 text-white rounded hover:bg-black cursor-pointer">Update</button>
    </form>
</div>
</div>
</div>
@stop   