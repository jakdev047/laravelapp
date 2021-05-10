<template>
    <div class="App">
        <app-header />
        <h2>Home Component</h2>
        <app-footer />
    </div>
</template>


<script>
    import AppHeader from '../components/Header';
    import AppFooter from '../components/Footer';

    export default {
        components: {
            AppHeader,
            AppFooter
        }
    }
</script>

<style scoped>
    h2 {
        color: #eb1b33;
    }
</style>