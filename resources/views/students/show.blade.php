@extends ('layout')
@section('content')


<div class="bg-whtie shadow-2xl rounded-2xl overflow-x-auto  m-10 ">
    <table class="min-w-full divide-y divide-gray-200">

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
                 <td class="px-6 py-4">{{ $students->id }}</td>
                    <td class="px-6 py-4">{{ $students->name }}</td>
                    <td class="px-6 py-4">{{ $students->gender }}</td>  
                    <td class="px-6 py-4">{{ $students->date_of_birth }}</td>  
                    <td class="px-6 py-4">{{ $students->email }}</td>
                    <td class="px-6 py-4">{{ $students->phone }}</td>
                    <td class="px-6 py-4">{{ $students->address }}</td>
            </tr>
        </tbody>
    </table>







</div>
@endsection
