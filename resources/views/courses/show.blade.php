@extends ('layout')
@section('content')


<div class="bg-whtie shadow-2xl rounded-2xl overflow-x-auto  m-10 ">
    <table class="min-w-full divide-y divide-gray-200">
        <h1 class="text-center font-bold text-black text-2xl p-5 ">Courses list</h1>

        <thead class="bg-gray-50">
                    <tr>
             <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Codee</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Credits</th>
                
               </tr>
        </thead>
        <tbody>

            <tr>
                    <td class="px-6 py-4">{{ $courses->id }}</td>
                    <td class="px-6 py-4">{{ $courses->name }}</td>
                    <td class="px-6 py-4">{{ $courses->code }}</td>
                    <td class="px-6 py-4">{{ $courses->description }}</td>
                    <td class="px-6 py-4">{{ $courses->credits }}</td>
            </tr>
        </tbody>
    </table>







</div>
@endsection
