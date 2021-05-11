import Vue from "vue";
import VueRouter from "vue-router";

// pages
import HomePage from "../pages/Home";
import ProductPage from "../pages/Product";
import CheckoutPage from "../pages/Checkout";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history", // hash
    base: "/",
    fallback: true,
    routes: [
        {
            path: "/",
            name: "home-page",
            component: HomePage
        },
        {
            path: "/product/:slug",
            name: "product-page",
            component: ProductPage
        },
        {
            path: "/checkout",
            name: "checkout-page",
            component: CheckoutPage
        }
    ]
});

export default router;
