@extends('layout')

@section('content')
<div class="overflow-x-auto bg-white shadow-md rounded-2xl">
  
    <table class="min-w-full divide-y divide-gray-200 ">
        
        <h1 class="text-2xl font-bold mt-4 text-center">Batches List</h1>

        <thead class="bg-gray-50 ">
            <a href="{{ route('batches.create') }}" 
             class="inline-block mb-4 px-2 py-2 bg-gray-500 text-white rounded hover:bg-black ml-5">Add Batches</a>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Course Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Start year</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">End year</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Program</th>
                
                
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($batches as $batch)
                <tr>
                    <td class="px-6 py-4">{{ $batch->id}}</td>
                    <td class="px-6 py-4">{{ $batch->name }}</td>
                    <td class="px-6 py-4">{{ $batch->course}}</td>
                    <td class="px-6 py-4">{{ $batch->course_name }}</td>
                    <td class="px-6 py-4">{{ $batch->start_year}}</td>
                    <td class="px-6 py-4">{{ $batch->end_year }}</td>
                    <td class="px-6 py-4">{{ $batch->program}}</td>
                

                     <td class="px-6 py-6 flex gap-2">
                <a href="{{route('batches.show' ,  $batch->id)}}" title="View Student"><button class="bg-green-600 p-1 rounded-sm text-white cursor-pointer hover:bg-green-700 text-sm">View</button></a>
                <a href="{{route ('batches.edit' , $batch->id)}}" title="edit stuent"><button class="bg-blue-600 p-1 rounded-sm text-white cursor-pointer hover:bg-blue-700 text-sm">Edit</button></a>
                
                <form action="{{url('batches/' .$batch->id)}} " method="POST" onsubmit="return confirm('Are you sure you want to delete this batch?');" >
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
