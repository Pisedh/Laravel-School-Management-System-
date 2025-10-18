@extends ('layout')
@section('content')


<div class="bg-whtie shadow-2xl rounded-2xl overflow-x-auto  m-10 ">
    <table class="min-w-full divide-y divide-gray-200">
        <h1 class="text-center font-bold text-black text-2xl p-5 ">Payment lists</h1>

        <thead class="bg-gray-50">
                    <tr>
             <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Student ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Student Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Enrollment ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Amount</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Payment Method</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Payment Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Academic Year</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Term</th>
               </tr>
               
                    
        </thead>
        <tbody>

        <tr>
            <td class="px-6 py-4">{{ $payments->id }}</td>
            <td class="px-6 py-4">{{ $payments->student_id }}</td>
            <td class="px-6 py-4">{{ $payments->student->name ?? 'Unknown' }}</td>
            <td class="px-6 py-4">{{ $payments->enrollment_id }}</td>
            <td class="px-6 py-4">{{ $payments->amount }}</td>
            <td class="px-6 py-4">{{ $payments->payment_method }}</td>
            <td class="px-6 py-4">{{ $payments->payment_date}}</td>
            <td class="px-6 py-4">{{ $payments->status }}</td>
            <td class="px-6 py-4">{{ $payments->academic_year }}</td>
            <td class="px-6 py-4">{{ $payments->term }}</td>
        </tr>
        </tbody>
    </table>
</div>
@endsection
