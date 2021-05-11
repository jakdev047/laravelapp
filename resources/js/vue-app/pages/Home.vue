<template>
    <div class="App">
        <div class="container">
            <h3>{{title}}</h3>
            <hr />
            <div class="row">
                <div class="col-md-3 my-2" v-for="(product,key) in products" :key="key">
                    <div class="card">
                        <img :src="product.image" class="card-img-top" alt="image">
                        <div class="card-body">
                            <router-link 
                                :to="{name: 'product-page', params: {'slug': '1'}}" class="card-title text-info"
                            >
                            {{product.title}}
                            </router-link>
                            <p class="card-text">{{product.price}} BDT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'home-page',
        data:()=>({
            title: 'Product List',
            products: [] 
        }),
        methods:{
            getProducts(){
                const dbProducts = [
                    {
                        title: 'IPhone-555',
                        price: 75000,
                        image: 'https://via.placeholder.com/1000',
                    },
                    {
                        title: 'IPhone-666',
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
