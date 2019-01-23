<b>E D I T</b>
<br/>

@foreach ($employee as $employeelist)
<form action="{{ route('Employee.update', $employeelist->employee_id)}}" method="post">

{{csrf_field()}}
{{method_field('PUT')}}
    <input type="text"
        name="txt_name"
        value="{{$employeelist->employee_name}}"/>
        <br/>
    
    <input type="text"
        name="txt_name"
        value="{{$employeelist->employee_address}}"/>
        <br/>

    <input type="text"
        name="txt_name"
        value="{{$employeelist->employee_phone_number}}"/>
        <br/>
    
    
    <br/>
@endforeach
<button type="submit">S U B M I T</button>
<a href="{{ url ('Employee')}}">I N D E X</a>
