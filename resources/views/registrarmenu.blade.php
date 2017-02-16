<div class='container-fluid'>
    
    
    <div class="col-md-10" id="memu">
         
       <div class="icon">
           <a href="{{url('/')}}">
               <i class="fa fa-home fa-3x" aria-hidden="true"></i><p>Home</p>
           </a>
       </div>
     <div class="icon">
           <a href="{{url('enrollmentrequest')}}">
               <i class="fa fa-plus-square fa-3x" aria-hidden="true"></i><p>Enrollment Request</p>
           </a>
       </div>
       <div class="icon">
           
               <a href="{{url('registration')}}">
                    <i class="fa fa-pencil-square fa-3x" aria-hidden="true"></i><p>Registration</p>
               </a>
          
       </div>    
       <div class="icon">
          
                <a href="{{url('logout')}}">
               <i class="fa fa-sign-out fa-3x" aria-hidden="true"></i><p>Logout</p>
                </a>
              
       </div>
   </div>
    <div class="col-md-2">
        <h5 style="text-align: right">{{\Auth::user()->fname}} {{\Auth::user()->lname}}</h5> 
    </div>    
    </div>


