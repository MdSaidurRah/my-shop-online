import { createStore } from "vuex";
import axios from 'axios'

export default createStore({
  state: {
    'productSale':'0',
    'copySale':'0',
    'printSale':'0',
    'duePayment':'0',
    'collection':'0'
  },

  mutations: {
    loadProductSale: (state, data) => {
      state.productSale = data;
    },
    loadCopySale: (state, data) => {
      state.copySale = data;
    },

    loadPrintSale: (state, data) => {
      state.printSale = data;
    },

    loadDuePayment: (state, data) => {
      state.duePayment = data;
    },

    loadCollection: (state, data) => {
      state.collection = data;
    }
  },

  getters:
  {
    productSales: state => {
      return state.productSale
    },
    printSales: state => {
      return state.printSale
    },
    copySales: state => {
      return state.copySale
    },
    duePayemnts: state => {
      return state.duePayment
    },
    collections: state => {
      return state.collection
    }
  },

  actions: {
    fetchAppData({ commit }) {
      axios.get('/all-data')
                .then(function (response) {
                            if(response.data.status =='success')
                            {
                                commit('loadProductSale', response.data.productSale)
                                commit('loadCopySale', response.data.copySale)
                                commit('loadPrintSale',response.data.printSale)
                                commit('loadDuePayment', response.data.dueAmount)
                                commit('loadCollection',response.data.collection)
                            }                          
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
    }
  }




});
