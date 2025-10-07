@extends('layout')

@section('content')
<div class="overflow-x-auto bg-white shadow-md rounded-2xl">
  
    <table class="min-w-full divide-y divide-gray-200 ">
        
        <h1 class="text-2xl font-bold mt-4 text-center">Enrollment Lists</h1>

        <thead class="bg-gray-50 ">
            {{-- create button add student --}}
            <a href="{{ route('enrollments.create') }}"
             class="inline-block mb-4 px-2 py-2 bg-gray-500 text-white rounded hover:bg-black ml-5">Add Enrollment</a>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Student ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Course ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Fee</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Join date</th>
               
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($enrollments as $enrollment)
                <tr>
                    <td class="px-6 py-4">{{ $enrollment->student_id}}</td>
                    <td class="px-6 py-4">{{ $enrollment->course_id }}</td>
                    <td class="px-6 py-4">{{ $enrollment->status}}</td>
                    <td class="px-6 py-4">{{ $enrollment->fee}}</td>
                    <td class="px-6 py-4">{{ $enrollment->join_date}}</td>
                    

                     <td class="px-6 py-6 flex gap-2">
                <a href="{{route('enrollments.show' ,  $enrollment->id)}}" title="View Enrollment"><button class="bg-green-700 p-2 rounded-xl text-white">View</button></a>
                <a href="{{route ('enrollments.edit' , $enrollment->id)}}" title="edit Enrollment"><button class="bg-blue-400 p-2 rounded-xl text-white">Edit</button></a>
                 
                <form action="{{url('enrollments/' .$enrollment->id)}} " method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');" class="">
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
