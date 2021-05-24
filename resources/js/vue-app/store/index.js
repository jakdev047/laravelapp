import Vue from 'vue';
import Vuex from 'vuex';
import axios from "axios";

Vue.use(Vuex);

const store = new Vuex.Store({
    modules: {},
    state: {
      products: []
    },
    actions: {
      async loadProducts({commit}){
        const res  = await axios.get('http://localhost:8000/api/products');
        const data =  res?.data?.data;
        commit('SET_PRODUCTS',data);
      }
    },
    mutations: {
      SET_PRODUCTS(state,data){
        state.products = data;
      }
    },
    getters: {
      getProducts(state) {
        return state.products;
      }
    }
  })
  
export default store;