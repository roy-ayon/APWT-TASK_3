@extends('layouts.app')
@if(Session::get('user_id')) 
        

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="{{route('flatOwnerDash')}}" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="{{route('advertisement')}}" class="list-group-item list-group-item-action">Advertisement</a>
              <a href="{{route('advertisementlist')}}" class="list-group-item list-group-item-action">Advertisement List</a>
              <a href="#" class="list-group-item list-group-item-action">Change Password</a>
              <a href="#" class="list-group-item list-group-item-action">Payment</a>
              <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form>
                              <div class="form-group row">
                                <label for="flatownerid" class="col-4 col-form-label">ID :</label> 
                                <div class="col-8">
                                  <input id="flatownerid" name="flatownerid" value="{{old('flatownerid')}}"class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatownername" class="col-4 col-form-label">Name :</label> 
                                <div class="col-8">
                                  <input id="flatownername" name="flatownername" value="{{old('flatownername')}}" placeholder="flatownername" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatowneraddress" class="col-4 col-form-label">Address :</label> 
                                <div class="col-8">
                                  <input id="flatowneraddress" name="flatowneraddress" value="{{old('flatowneraddress')}}" placeholder="flatowneraddress" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatownerphone" class="col-4 col-form-label">Phone number :</label> 
                                <div class="col-8">
                                  <input id="flatownerphone" name="flatownerphone" placeholder="flatownerphone" class="form-control here" required="required" type="tel">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Gender :</label> 
                                <div class="col-8">
                                  <select id="select" name="select" class="custom-select">
                                    <option value="admin">Female</option>
                                    <option value="admin">Male</option>
                                    <option value="admin">Others</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatownernid" class="col-4 col-form-label">NID :</label> 
                                <div class="col-8">
                                  <input id="flatownernid" name="flatownernid" placeholder="NID" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatownerdob" class="col-4 col-form-label">DOB :</label> 
                                <div class="col-8">
                                  <input id="flatownerdob" name="flatownerdob" placeholder="flatownerdob" class="form-control here" type="date">
                                </div>
                              </div>
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection

@endif