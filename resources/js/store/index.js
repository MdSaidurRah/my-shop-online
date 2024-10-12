import { createStore } from "vuex";

export default createStore({
  state: {
    'productSale':'',
    'copySale':'',
    'printSale':'',
    'duePayment':'',
    'collection':''
  },

    mutations: {
    loadProductSale: (state, productSale) => {
      state.productSale = productSale;
    },
    loadCopySale: (state, copySale) => {
      state.copySale = copySale;
    },

    loadPrintSale: (state, printSale) => {
      state.printSale = printSale;
    },

    loadDuePayment: (state, duePayment) => {
      state.duePayment = duePayment;
    },

    loadCollection: (state, collection) => {
      state.collection = collection;
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




});
