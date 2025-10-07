@extends('layout')

@section('content')
<div class="overflow-x-auto bg-white shadow-md rounded-2xl">
  
    <table class="min-w-full divide-y divide-gray-200 ">
        
        <h1 class="text-2xl font-bold mt-4 text-center">Course List</h1>

        <thead class="bg-gray-50 ">
            {{-- create button add student --}}
            <a href="{{ route('courses.create') }}"
             class="inline-block mb-4 px-2 py-2 bg-gray-500 text-white rounded hover:bg-black ml-5">Add Course</a>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID  </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Code</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Credit</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($courses as $course)
                <tr>
                    <td class="px-6 py-4">{{ $course->id }}</td>
                    <td class="px-6 py-4">{{ $course->name}}</td>
                    <td class="px-6 py-4">{{ $course->code}}</td>
                    <td class="px-6 py-4">{{ $course->description }}</td>
                    <td class="px-6 py-4">{{ $course->credits }}</td>

                     <td class="px-6 py-6 flex gap-2">
                <a href="{{route('courses.show' ,  $course->id)}}" title="View course"><button class="bg-green-700 p-2 rounded-xl text-white">View</button></a>
                <a href="{{route ('courses.edit' , $course->id)}}" title="edit course"><button class="bg-blue-400 p-2 rounded-xl text-white">Edit</button></a>

                <form action="{{url('courses/' .$course->id)}} " method="POST" onsubmit="return confirm('Are you sure you want to delete this Course?');" class="">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 p-2 text-white rounded-xl ">Delete</button>

        
    </form>
               </td>
               
                </tr>

              

            @endforeach
        </tbody>
    </table>
</div>
@endsection
