<b>S H O W</b>
<br/>

@foreach ($customer as $customerlist)
    {{$customerlist->customer_id}}
    {{$customerlist->name}}
    {{$customerlist->address}}
    
    <br/>
@endforeach

<a href="{{ url ('Customer')}}">I N D E X</a>
