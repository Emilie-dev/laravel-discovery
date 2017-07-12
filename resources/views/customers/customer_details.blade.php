@extends('layout/default');
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Customer details 
                    </h1>
                </div>
                <div class="col-lg-s12">
				    @foreach($customer as $info)
		                <form action={{'/updateCustomer/'.$info->id}} method="post">
		                	  {{ csrf_field() }}
		                	<div class="col-lg-s6">
		                    	<div class="input-group">
		                    		<label for="first_name">First name</label>
		                    		<input id="first_name" type="text" name="first_name" value={{$info->first_name}} />
		                    	</div>
		                    </div>
		                    <div class="col-lg-s6">
		                    	<div class="input-group">
		                    		<label for="last_name">Last name</label>
		                    		<input id="last_name" type="text" name="last_name" value={{$info->last_name}} />
		                    	</div>
		                    </div>
		                    <div class="col-lg-s6">
		                    	<div class="input-group">
		                    		<label for="email">Email</label>
		                    		<input id="email" type="text" name="email" value={{$info->email}} />
		                    	</div>
		                    </div>
		                    <button class="btn btn-success" type="submit">Update</button>
						 </form>
						 <a href={{'/deleteCustomer/'.$info->id}}>Delete</a>					
					@endforeach						
                    </div>
                </div>
                <!-- /.row -->
</div>


@endsection