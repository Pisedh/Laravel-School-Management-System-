@extends ('layout')
@section('content')


<div class="bg-whtie shadow-2xl rounded-2xl overflow-x-auto  m-10 ">
    <table class="min-w-full divide-y divide-gray-200">
        <h1 class="text-center font-bold text-black text-2xl p-5 ">Batches list</h1>

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
                 <td class="px-6 py-4">{{ $payment->student_id}}</td>
                 <td class="px-6 py-4">{{ $payment->student->name}}</td>
                    <td class="px-6 py-4">{{ $payment->enrollment_id}}</td>
                    <td class="px-6 py-4">{{ $payment->amount}}</td>
                    <td class="px-6 py-4">{{ $payment->payment_method}}</td>
                    <td class="px-6 py-4">{{ $payment->payment_date }}</td>
                    <td class="px-6 py-4">{{ $payment->status}}</td>
                    <td class="px-6 py-4">{{ $payment->academic_year}}</td>
                    <td class="px-6 py-4">{{ $payment->term}}</td>

                   
            </tr>
        </tbody>
    </table>







</div>
@endsection
