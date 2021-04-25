{{-- master page --}}
@extends('admin.layouts.master')

{{-- dynamic page --}}
@section('page-content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Category List</li>
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
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table id="categoryList" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Category Name</th>
                                                    <th>Slug</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $item)
                                                    <tr>
                                                        <td>{{ $item->category_name }}</td>
                                                        <td>{{ $item->slug }}</td>
                                                        <td>
                                                            <a href="{{ route('categories.edit', $item->id) }}"
                                                                class="btn btn-outline-primary">
                                                                Edit
                                                            </a>
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
