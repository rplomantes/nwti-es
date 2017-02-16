@extends('master')
@section('content')
@include('adminmenu')
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('idno') ? ' has-error' : '' }}">
            
                            <div class="col-md-3">
                                <label>Id No</label>
                                <input type="text" class="form-control" name="idno" value="{{ old('idno') }}">

                                @if ($errors->has('idno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idno') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                    </div>
                        
                    <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                               
                            <div class="col-md-3">
                                <label>First Name</label> 
                                <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        


                            <div class="col-md-3">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" name="mname" value="{{ old('mname') }}">

                                @if ($errors->has('middlename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-3">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname" value="{{ old('lname') }}">

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                       
                        
                        
                            

                            <div class="col-md-3">
                                <label>Extension Name</label>
                                <input type="text" class="form-control" name="ename" value="{{ old('enname') }}">

                                @if ($errors->has('ename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('extrensionname') }}">

                                @if ($errors->has('extensionname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                       
                        

                        <div class="form-group{{ $errors->has('accesslevel') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Access Level</label>

                            <div class="col-md-6">
                                <select class="form-control" name="accesslevel">
                                <option value = "1">Parents</option>
                                <option value = "2">Registrar</option>
                                <option value = "3">TRS</option>
                                <option value = "4">Cashier</option>
                                <option value = "5">Accounting</option>
                                <option value = "6">Management</option>
                                <option value = "7">Admin</option>
                                </select>    
                               @if ($errors->has('accesslevel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accesslevel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
