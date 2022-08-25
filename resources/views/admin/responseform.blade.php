@extends('admin/adminlayout')
@section('title','Contact form')
@section('header','CONTACTUS RESPONSE FORM')
@section('details')
<section class="vh-200" >
<form action="\response" method="post" >
@csrf
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

          <input type="hidden" value="{{$contact['contactid']}}" name="contactid" />
          <input type="hidden" value="{{$contact['emailid']}}" name="txtemail" />

            <div class="row" id="row">
              <div class="col-4">
                 <label for="aemail">Response</label>
              </div>
              <div class="col">
              <textarea class="form-control" name="txtresponse" rows="10" required></textarea>
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-6">
                <button class="btn btn-success btn-lg btn-block" type="submit">SAVE</button>
              </div>
              <div class="col">
                <button class="btn btn-success btn-lg btn-block" type="submit">CANCEL</button>
              </div>
            </div>
            
          

          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>



@endsection