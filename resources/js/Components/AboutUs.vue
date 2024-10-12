

<template>

    <div class="content">
        <h2>About Us</h2>
        <p>{{description}}</p>
    </div>

</template>


<script >

import {computed} from 'vue';
import {useStore} from "vuex";


export default {
  name: 'About US',
 
  setup(){


    function getData()
    {
        return "dddddddddddddddddddddd"
    }


    const store = useStore();

    let description = computed(function () {
      return store.state.description
    });
   
    return {
      description
    }
  }
}

</script>

<style scoped>

</style>
