<template>
    <div class="container">
        <h3 class="mt-5">Checkout</h3>
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="media">
                    <div style="width: 30%" class="mr-5">
                        <img :src="product.image" class="card-img-top" alt="image">
                    </div>
                    <div class="media-body">
                        <h5 class="card-title">{{ product.name }}</h5>
                        <p class="card-text">
                            Price: {{ product.price }} BDT
                        </p>
                        <p class="card-text">
                            Quantity: {{ product.quantity }}
                        </p>
                    </div>
                </div>
                <hr />
                <div class="checkout-total text-right">
                    <strong>Total: {{ product.price * product.quantity }} BDT Only</strong>
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

<script>
    import axios from "axios";
    export default {
        data:()=>({
            product: {},
            checkoutQuantity: 1,
        }),
        methods:{
            async getProduct(){
                const res  = await axios.get(`http://localhost:8000/api/product/${this.$route?.query?.product}`);
                return res?.data?.data;
            }
        },
        async created () {
            this.product = await this.getProduct();
        },
    }
</script>
