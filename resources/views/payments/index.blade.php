@extends('layout')

@section('content')
<div class="overflow-x-auto bg-white shadow-md rounded-2xl">
  
    <table class="min-w-full divide-y divide-gray-200 ">
        
        <h1 class="text-2xl font-bold mt-4 text-center">Payment lists</h1>

        <thead class="bg-gray-50">
            <a href="{{ route('payments.create') }}" 
             class="inline-block mb-4 px-2 py-2 bg-gray-500 text-white rounded hover:bg-black ml-5">Add Payment</a>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Student ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Student Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Enrollment ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Amount</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Payment Method</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Payment Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Academic Year</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Term</th>
                
                
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($payments as $payment)
                <tr>
                    <td class="px-6 py-4">{{ $payment->id}}</td>
                    <td class="px-6 py-4">{{ $payment->student_id}}</td>
                    <td class="px-6 py-4">{{ $payment->student->name ?? 'Unknown'}}</td>
                    <td class="px-6 py-4">{{ $payment->enrollment_id}}</td>
                    <td class="px-6 py-4">{{ $payment->amount}}</td>
                    <td class="px-6 py-4">{{ $payment->payment_method}}</td>
                    <td class="px-6 py-4">{{ $payment->payment_date }}</td>
                    <td class="px-6 py-4">{{ $payment->status}}</td>
                    <td class="px-6 py-4">{{ $payment->academic_year}}</td>
                    <td class="px-6 py-4">{{ $payment->term}}</td>
                

                     <td class="px-6 py-6 flex gap-2">
                <a href="{{route('payments.show' ,  $payment->id)}}" title="View Student"><button class="bg-green-600 p-1 rounded-sm text-white cursor-pointer hover:bg-green-700 text-sm">View</button></a>
                <a href="{{route ('payments.edit' , $payment->id)}}" title="edit stuent"><button class="bg-blue-600 p-1 rounded-sm text-white cursor-pointer hover:bg-blue-700 text-sm">Edit</button></a>
                
                <form action="{{url('payments/' .$payment->id)}} " method="POST" onsubmit="return confirm('Are you sure you want to delete this batch?');" >
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-600 p-1 rounded-sm text-white cursor-pointer hover:bg-red-700 text-sm ">Delete</button>

        
    </form>
    </td>
    </tr>

              

            @endforeach
        </tbody>
    </table>
</div>
@endsection
