@extends ('layout')
@section('content')

<div class="flex justify-center items-center min-h-screen  bg-gray-100">
<div class="bg-white shadow-md rounded-2xl p-9 w-full  max-w-2xl">
    <h1 class="text-center font-bold text-2xl">Teacher Form</h1>
    


    <form action="{{ route('teachers.store') }}" method="POST" class="p-4 ">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Gender</label>
            <div class="mt-2 flex items-center gap-6">
                <label class="flex items-center gap-2">
                    <input type="radio" name="gender" value="Male" required
                        class="border-gray-300 rounded">
                    Male
                </label>
                <label class="flex items-center gap-2">
                    <input type="radio" name="gender" value="Female" required
                        class="border-gray-300 rounded">
                    Female
                </label>
            </div>
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <textarea name="address" id="address" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></textarea>
        </div>
        <button type="submit" class="inline-block px-4 py-2 bg-black text-white rounded hover:bg-gray-700">Add Teacher</button>
    </form>
</div>
</div>