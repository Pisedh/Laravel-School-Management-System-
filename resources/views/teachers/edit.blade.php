@extends ('layout')
@section('content')

<div class="flex justify-center items-center bg-gray-100 min-h-screen ">
<div class="max-w-2xl w-full bg-white p-9">
    <h1 class="text-center font-bold text-2xl">Edit Teacher</h1>
    <form action="{{url ('teachers/' .$teachers->id)}}" method="POST" class="p-4 ">
        @csrf 
        @method('PATCH')
       
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700"></label>
            <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 ">
        </div>
        <div class="mb-4">  
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{$teachers->name}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2     ">
        </div>
        <div class="mb-4">  
            <label class="block text-sm font-medium text-gray-700">Gender</label>
            <div class="flex items-center gap-6 mt-2">
            <label class="gap-2 flex items-center">
                <input type="radio" name="gender" id="gender" value="Male" {{$teachers->gender === 'Male' ? 'check': ''}} class="rounded border-gray-300">Male
            </label>
            <label class="gap-2 flex items-center">
                <input type="radio" name="gender" id="gender" value="Female"{{$teachers->gender ==='Female' ? 'check' : ''}}  class="rounded border-gray-300">Female
            </label>

            </div>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{$teachers->email}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" value="{{$teachers->phone}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" name="address" id="address" value="{{$teachers->address}}"   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></input>
        </div>
        <button type="submit" class="inline-block px-4 py-2 bg-gray-600 cursor-pointer text-white rounded hover:bg-black">Update</button>
    </form>
</div>
</div>
@stop   