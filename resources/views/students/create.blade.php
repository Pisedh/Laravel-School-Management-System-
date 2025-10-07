@extends ('layout')
@section('content')

<div class="flex min-h-screen  justify-center items-center bg-gray-100 ">
<div class="bg-white max-w-2xl p-9 w-full ">
    <h1 class="text-2xl font-bold text-center">Student Form</h1>
    <form action="{{ route('students.store') }}" method="POST" class="p-4 ">
        @csrf
       
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        <div class="mb-4">
            <label  class="block text-sm font-medium text-gray-700">Gender</label>
            <div class="gap-6 flex items-center mt-2">
                <label class="flex items-center gap-2">
                    <input type="radio" name="gender" value="Male" required class="border-gray-300 rounded">
                    Male
                </label>
                <label class="">
                    <input type="radio" name="gender" value="Male" required class="border-gray-300 rounded">
                    Female
                </label>

            </div>
        </div>
        <div class="mb-4">
            <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
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
        <button type="submit" class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add Student</button>
    </form>
</div>
</div>
