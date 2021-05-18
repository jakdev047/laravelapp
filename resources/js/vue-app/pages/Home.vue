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
        methods:{
            getProducts(){
                const dbProducts = [
                    {
                        title: 'IPhone-555',
                        slug: 'product-slug1',
                        price: 75000,
                        image: 'https://via.placeholder.com/1000',
                    },
                    {
                        title: 'IPhone-666',
                        slug: 'product-slug2',
                        price: 85000,
                        image: 'https://via.placeholder.com/1000',
                    },
                ];
                return dbProducts;
            }
        },
        created () {
            this.products = this.getProducts();
        },
        mounted () {
            // this.getProducts();
            console.log("mounted");
        },
        computed : {
            // vuex call
        }
    }
</script>
