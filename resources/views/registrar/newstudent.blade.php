@extends('master')
@section('content')
@include('registrarmenu')
<ul class="col-md-12 breadcrumb">
        <li><a href="{{url('/')}}" class="breadcrumb-item">Home</a></li>
        <li><a href="{{url('registration')}}" class="breadceumb-item">Registration</a></li>
        <li class="active">New Student Registration</li>
</ul>


<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-body">
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
            <form class="form-horizontal" role="form" method="POST" action="{{ url('newstudent') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="col-md-3">     
                        <input placeholder="Student ID" type="text" name="idno" id="idno" readonly="readonly" class="form form-control">
                    </div>
                    <div class="col-md-2">
                        <div class="brn btn-primary form form-control" id="getid" style="text-align:center;cursor:pointer">Get ID</div>
                    </div>
                </div>    
            <div id="formbody">            
                <div class="form-group">
                    <div class="col-md-3"> 
                        <label class="control-label">First Name</label>
                        <input type="text" name="idno"class="form form-control">
                    </div>
                    <div class="col-md-3"> 
                        <label class="control-label">Middle Name</label>
                        <input type="text" name="mname"class="form form-control">
                    </div>
                    <div class="col-md-3"> 
                        <label class="control-label">Last Name</label>
                        <input type="text" name="lname"class="form form-control">
                    </div>
                    <div class="col-md-3"> 
                        <label class="control-label">Extension Name</label>
                        <input type="text" name="ename"class="form form-control">
                    </div>
                </div>
             <div class="form-group">
                 <div class="col-md-3">
                     <label class="control-label">Birth Date</label>
                     <input type="text" name="birthdate" id="birthdate" class="form form-control" placeholder="yyyy-mm-dd">
                 </div> 
                 <div class="col-md-3">
                     <label class="control-label">Gender</label>
                     <select name="gender" id="gender" class="form form-control">
                         <option value="Male">Male</option>
                         <option value ="Female">Female</option>
                     </select>    
                 </div> 
                  <div class="col-md-3">
                     <label class="control-label">Department</label>
                     <select name="department" id="department" class="form form-control">
                         <option value="Primary">Primary</option>
                         <option value ="Junior High School">Junior High School</option>
                         <option value ="Senior High School">Senior High School</option>
                     </select>    
                 </div> 
             </div>    
            </div>    
            </form>        
        </div>
    </div>    
</div>  
      
   <script>
       $(document).ready(function(){
           $("#formbody").hide();
            $("#getid").click(function(){
                var myarray={};
                myarray['myid']="{{\Auth::user()->id}}";
                $.ajax({
                type: "GET", 
                url: "/getid" , 
                data: myarray,
                success:function(data){
                $("#idno").val(data);    
                $("#formbody").fadeIn();
                }
            }); 
                
            });    
       });
   </script>    
@stop
