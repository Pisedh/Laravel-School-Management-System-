@extends ('layout')
@section('content')

<div class="flex min-h-screen  justify-center items-center bg-gray-100 ">
<div class="bg-white max-w-2xl p-9 w-full ">
    <h1 class="text-2xl font-bold text-center">Enrollment Form</h1>
    <form action="{{ route('enrollments.store') }}" method="POST" class="p-4 ">
        @csrf
       
        <div class="mb-4">
            <label for="student_id" class="block text-sm font-medium text-gray-700">Student ID</label>
            <input type="text" name="student_id" id="student_id" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        <div class="mb-4">
            <label for="course_id" class="block text-sm font-medium text-gray-700">Course ID</label>
            <input type="text" name="course_id" id="course_id" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <input type="text" name="status" id="status" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        <div class="mb-4">
            <label for="fee" class="block text-sm font-medium text-gray-700">Fee</label>
            <input type="text" name="fee" id="fee" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        <div class="mb-4">
            <label for="join_date" class="block text-sm font-medium text-gray-700">Join Date</label>
            <input type="date" name="join_date" id="join_date" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        
        <button type="submit" class="inline-block px-4 py-2 bg-gray-700 text-white rounded hover:bg-black cursor-pointer">Add Enrollment</button>
    </form>
</div>
</div>
