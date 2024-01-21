@extends('assets.app')
  
@section('title', 'Create Asset')
  
@section('contents')
    <h3 class="mb-0">Add New Asset</h3>
    <hr />
    <form action="{{ route('assets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
            <label class="form-label">Add Organisation</label>
                <input type="text" name="add_org" class="form-control" placeholder="Title">
            </div>
            <div class="col">
            <label class="form-label">Indrustry Type</label>
            <!-- <select class="form-control" size="3" aria-label="size 3 select example" name="indrustry_type">
                <option selected>Select one</option>
                <option value="1">Banking</option>
                <option value="2">Insurance</option>
                <option value="3">Fintech</option>
                <option value="3">etc</option>
            </select> -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01"></label>
                </div>
                <select class="custom-select form-control" id="inputGroupSelect02" name="indrustry_type">
                  <option selected>Choose...</option>
                  <option value="1">Banking</option>
                  <option value="2">Insurance</option>
                  <option value="3">Fintech</option>
                  <option value="4">etc</option>
                </select>
            </div>
            </div> 
        </div>
        <div class="row mb-3">
        <div class="col">
                <label class="form-label">Asset Name</label>
                <input type="text" name="asset_name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
               <label class="form-label">Asset Type</label>  
                <!-- <select class="form-control" size="3" aria-label="size 3 select example" name="type">
                <option selected>Select</option>
                <option value="1">Internal Hosted Application</option>
                <option value="2">Cloud Hosted Application</option>
                <option value="3">Network Infrastructure</option>
                <option value="3">Process</option>
                <option value="3">People</option>
            </select> -->

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01"></label>
                </div>
                <select class="custom-select form-control" id="inputGroupSelect02" name="type">
                  <option selected>Choose...</option>
                  <option value="1">Internal Hosted Application</option>
                  <option value="2">Cloud Hosted Application</option>
                  <option value="3">Network Infrastructure</option>
                  <option value="4">Process</option>
                  <option value="5">People</option>
                  <!-- <option value="6">Process</option> -->
                </select>
            </div>

            </div>
        </div>
        <div class="row mb-3"> 
            <div class="col">
            <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
        <div class="col">
        <label class="form-label">Asset Value</label>
            <!-- <select class="form-control" size="3" aria-label="size 3 select example" name="value">
                <option selected>Select</option>
                <option value="1">High</option>
                <option value="2">Low</option>
                <option value="3">Medium</option> 
            </select> -->

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01"></label>
                </div>
                <select class="custom-select form-control" id="inputGroupSelect02" name="value">
                  <option selected>Choose...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <!-- <option value="4">etc</option> -->
                </select>
            </div>

            </div>
            <div class="row mb-3">
                <div class="col">
                <label class="form-label">Asset Owner</label>
                <input type="text" name="asset_owner" class="form-control" placeholder="Owner">
            </div>
                </div>
            </div>
        <div class="row ">
        <div class="col">
            
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection