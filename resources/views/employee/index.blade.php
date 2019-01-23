<b>E M P L O Y E E</b>
<br/>
@foreach ($employee as $employeelist)
    {{$employeelist->employee_id}}
    {{$employeelist->employee_name}}
    {{$employeelist->employee_address}}
    {{$employeelist->employee_phone_number}}
   
    <a href="/Employee/{{ $employeelist->employee_id}}">S H O W</a>
    

    <a href="/Employee/{{ $employeelist->employee_id}}/edit">E D I T</a>
    <br/>

<form action="/Employee/{{$employeelist->employee_id}}" method="post">
{{csrf_field()}}
{{method_field('DELETE')}}
<button>X</button>
   <!-- http://localhost:8000/Employee/3 -->
@endforeach
<br/><b>
<a href="{{ url ('Employee/create')}}">CREATE HERE</a></b>