@extends('templates.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Shippings</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Creation Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shippings as $shipping)
            <tr>
                <td>{{ $shipping->id }}</td>
                <td>{{ $shipping->name }}</td>
                <td>{{ $shipping->created_at }}</td>
                <td>Ver</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection