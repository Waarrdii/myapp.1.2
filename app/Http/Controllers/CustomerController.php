<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;
use App\Models\customer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CustomerController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        $customers = Customer::where('nama', 'like', "%$search%")
            ->orwhere('customer_id', 'like', "%$search%")
            ->get();
        return inertia::render('Customer/Index', [
            'customers' => $customers,
            'search' => $search,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return inertia('Customer/Create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StorecustomerRequest $request)
    {
        $this->authorize('create', Customer::class);
        $request->validate([
            'customer_id' => ['required', 'string', 'max:255', 'unique:customers'],
            'nama' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:10'],
            'jenjang' => ['required', 'string', 'max:255'],
            'tingkatan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'kota' => ['required', 'string', 'max:255'],
            'provinsi' => ['required', 'string', 'max:255'],
            'negara' => ['required', 'string', 'max:255'],
            'telp' => ['required', 'string', 'max:255'],
            'kontak' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'kode_pos' => ['required', 'string', 'max:255'],
        ]);
        customer::created($request->all());
        return redirect(route('customer.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        $customers = Customer::where('id', $customer->id)->get();
        return inertia::render('Customer/Details', [
            'customers' => $customers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
    }

    /**
     * Update customer data.
     *
     * @param UpdateCustomerRequest $request
     * @param Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecustomerRequest $request, customer $customer)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer)
    {
        //
    }
}
