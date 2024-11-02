import { createStore } from "vuex";
import axios from 'axios'

export default createStore({
  state: {
    'dueItemId':'',
    'selectedDue':[]
  },

  mutations: {
  
    loadSelectedDue: (state, data) => {
      state.selectedDue = data;
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
   
  },

  

});