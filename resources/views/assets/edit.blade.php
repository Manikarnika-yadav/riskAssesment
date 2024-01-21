@extends('assets.app')
  
@section('title', 'Edit Asset')
  
@section('contents')
    <h1 class="mb-0">Edit Asset</h1>
    <hr />
    <form action="{{ route('assets.update', $asset->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Add Organisation</label>
                <!-- <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" > -->
                <input type="text" name="add_org" class="form-control" placeholder="Title" value="{{ $asset->add_org }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Indrustry Type</label>
                <!-- <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" > -->
                <select class="form-control" size="3" aria-label="size 3 select example" name="indrustry_type" value="{{ $asset->indrustry_type }}" readonly>
                <option selected>Select one</option>
                <option value="1">Banking</option>
                <option value="2">Insurance</option>
                <option value="3">Fintech</option>
                <option value="3">etc</option>
            </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Asset Name</label>
                <!-- <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" > -->
                <input type="text" name="asset_name" class="form-control" placeholder="Name" value="{{ $asset->asset_name }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Asset Type</label>
                <!-- <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" > -->
                <select class="form-control" size="3" aria-label="size 3 select example" name="type" value="{{ $asset->type }}" readonly>
                <option selected>Select</option>
                <option value="1">Internal Hosted Application</option>
                <option value="2">Cloud Hosted Application</option>
                <option value="3">Network Infrastructure</option>
                <option value="3">Process</option>
                <option value="3">People</option>
            </select>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col mb-3">
                <label class="form-label">Asset Description</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" >
            </div> -->
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <!-- <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea> -->
                <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $asset->description }}></textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Asset Value</label>
                <!-- <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" > -->
                <select class="form-control" size="3" aria-label="size 3 select example" name="value" value="{{ $asset->value }}" readonly>
                <option selected>Select</option>
                <option value="1">High</option>
                <option value="2">Low</option>
                <option value="3">Medium</option> 
            </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Asset Owner</label>
                <!-- <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" > -->
                <input type="text" name="asset_owner" class="form-control" placeholder="Owner" value="{{ $product->asset_owner }}" readonly>
            </div>
            
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection