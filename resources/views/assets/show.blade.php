@extends('assets.app')
  
@section('title', 'Show Asset')
  
@section('contents')
    <h3 class="mb-0">Detail Information</h3>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Add Organisation</label>
            <input type="text" name="add_org" class="form-control" placeholder="Title" value="{{ $asset->add_org }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Indrustry Type</label>
           <!--  <select class="form-control" size="3" aria-label="size 3 select example" name="indrustry_type" value="{{ $asset->indrustry_type }}" readonly>
                <option selected>Select one</option>
                <option value="1">Banking</option>
                <option value="2">Insurance</option>
                <option value="3">Fintech</option>
                <option value="3">etc</option>
            </select>
        </div> -->

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01"></label>
                </div>
                <select class="custom-select form-control" id="inputGroupSelect02" name="indrustry_type" value="{{ $asset->indrustry_type }}" readonly>
                  <option selected>Choose...</option>
                  <option value="1">Banking</option>
                  <option value="2">Insurance</option>
                  <option value="3">Fintech</option>
                  <option value="4">etc</option>
                </select>
            </div>

    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Asset Name</label>
            <input type="text" name="asset_name" class="form-control" placeholder="Name" value="{{ $asset->asset_name }}" readonly>
        </div>
         <div class="col mb-3">
            <label class="form-label">Asset Type</label>
           <!-- <select class="form-control" size="3" aria-label="size 3 select example" name="type" value="{{ $asset->type }}" readonly>
                <option selected>Select</option>
                <option value="1">Internal Hosted Application</option>
                <option value="2">Cloud Hosted Application</option>
                <option value="3">Network Infrastructure</option>
                <option value="3">Process</option>
                <option value="3">People</option>
            </select>
        </div> -->

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01"></label>
                </div>
                <select class="custom-select form-control" id="inputGroupSelect02" name="type" value="{{ $asset->type }}" readonly>
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
    <div class="row">
        <div class="col mb-3">
        <div class="col mb-3">
            <label class="form-label">Description</label>
             
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $asset->description }}></textarea>
        </div>
            <label class="form-label">Asset Value</label>
             
            <!-- <select class="form-control" size="3" aria-label="size 3 select example" name="value" value="{{ $asset->value }}" readonly>
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
        <div class="col mb-3">
            <label class="form-label">Asset Owner</label>
             
            <input type="text" name="asset_owner" class="form-control" placeholder="Owner" value="{{ $asset->asset_owner }}" readonly>
        </div>
    </div>
@endsection