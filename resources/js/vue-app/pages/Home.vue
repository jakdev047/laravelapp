<template>
    <div class="App">
        <div class="container">
            <h3>{{title}}</h3>
            <hr />
            <div class="row">
                <div class="col-md-3 my-2" v-for="(product,key) in products" :key="key">
                    <product-item :product="product" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ProductItem from "../components/ProductItem";
    export default {
        name: 'home-page',
        components: {
            ProductItem
        },
        data:()=>({
            title: 'Product List',
            products: [] 
        }),
        methods:{},
        async created () {
          await this.$store.dispatch('loadProducts');
          this.products =  this.$store.getters.getProducts;
        },
        mounted () {},
        computed : {}
    }
</script>
