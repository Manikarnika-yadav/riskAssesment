@extends('assets.app')
  
@section('title', 'Home Asset')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Asset</h1>
        <a href="{{ route('assets.create') }}" class="btn btn-primary">Add Asset</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Add Organisation</th>
                <th>Indrustry Type</th>
                <th>Asset Name</th>
                <th>Asset Type</th>
                <th>Asset Description</th>
                <th>Asset Value</th>
                <th>Asset Owner</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($asset->count() > 0)
                @foreach($asset as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->add_org }}</td>
                        <td class="align-middle">{{ $rs->indrustry_type }}</td>
                        <td class="align-middle">{{ $rs->asset_name }}</td>
                        <td class="align-middle">{{ $rs->type }}</td>  
                        <td class="align-middle">{{ $rs->description }}</td>  
                        <td class="align-middle">{{ $rs->value }}</td>  
                        <td class="align-middle">{{ $rs->asset_owner }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('assets.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('assets.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                 
                                <form action="{{ route('assets.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Asset not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection