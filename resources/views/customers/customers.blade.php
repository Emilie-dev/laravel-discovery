@extends('layout/default')
@section('content')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-s12">
                    	<table class="table">
                    		<thead>
                    			<tr>
                    				<th>First Name</th>
                    				<th>Last Name</th>
                    				<th>Email</th>
                    				<th>Created at</th>
                    				<th>Détails</th>
                    			</tr>
                    		</thead>
                    		<tbody>
                    			@foreach ($customers as $customers)
                    				<tr>
	                    				<td>{{ $customer->first_name }}</td>
	                    				<td>{{ $customer->last_name }}</td>
	                    				<td>{{ $customer->email }}</td>
	                    				<td>{{ $customer->created_at }}</td>
	                    				<td>
	                    					<a href="" 

	                    				{{ $cusotmer->}} </td>
                    				</tr>
                    			@foreach
                    		</tbody>
                    	</table>
                    </div>
                </div>
                <!-- /.row -->
</div>
@endsection