{{-- master page --}}
@extends('frontend.layouts.master')

{{-- dynamic page --}}
@section('main-content')
    <div class="container">
        <h3>Product List</h3>
        <hr />
        <div class="row">
            <div class="col-md-3 my-2">
                <div class="card">
                    <img src="https://via.placeholder.com/1000" class="card-img-top" alt="image">
                    <div class="card-body">
                        <a href="/product/1">
                            <h5 class="card-title text-info">
                                Title
                            </h5>
                        </a>
                        <p class="card-text">40 BDT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
