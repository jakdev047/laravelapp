<template>
    <div class="App">

        <app-header />

        <home-page/>

        <product-page/>

        <checkout-page/>

        <app-footer />

    </div>
</template>


<script>

    // components
    import AppHeader from './components/Header';
    import AppFooter from './components/Footer';

    // pages
    import HomePage from './pages/Home';
    import ProductPage from './pages/Product';
    import CheckoutPage from './pages/Checkout';

    export default {
        components: {
            AppHeader,
            AppFooter,
            HomePage,
            ProductPage,
            CheckoutPage
        }
    }
</script>

<style scoped></style>