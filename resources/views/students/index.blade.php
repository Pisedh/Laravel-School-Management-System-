@extends('layout')

@section('content')
<div class="overflow-x-auto bg-white shadow-md rounded-2xl">
  
    <table class="min-w-full divide-y divide-gray-200 ">
        
        <h1 class="text-2xl font-bold mt-4 text-center">Student List</h1>

        <thead class="bg-gray-50 ">
            {{-- create button add student --}}
            <a href="{{ route('students.create') }}"
             class="inline-block mb-4 px-2 py-2 bg-gray-500 text-white rounded hover:bg-black ml-5">Add Student</a>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Gender</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Date of Birth</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($students as $student)
                <tr>
                    <td class="px-6 py-4">{{ $student->id }}</td>
                    <td class="px-6 py-4">{{ $student->name }}</td>
                    <td class="px-6 py-4">{{ $student->gender }}</td>
                    <td class="px-6 py-4">{{ $student->date_of_birth }}</td>
                    <td class="px-6 py-4">{{ $student->email }}</td>
                    <td class="px-6 py-4">{{ $student->phone }}</td>
                    <td class="px-6 py-4">{{ $student->address }}</td>

                     <td class="px-6 py-6 flex gap-2">
                <a href="{{route('students.show' ,  $student->id)}}" title="View Student"><button class="bg-green-600 p-1 rounded-sm text-white cursor-pointer hover:bg-green-700 text-sm">View</button></a>
                <a href="{{route ('students.edit' , $student->id)}}" title="edit stuent"><button class="bg-blue-600 p-1 rounded-sm text-white cursor-pointer hover:bg-blue-700 text-sm">Edit</button></a>
                
                <form action="{{url('students/' .$student->id)}} " method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');" class="">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-600 p-1 rounded-sm text-white cursor-pointer hover:bg-red-700 text-sm">Delete</button>

        
    </form>
               </td>
               
                </tr>

              

            @endforeach
        </tbody>
    </table>
</div>
@endsection
