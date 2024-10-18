import { createStore } from "vuex";
import axios from 'axios'

export default createStore({
  state: {
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

  },

  actions: {


    dataTable({ commit }) {
      axios.get('https://eduinntech.com/shop/all-data-table')
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