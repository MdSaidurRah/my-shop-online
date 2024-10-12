<template>
    <div class="container">
        <Header></Header>
        <div class="">
             <router-view > </router-view>
        </div>       
        <Footer></Footer>
    </div>
</template>

<script >



import  Header from "./Components/Layouts/Header.vue"
import  Footer from "./Components/Layouts/Footer.vue"

export default {
    name: 'Master-layout',
    data() {
        return {
           
        }
    },

    components: {
        Header,Footer

        }
    
}




</script>


<style>

</style>
