@extends ('layout')
@section('content')

<div class="flex justify-center items-center bg-gray-100 min-h-screen ">
<div class="max-w-2xl w-full bg-white p-9">
    <h1 class="text-center font-bold text-2xl">Edit Course</h1>
    <form action="{{url ('courses/' .$courses->id)}}" method="POST" class="p-4 ">
        @csrf 
        @method('PATCH')
       
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700"></label>
            <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 ">
        </div>
        <div class="mb-4">  
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{$courses->name}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        
        <div class="mb-4">
            <label for="code" class="block text-sm font-medium text-gray-700">Code</label>
            <input type="text" name="code" id="code" value="{{$courses->code}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" name="description" id="description" value="{{$courses->description}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="credits" class="block text-sm font-medium text-gray-700">Credits</label>
            <input type="text" name="credits" id="credits" value="{{$courses->credits}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></input>
        </div>
        <button type="submit" class="inline-block px-4 py-2 bg-black hover:bg-gray-500 text-white cursor-pointer rounded-xl  duration-200 transition w-full">Update</button>
    </form>
</div>
</div>
@stop   