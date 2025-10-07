@extends ('layout')
@section('content')


<div class="bg-whtie shadow-2xl rounded-2xl overflow-x-auto  m-10 ">
    <table class="min-w-full divide-y divide-gray-200">
        <h1 class="text-center font-bold text-black text-2xl p-5 ">Teachers list</h1>

        <thead class="bg-gray-50">
                    <tr>
             <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Gender</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
               </tr>
        </thead>
        <tbody>

            <tr>
                 <td class="px-6 py-4">{{ $teachers->id }}</td>
                    <td class="px-6 py-4">{{ $teachers->name }}</td>
                    <td class="px-6 py-4">{{ $teachers->gender}}</td>
                    <td class="px-6 py-4">{{ $teachers->email }}</td>
                    <td class="px-6 py-4">{{ $teachers->phone }}</td>
                    <td class="px-6 py-4">{{ $teachers->address }}</td>
            </tr>
        </tbody>
    </table>







</div>
@endsection
