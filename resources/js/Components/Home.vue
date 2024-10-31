<template>
    <div class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" >
                    <div class="card-body">
                        <router-link to="/shop" class="btn btn-success mb-2">My Shop</router-link> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" >
                    <div class="card-body">
                        <router-link to="/mobile-banking" style="margin-right:5px" class="btn btn-sm btn-success mb-2">Mobile Banking</router-link>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script >

import store from '../store/index';

export default {
    name: 'Payment Action',
     mounted()
    {
        this.$store.dispatch('dataTable');     
    } 
}

</script>



<style>


</style>
