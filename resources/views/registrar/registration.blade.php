@extends('master')
@section('content')
@include('registrarmenu')

<div class="container_fluid">
    <ul class="col-md-12 breadcrumb">
       <li ><a href="{{url('/')}}" class="breadcrumb-item">Home</a></li>
        <li class="active">Registration</li>
    </ul>

	<div class="row">
        <div class="col-sm-5 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search Student" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button> 
                    </span>     
                </div>
            </div>
        </div>
            <a href="{{url('newstudent')}}" class="btn btn-danger"> New Student</a>
	</div>
</div>   
@stop
