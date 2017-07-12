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


    public function addCustomer () {

    	

    }


    public function deleteCustomer ($id) {



    }


    public function updateCustomer ($id) {



    }









    // public function getCustomer2 ( $prenom, $nom ) {

    // 	return "Bonjour ".$prenom .' '. $nom .' !';
    // }
}
