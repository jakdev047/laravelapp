{{-- master page --}}
@extends('admin.layouts.master')

{{-- dynamic page --}}
@section('page-content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="mb-2 alert alert-success">{{ session('success') }}</div>
                                @endif
                                @if (session('error'))
                                    <div class="mb-2 alert alert-danger">{{ session('error') }}</div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table id="categoryList" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Name</th>
                                                    <th>Slug</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Description</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->slug }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ $item->description }}</td>
                                                        <td>
                                                            <a href="{{ route('products.edit', $item->id) }}"
                                                                class="btn btn-outline-primary">
                                                                Edit
                                                            </a>
                                                            <form class="d-inline"
                                                                action="{{ route('products.destroy', $item->id) }}"
                                                                method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-danger">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
