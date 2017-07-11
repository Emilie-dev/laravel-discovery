<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function getAllCustomers () {

    	// return "OK";
    	$customers = Customer::all();
    	return view('customers/customers', ['customers' => $customers]);
    }

    // public function getCustomer ($id) {

    // 	return "OK 2".$id;
    // }

    // public function getCustomer2 ( $prenom, $nom ) {

    // 	return "Bonjour ".$prenom .' '. $nom .' !';
    // }
}
