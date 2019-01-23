<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
        //echo "asaoy geboyu";
        $customer = Customer::get(['customer_id', 'name', 'address']);
        //var_dump($customer);
        return view('customer.index', compact('customer'));
    }
    function create(){
        //echo "telo";
        return view('customer.create');
    }
    
    public function store(Request $request){
        //echo "jatimiko";
        $txtCustomer_id = $request->input('txt_customer_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');

        echo $txtCustomer_id."<br/>".
        $txtName."<br/>".
        $txtAddress;

        Customer::create([
            'customer_id' => $txtCustomer_id, 
            'name' => $txtName,
            'address' => $txtAddress
            ]);

        return redirect('/Customer');
    }

    public function update(Request $request, $customer_id)
    {
        $txtCustomer_id = $request->input('txt_customer_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');

        Customer::where('customer_id', $Customer_id)->update([
            'name'=>$txtName,
            'address'=>$txtAddress]);
            
        return redirect('/Customer');
    }

    public function destroy($Customer_id)
    {
        $customer = Customer::where('customer_id', $Customer_id)->first();
        $customer->delete();
        return redirect('/Customer');
    }

    public function show($Customer_id){
        //echo "ember";
        //echo $Customer_id;

        //select * from Customer where customer id = $Customer_id
        //$customer = Customer::where('customer_id', $Customer_id);

        //var_dump($customer);
        //return view('customer/show',
        //['customer' => Customer::where('customer_id', $Customer_id)]
        $customer = Customer::where('customer_id', $Customer_id)->get();
        return view('customer/show', compact('customer'));
    
    }

    public function edit($Customer_id){
        //return view('customer/edit',
        //['customer' => Customer::where('customer_id', $txtCustomer_id)]
        $customer = Customer::where('customer_id', $Customer_id)->get();
        return view('customer/edit', compact('customer'));
    
    }

}
