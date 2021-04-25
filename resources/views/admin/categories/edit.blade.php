{{-- master page --}}
@extends('admin.layouts.master')

{{-- dynamic page --}}
@section('page-content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                                    <div class="col-md-6 col-md-offset-2">
                                        @if (session('success'))
                                            <div class="mb-2 alert alert-success">{{ session('success') }}</div>
                                        @endif
                                        @if (session('error'))
                                            <div class="mb-2 alert alert-danger">{{ session('error') }}</div>
                                        @endif
                                        <form action="{{ route('categories.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input type="text" class="form-control" name="category_name"
                                                    value="{{ $category->category_name }}">
                                                @error('category_name')
                                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" Value="Save">
                                            </div>
                                        </form>
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
