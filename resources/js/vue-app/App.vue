<template>
    <div class="App">

        <app-header />

        <app-view />

        <app-footer />

    </div>
</template>


<script>
    // components
    import AppHeader from './components/Header';
    import AppView from './components/View';
    import AppFooter from './components/Footer';

    export default {
        components: {
            AppHeader,
            AppView,
            AppFooter,
        }
    }
</script>

<style>
    /*  transition view */
    .v-enter,
    .v-leave-to {
    opacity: 0;
    }

    .v-enter-active,
    .v-leave-active {
    transition: opacity .5s;
    }
</style>