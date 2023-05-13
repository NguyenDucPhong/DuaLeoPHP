<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Customer::latest()->search()->paginate(8);

        return view('customer', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      =>  'required',
            'gender'    =>  'required',
            'address'   =>  'required',
            'phone'     =>  'required | digits:10',
        ]);

        $customer = new Customer();

        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->save();

        // $customer = $request->all();
        // Customer::create($customer);

        return redirect()->route('customers.index')->with('success', 'Customer Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('editCustomer', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        
        $request->validate([
            'name'      =>  'required',
            'gender'    =>  'required',
            'address'   =>  'required',
            'phone'     =>  'required | digits:10',
        ]);

        $customer = Customer::find($request->hidden_id);

        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        $customer->phone = $request->phone;

        $customer->save();

        return redirect()->route('customers.index')->with('success', 'Customer Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('products.index')->with('success', 'Customer Data deleted successfully');
    }
}
