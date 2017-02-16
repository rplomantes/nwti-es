@extends('master')
@section('content')
<div class="container-fluid header" style="background-color: #ccc">
        <div class="col-md-1">
            <img src="{{url('images','xavierlogo.png')}}" class="img-responsive" alt="Xavier School Logo">
       </div>
        <div class="col-md-11">
            <h2>{{env('INSTITUTION')}}</h2>
        </div>
</div>
<div class="col-md-3">
   
</div>    
<div class="col-md-6" style="margin-top: 80px">
			<div class="panel panel-default">
				<div class="panel-heading" style=" background-color: #003; color:#fff">Login Screen</div>
                                <div class="panel-body" >
                                   
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                                    
                                       
					<form class="form-horizontal" role="form" method="POST" action="{{ url('login') }}">
						  {!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-12"> ID Number</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="idno" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-12">Password</label>
							<div class="col-md-12">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						

						<div class="form-group">
							<div class="col-md-12 control-label">
                                                            <input type="image" name="submit" src="{{url('images','login.jpeg')}}" alt="Submit" width="140" height="50" class="">
							</div>
						</div>
					</form>
                                           
				</div>
			</div>
		</div>


@stop