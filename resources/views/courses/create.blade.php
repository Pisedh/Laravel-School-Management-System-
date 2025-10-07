@extends ('layout')
@section('content')

<div class="flex justify-center items-center min-h-screen  bg-gray-100">
<div class="bg-white shadow-md rounded-2xl p-9 w-full  max-w-2xl">
    <h1 class="text-center font-bold text-2xl">Course Form</h1>
    


    <form action="{{ route('courses.store') }}" method="POST" class="p-4 ">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
       
        <div class="mb-4">
            <label for="code" class="block text-sm font-medium text-gray-700">Code</label>
            <input type="text" name="code" id="code" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" name="description" id="description" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="credits" class="block text-sm font-medium text-gray-700">Credit</label>
            <textarea name="credits" id="credits" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></textarea>
        </div>
        <button type="submit" class="inline-block px-4 py-2 bg-black text-white rounded hover:bg-gray-700">Add Course</button>
    </form>
</div>
</div>