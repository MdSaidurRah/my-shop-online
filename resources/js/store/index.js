import { createStore } from "vuex";
import axios from 'axios'

export default createStore({
  state: {
    'productSale':'0',
    'copySale':'0',
    'printSale':'0',
    'duePayment':'0',
    'collection':'0',
    'expenses':'0',
    'productTable':[],
    'copyTable':[],
    'printTable':[],
    'dueTable':[],
    'collectionTable':[],
    'expenseTable':[],
  },

  mutations: {
    loadProductTable: (state, data) => {
      state.productTable = data;
    },        
    loadCopyTable: (state, data) => {
      state.copyTable = data;
    },      
    loadPrintTable: (state, data) => {
      state.printTable = data;
    },       
    loadDueTable: (state, data) => {
      state.dueTable = data;
    },      
    loadCollectionTable: (state, data) => {
      state.collectionTable = data;
    },      
    loadExpenseTable: (state, data) => {
      state.expenseTable = data;
    },    
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
    },    
    loadExpenses: (state, data) => {
      state.expenses = data;
    }
  },

  getters:
  {
    productTables: (state, data) => {
      return state.productTable ;
    },        
    copyTables: (state, data) => {
      return state.copyTable ;
    },      
    printTables: (state, data) => {
      return state.printTable;
    },       
    dueTables: (state, data) => {
      return state.dueTable;
    },      
    collectionTables: (state, data) => {
      return state.collectionTable;
    },      
    expenseTables: (state, data) => {
      return state.expenseTable;
    }, 

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
    },
    expenses: state => {
      return state.expenses
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
                                commit('loadExpenses',response.data.expenses)
                            }                          
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
    },

    dataTable({ commit }) {
      axios.get('/all-data-table')
                .then(function (response) {

              
                            if(response.data.status =='success')
                            {
                                commit('loadProductTable', response.data.productSale)
                                commit('loadCopyTable', response.data.copySale)
                                commit('loadPrintTable',response.data.printSale)
                                commit('loadDueTable', response.data.dueAmount)
                                commit('loadCollectionTable',response.data.collection)
                                commit('loadExpenseTable',response.data.expenses)
                            }                          
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
    }


  }




});