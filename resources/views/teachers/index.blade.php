@extends('layout')

@section('content')
<div class="overflow-x-auto bg-white shadow-md rounded-2xl">
  
    <table class="min-w-full divide-y divide-gray-200 ">
        
        <h1 class="text-2xl font-bold mt-4 text-center">Teacher List</h1>

        <thead class="bg-gray-50 ">
            {{-- create button add student --}}
            <a href="{{ route('teachers.create') }}"
             class="inline-block mb-4 px-2 py-2 bg-gray-500 text-white rounded hover:bg-black ml-5">Add Teacher</a>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID  </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Gender</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($teachers as $item)
                <tr>
                    <td class="px-6 py-4">{{ $item->id }}</td>
                    <td class="px-6 py-4">{{ $item->name }}</td>
                    <td class="px-6 py-4">{{ $item->gender }}</td>
                    <td class="px-6 py-4">{{ $item->email }}</td>
                    <td class="px-6 py-4">{{ $item->phone }}</td>
                    <td class="px-6 py-4">{{ $item->address}}</td>

                     <td class="px-6 py-6 flex gap-2">
                <a href="{{route('teachers.show' ,  $item->id)}}" title="View teacher"><button class="bg-green-700 p-2 rounded-xl text-white">View</button></a>
                <a href="{{route ('teachers.edit' , $item->id)}}" title="edit teacher"><button class="bg-blue-400 p-2 rounded-xl text-white">Edit</button></a>
                
                <form action="{{url('teachers/' .$item->id)}} " method="POST" onsubmit="return confirm('Are you sure you want to delete this Teacher?');" class="">
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
