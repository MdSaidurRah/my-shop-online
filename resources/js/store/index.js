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
    'dueItemId':'',
    'selectedDue':[]
  },

  mutations: {
  
    loadSelectedDue: (state, data) => {
      state.selectedDue = data;
    },       
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
    loadDueItemId: (state, data) => {
      state.dueItemId = data;
    },    
   
  },

  getters:
  {
  
    selectedDue: (state, data) => {
      return state.selectedDue[0] ;
    },    
    dueItem: (state, data) => {
      return state.dueItemId ;
    },    
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