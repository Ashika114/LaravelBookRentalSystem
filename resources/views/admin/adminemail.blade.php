@extends('admin/adminlayout')
@section('title','Author Form')
<style>
  label {
    font-size:20px;
    font-weight:bold;
  }
  #row{
    margin-top: 20px;
  }
</style>
@section('details')
<section class="vh-200">
<form action="/admincomm" method="post" enctype="multipart/form-data">
@csrf
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          @if(Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
              @php
                  Session::forget('success');
              @endphp
          </div>
          @endif
            <h3 class="mb-4">Mail to Owner</h3>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="aname">Select Owner</label>
              </div>
              <div class="col">
              <select  id="country-dropdown" name="txtowner" class="form-control">
                            @foreach ($owner as $data)
                            <option  value="{{$data->emailid}}">
                                {{$data->emailid}}
                            </option>
                            @endforeach
                </select>
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="aemail">Message</label>
              </div>
              <div class="col">
              <textarea class="form-control" name="txtmessage" rows="6" required></textarea>
              </div>
            </div>

            
            <div class="row" id="row">
              <div class="col-6">
                <button class="btn btn-success btn-lg btn-block" name="btnsave" type="submit">SAVE</button>
              </div>
              <div class="col">
                <button class="btn btn-success btn-lg btn-block" name="btncancel" type="submit">CANCEL</button>
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