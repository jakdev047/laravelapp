{{-- master page --}}
@extends('admin.layouts.master')

{{-- dynamic page --}}
@section('page-content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product Create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
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
                                        <form action="{{ route('products.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name">
                                                @error('name')
                                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select name="category_id" class="form-control">
                                                    <option value="">Choose Category</option>

                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}">
                                                            {{ $item->category_name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                @error('category_id')
                                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="number" class="form-control" name="price">
                                                @error('price')
                                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" class="form-control" name="quantity">
                                                @error('quantity')
                                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image">
                                                @error('image')
                                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" cols="15" rows="5" class="form-control">

                                                                    </textarea>
                                                @error('description')
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
