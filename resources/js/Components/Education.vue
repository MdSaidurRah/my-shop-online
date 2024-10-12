

<template>

    <div class="content">
        <h2>{{degree}}</h2>
        
        <button type="" v-on:click="getDegree">Get Degree</button>
        <button type="" v-on:click="getData">Get Data</button>
    </div>

</template>


<script >

import {computed} from 'vue';
import {useStore} from "vuex";
import axios from 'axios';
import { ref } from 'vue'


export default {
  name: 'Education',

  mounted() {
    this.getData()
    console.log('Mounted hook called')
  },

   

  setup()
  {

    const count = ref(0)
    
     function getDegree()
     {
        store.commit('changeDegree','PhD Degree')
     }

     async function getData()
     {
        try {
            await axios.get('/get-education')
                .then(response =>  this.count= response.data.education )   
                 console.log( this.count[0].instituteName)
        } catch (error) {
                console.log(error)
        }
        
     }
     
    
    const store = useStore();

    let degree = computed(function () {
      return store.state.degree
    });
   
    return {
      degree,
      count,
      getData,
      getDegree
    }
  }
}

</script>





<style scoped>

</style>
