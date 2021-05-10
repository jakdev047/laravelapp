<template>
    <div class="container">
        <h3 class="mt-5">Checkout</h3>
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="media">
                    <div style="width: 30%" class="mr-5">
                        <img src="https://via.placeholder.com/1000" class="card-img-top" alt="image">
                    </div>
                    <div class="media-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">
                            Price: 40 BDT
                        </p>
                        <p class="card-text">
                            Quantity: 12
                        </p>
                    </div>
                </div>
                <hr />
                <div class="checkout-total text-right">
                    <strong>Total: 500 BDT Only</strong>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shipping-info">
                    <div class="card">
                        <div class="card-body">
                            <h3>Shipping Information</h3>
                            <form action="#" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="customer_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="customer_phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="customer_email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="customer_address" class="form-control">

                                                        </textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning">Place Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>