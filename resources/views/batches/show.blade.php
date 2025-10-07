@extends ('layout')
@section('content')


<div class="bg-whtie shadow-2xl rounded-2xl overflow-x-auto  m-10 ">
    <table class="min-w-full divide-y divide-gray-200">
        <h1 class="text-center font-bold text-black text-2xl p-5 ">Batches list</h1>

        <thead class="bg-gray-50">
                    <tr>
             <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">start year</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">End year</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Program</th>
               </tr>
        </thead>
        <tbody>

            <tr>
                 <td class="px-6 py-4">{{ $batches->id }}</td>
                    <td class="px-6 py-4">{{ $batches->name }}</td>
                    <td class="px-6 py-4">{{ $batches->start_year}}</td>  
                    <td class="px-6 py-4">{{ $batches->end_year}}</td>  
                    <td class="px-6 py-4">{{ $batches->program}}</td>

                   
            </tr>
        </tbody>
    </table>







</div>
@endsection
