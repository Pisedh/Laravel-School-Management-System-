@extends ('layout')
@section('content')


<div class="bg-whtie shadow-2xl rounded-2xl overflow-x-auto  m-10 ">
    <h1 class="text-center p-5 text-2xl font-bold ">Enrollment Lists</h1>
    <table class="min-w-full divide-y divide-gray-200">

        <thead class="bg-gray-50">
                    <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Student ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Course ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Fee</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Join date</th>
               </tr>
        </thead>
        <tbody>

            <tr>
                 <td class="px-6 py-4">{{ $enrollments->student_id}}</td>
                    <td class="px-6 py-4">{{ $enrollments->course_id }}</td>
                    <td class="px-6 py-4">{{ $enrollments->status}}</td>
                    <td class="px-6 py-4">{{ $enrollments->fee}}</td>
                    <td class="px-6 py-4">{{ $enrollments->join_date}}</td>
            </tr>
        </tbody>
    </table>







</div>
@endsection
