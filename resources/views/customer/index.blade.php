<b>C U S T O M E R</b>
<br/>
@foreach ($customer as $customerlist)
    {{$customerlist->customer_id}}
    {{$customerlist->name}}
    {{$customerlist->address}}
   
    <a href="/Customer/{{ $customerlist->customer_id}}">S H O W</a>
    

    <a href="/Customer/{{ $customerlist->customer_id}}/edit">E D I T</a>
    <br/>

<form action="/Customer/{{$customerlist->customer_id}}" method="post">
{{csrf_field()}}
{{method_field('DELETE')}}
<button>X</button>
   <!-- http://localhost:8000/Customer/3 -->
@endforeach
<br/><b>
<a href="{{ url ('Customer/create')}}">CREATE HERE</a></b>