@extends ('layout')
@section('content')

<div class="flex justify-center items-center bg-gray-100 min-h-screen ">
<div class="max-w-2xl w-full bg-white p-9">
    <form action="{{url ('payments/' .$payments->id)}}" method="POST" class="p-4 ">
        <h1 class="text-center font-bold text-2xl">Edit Payment</h1>
        @csrf 
        @method('PATCH')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700"></label>
            <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 ">
        </div>
       
        <div class="mb-4">
            <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
            <input type="number" name="amount" id="amount" value="{{$payments->amount }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="payment_method" class="block text-sm font-medium text-gray-700">Payment Method</label>
           <select name="payment_method" id="payment_method" value="{{$payments->payment_method }}" required class=" w-full p-3 block border border-gray-300 rounded-md shadow-sm ">
                <option value="cash">Cash</option>
                <option value="aba">Aba</option>
                <option value="acelida">Acelida</option>
                <option value="wing">Canadia</option>
                <option value="canadia">Wing</option>
                {{-- ['cash','aba','acelida','wing','canadia'])->default( --}}
           </select>
        </div>
        <div class="mb-4">
            <label for="payment_date" class="block text-sm font-medium text-gray-700">Payment Date</label>
            <input type="date" name="payment_date" id="payment_date"  value="{{$payments->payment_date }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="academic_year" class="block text-sm font-medium text-gray-700">Academic Year</label>
            <input type="text" name="academic_year" id="academic_year"  value="{{$payments->academic_year }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Payment Method</label>
           <select name="status" id="status" required  value="{{$payments->status }}" class=" w-full p-3 block border border-gray-300 rounded-md shadow-sm ">
                <option value="paid">Paid</option>
                <option value="pending">Pending</option>
                <option value="failed">failed</option>
                <option value="refund">Refund</option>
            
                {{-- $table->enum('status',['paid','pending','failed','refund'])->default('paid'); --}}
           </select>
        </div>
        <div class="mb-4">
            <label for="term" class="block text-sm font-medium text-gray-700">Term</label>
            <input type="text" name="term" id="term"   value="{{$payments->term }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
        
        <button type="submit" class="inline-block px-4 py-2 bg-gray-500 text-white rounded hover:bg-black cursor-pointer">Update</button>
    </form>
</div>
</div>
</div>
@stop   