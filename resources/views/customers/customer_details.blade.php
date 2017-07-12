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
						<ul>
							@foreach($customer as $info)
								<li>{{$info->first_name}}</li>
								<li>{{$info->last_name}}</li>
							@endforeach
						</ul>
                    </div>
                </div>
                <!-- /.row -->
</div>


@endsection