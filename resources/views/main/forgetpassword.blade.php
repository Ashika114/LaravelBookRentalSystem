@extends('main/layout')
@section('title','forgetPassword page')
<style>
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}    
</style>
@section('details')
<section class="vh-100" style="background-color:#fef8f5;">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        
        <img src="img/forgot_password.svg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="forget1" method="post">
        @csrf
        <div class="alert alert-danger">
          @if($errors->any())
          @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
          @endforeach
          @endif
        </div>
          @if(Session::has('success'))
          <div class="alert alert-danger">
              {{ Session::get('success') }}
              @php
                  Session::forget('success');
              @endphp
          </div>
          @endif
            <h2 style="font-weight:bold; font-family:serif; margin-bottom:20px; text-align:center;">FORGET PASSWORD</h2>
          <!-- Email input -->
          <div class="form-outline mb-4">
           <input type="text" id="uname" name="txtusername" class="form-control  @error('txtusername') is-invalid  @enderror form-control-lg" placeholder="Enter Username" />
            <label class="form-label" for="uname">Username</label>
          
          </div>

          <div class="form-outline mb-4">
           <input type="password" id="uname" name="txtpassword" class="form-control  @error('txtusername') is-invalid  @enderror form-control-lg" placeholder="Enter Password" />
            <label class="form-label" for="uname">Password</label>
          
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="pwd" name="txtpassword1" class="form-control  @error('txtpassword') is-invalid @enderror form-control-lg" placeholder="Enter password" />
            <label class="form-label" for="pwd">Conform Password</label>
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <center><button type="submit" class="btn btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#eb5d1e; border-radius: 12px; color:white;">SAVE</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Click here go to <a href="login"
                class="link-danger">Login</a></p></center>
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>


@endsection