@extends('reader/readerlayout')
@section('title','booking cancel')
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
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/bookingcancelinsert" method="post">
        @csrf
            <h2 style="font-weight:bold; font-family:serif; margin-bottom:20px; text-align:center;">BOOKING CANCEL REASON </h2>
          <!-- Email input -->
          <input type="hidden" value="{{$bookingcan['bookingid']}}" name="txtbookingid" />
          <div class="form-outline mb-4">
          <label class="form-label" for="uname">REASON</label>
           <textarea id="uname" name="txtreason" rows="4" cols="50" maxlength="200">
                Enter Reason to Cancel booking..
             </textarea>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <center><button type="submit" class="btn btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#eb5d1e; border-radius: 12px; color:white;">CANCEL</button>
            </center>
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>


@endsection