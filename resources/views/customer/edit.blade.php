<b>E D I T</b>
<br/>

@foreach ($customer as $customerlist)
<form action="{{ route('Customer.update', $customerlist->customer_id)}}" method="post">

{{csrf_field()}}
{{method_field('PUT')}}
    <input type="text"
        name="txt_name"
        value="{{$customerlist->name}}"/>
        <br/>
    
    <input type="text"
        name="txt_name"
        value="{{$customerlist->address}}"/>
        <br/>
    
    
    <br/>
@endforeach
<button type="submit">S U B M I T</button>
<a href="{{ url ('Customer')}}">I N D E X</a>
