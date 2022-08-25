@extends('owner/ownerlayout')
@section('title','owner home')
@section('header','UPDATE  PROFILE')
@section('details')
<form action="/ownerupdate" method="post" enctype="multipart/form-data" class="cool-form">
    @csrf
<div class="col-lg-12">
    <div class="row">

        <div class="col-lg-6">       
                                       
            <div class="form-group">
                <label for="ownername" class="form-label">Ownername</label>
                <input type="text" class="form-control" name="txtownername" id="ownername" value="{{$owner['ownername']}}"> 
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control"  name="txtaddress" id="address" rows="3">{{$owner['address']}}</textarea>
            </div>
            <div class="form-group col-lg-6" style="padding-left: 0;" >
                <label for="pincode" class="form-label">Pincode</label>
                <input type="text" class="form-control" name="txtpincode" id="pincode" value="{{$owner['pincode']}}"> 
            </div>
            <div class="form-group col-lg-6" style=" padding-right: 0">
                <label for="birthdate" class="form-label">Birth Date</label>
                <input type="Date" class="form-control" name="txtbirthdate" id="birthdate"  value="{{$owner['birthdate']}}"> 
            </div>
            <div class="form-group">
                <label for="contactno" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="txtcontactno" id="contactno"  value="{{$owner['contactno']}}"> 
            </div>
            <div class="form-group">
                <label for="emailid" class="form-label">EmailID</label>
                <input type="email" class="form-control" name="txtemailid" id="emailid"  value="{{$owner['emailid']}}"> 
            </div>
                                   
                                     
                                  
        </div>
        <!-- /.col-lg-6 (nested) -->
        <div class="col-lg-6">
            <div class="form-group">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" name="txtcity" id="city"  value="{{$owner['city']}}"> 
            </div>
            <div class="form-group">
            <p class="form-label">GENDER:</p>
                 <input type="radio" id="male" name="gender" value="male">
                 <label for="male">Male</label>
                 <input type="radio" id="female" name="gender" value="female">
                 <label for="female">Female</label>
                 <input type="radio" id="other" name="gender" value="other">
                 <label for="other">Other</label>
            </div>
            <div class="form-group">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" name="fupimage" id="photo"> 
            </div>

            <div class="form-group col-lg-6" style="padding-right: 0px;">                    
                
            </div>
                             
        </div>
        <!-- /.col-lg-6 (nested) -->
        <div class="col-lg-12">
            <div class="form-group">
                <button type="submit" class="btn btn-success " name="btnupdate" style=" font-weight: bold; font-size: 20px;">UPDATE</button>
                <button type="submit" class="btn btn-success pull-right" name="btncancel" style=" font-weight: bold; font-size: 20px;">CANCEL</button>
            </div>
        </div>
    </div>
</div>
</form>


@endsection