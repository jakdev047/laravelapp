<template>
    <div class="card">
        <img :src="product.image" class="card-img-top" alt="image">
        <div class="card-body">
            <router-link 
                :to="{name: 'product-page', params: {'slug': product.slug}}" class="card-title text-info"
            >
            {{product.name}}
            </router-link>
            <p class="card-text">{{product.price}} BDT</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['product']
    }
</script>