<?php namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Validator;

class CustomerController extends Controller {

    public function __construct(Customer $customer) {
        $this->customer = $customer;
    }

    public function index() {
        $customers = $this->customer->query()->get();
        return view('customer.index', ['customers' => $customers]);
    }

    public function create() {
        return view('customer.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $customer = new $this->customer;
        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function edit($id) {
        $customer = $this->customer->query()->find($id);
        return view('customer.edit', ['customer' => $customer]);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $customer = $this->customer->query()->find($id);
        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function delete($id) {
        $customer = $this->customer->query()->findOrFail($id);
        return view('customer.delete', ['customer' => $customer]);
    }

    public function destroy($id) {
        $this->customer->query()->findOrFail($id)->delete();
        return redirect()->route('customer.index');
    }

}