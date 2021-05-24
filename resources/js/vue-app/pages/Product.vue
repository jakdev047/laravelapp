<template>
    <div class="container">
        <h3 class="mt-5">Single Product</h3>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="media">
                    <div style="width: 30%" class="mr-5">
                        <img :src="`/${product.image}`" class="card-img-top" alt="image">
                    </div>
                    <div class="media-body">
                        <h5 class="card-title">{{ product.name}}</h5>
                        <p class="card-text">
                            Price: {{ product.price }} BDT
                        </p>
                        <p class="card-text">
                            Quantity: {{ product.quantity }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <h2>{{ product.name }}</h2>
                <p>{{ product.description }}</p>
                <div class="buy-now my-3">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-1">
                                <input type="number" min="1" name="quantity" v-model.number="checkoutQuantity" class="form-control mr-3">
                            </div>
                            <div class="col-lg-2">
                                <router-link :to="{name: 'checkout-page', query: {'quantity': checkoutQuantity, 'product': product.slug} }" class="btn btn-warning">
                                Buy Now
                                </router-link>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data:()=>({
            product: {},
            checkoutQuantity: 1,
        }),
        methods:{},
        async created () {
            this.product = this.$store.getters.getProductBySlug(this.$route?.params?.slug);
        },
    }
</script>
