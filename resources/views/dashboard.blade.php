@extends('layout')
@section('content')



<div class="block p-6 bg-white border border-gray-200 rounded-lg shadow-xl  dark:bg-gray-100   w-full">
    <h1 class="text-2xl font-bold ">Dashboard</h1>
  


<div class="flex flex-col-3 gap-5 mt-10 w-full">
        <div class="bg-white shadow p-6 rounded-lg w-full flex flex-col-1 items-center justify-between ">
            <h3 class="text-lg font-bold flex gap-6 items-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000"><path d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z"/></svg>   
                Students</h3>
            <p class="text-2xl font-semibold ml-2 ">{{$totalStudents}}</p>
</div>
    
<div class="grid grid-col-3 gap-6 w-full">
        <div class="bg-white shadow p-6 rounded-lg flex flex-col-1 items-center  justify-between">
            <h3 class="text-lg font-bold flex gap-6 items-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000"><path d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z"/></svg>   
                Teacher</h3>
            <p class="text-2xl font-semibold">{{$totalTeachers}}</p>
</div>

</div>
<div class="grid grid-col-3 gap-6 w-full">
        <div class="bg-white shadow p-6 rounded-lg flex flex-col-1 items-center  justify-between    ">
            <h3 class="text-lg font-bold flex gap-6 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000"><path d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z"/></svg>
                Courses</h3>
            <p class="text-2xl font-semibold">{{$totalCourses}}</p>
</div>
</div>



</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




<div class="flex flex-wrap mt-10 gap-6">


    <div class=" flex-1 p-4 w-full h-2/5 bg-white rounded-lg shadow-lg">
         <canvas id="smschart2"></canvas>
    </div>

     <div class=" flex-1 p-4 w-full h-2/5 bg-white rounded-lg shadow-lg">
         <canvas id="smschart"></canvas>
    </div>


</div>
<div class="flex-1 p-4 w-full bg-white rounded-lg shadow-lg mt-10">
    <h3 class="text-lg font-bold mb-4">💰 Monthly Salary Trend</h3>
    <canvas id="salaryChart"></canvas>
</div>



  
</div>

<script>
    // this is second chart 
    const ctx2 = document.getElementById('smschart2').getContext('2d');
    const smschart2 = new Chart(ctx2,{
        type: 'bar',
        data:{
            labels: ['Students', 'Teachers', 'Courses'],
            datasets: [{
                label: 'School Management System',
                data: [{{$totalStudents}}, {{$totalTeachers}}, {{$totalCourses}}],
                backgroundColor: [
                    '#ff1100',
                    '#36a2eb',
                    '#ffce56'
                ],
                borderColor: [
                   '#ff1100',
                    '#36a2eb',
                    '#ffce56'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }   
    })  
    const ctx = document.getElementById('smschart').getContext('2d');
    const smschart = new Chart(ctx,{
        type: 'line',
        data:{
            labels: ['Students', 'Teachers', 'Courses'],
            datasets: [{
                label: 'School Management System',
                data: [{{$totalStudents}}, {{$totalTeachers}}, {{$totalCourses}}],
                backgroundColor: [
                    '#ff1100',
                    '#36a2eb',
                    '#ffce56'
                ],
                borderColor: [
                   '#ff1100',
                    '#36a2eb',
                    '#ffce56'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }   
    })  

    // ================= Salary Chart ==================


const salaryCtx = document.getElementById('salaryChart').getContext('2d');
const salaryChart = new Chart(salaryCtx, {
    type: 'line',
    data: {
        labels: @json($months),
        datasets: [{
            label: 'Total Salary (Payments)',
            data: @json($totals),
            borderColor: 'orange',
            backgroundColor: 'rgba(255, 196, 117, 0.4)',
            borderWidth: 2,
            tension: 0.5,
            fill: true,
            pointRadius: 5,
            pointHoverRadius: 8
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Salary Payments per Month ({{ date("Y") }})',
                font: { size: 18 }
            },
            legend: {
                position: 'top'
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                title: { display: true, text: 'Total Salary ($)' }
            },
            x: {
                title: { display: true, text: 'Month' }
            }
        }
    }
});
</script>


    




    
</script>
@endsection