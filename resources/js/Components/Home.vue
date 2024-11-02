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
            
        </div>
    </div>
</template>

<script >

import store from '../store/index';

export default {
    name: 'Payment Action',
    
}

</script>



<style>


</style>
