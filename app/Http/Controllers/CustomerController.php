<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function getAllCustomers () {

    	$customers = Customer::all();
    	return view('customers/customers', ['customers' => $customers]);
    }


    public function getCustomer ($id) {

    	// $customer = "getCustomer".$id;
        $customer = Customer::where('id', $id)->get();
    	return view('customers/customer_details', ['customer' => $customer]);
    }


    public function updateCustomer ( Request $request, $id) {

    	$customer = Customer::find($id);
    	$customer->first_name = $request->first_name;
    	$customer->last_name = $request->last_name;
    	$customer->email = $request->email;
    	$customer->save();
    	return redirect('/customers');
    }


    public function deleteCustomer (Request $request, $id) {

    	$customer = Customer::destroy($id);
    	return "The customer has been deleted!";

    }


    public function addCustomer () {

    	

    }












    // public function getCustomer2 ( $prenom, $nom ) {

    // 	return "Bonjour ".$prenom .' '. $nom .' !';
    // }
}
