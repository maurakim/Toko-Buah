<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
        //echo "asaoy geboyu";
        $supplier = Supplier::get(['supplier_id', 'supplier_name', 'supplier_address']);
        //var_dump($supplier);
        return view('supplier.index', compact('supplier'));
    }
    function create(){
        //echo "telo";
        return view('supplier.create');
    }
    
    public function store(Request $request){
        //echo "jatimiko";
        $txtSupplier_id = $request->input('txt_supplier_id');
        $txtSupplier_name = $request->input('txt_supplier_name');
        $txtSupplier_address = $request->input('txt_supplier_address');

        echo $txtSupplier_id."<br/>".
        $txtSupplier_name."<br/>".
        $txtSupplier_address;

        Supplier::create([
            'supplier_id' => $txtSupplier_id,
            'supplier_name' => $txtSupplier_name,
            'supplier_address' => $txtSupplier_address
        ]);

        return redirect('/Supplier');

    }
}
