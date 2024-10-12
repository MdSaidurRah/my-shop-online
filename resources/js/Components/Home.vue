
<template>

    <div class="content">

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{saleAmout}} Product Sales </h1>
                        <hr/>
                        <router-link to="/product-form" class="btn btn-primary mb-2">+ Product Sales Date</router-link> 
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{printAmount}} Print Sales </h1>
                        <hr/>
                        <router-link to="/print-form" class="btn btn-primary mb-2">+ Print Sales Data</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{copyAmount}} Copy Sales </h1>
                        <hr/>
                        <router-link to="/copy-form" class="btn btn-primary mb-2">+ Copy Sales Data</router-link> 

                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{dueAmount}} Due Payment </h1>
                        <hr/>
                        <router-link to="/due-payment" class="btn btn-primary mb-2">+ Due Payment</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{collectionAmount}} Collections </h1>
                        <hr/>
                        <form class="form-inline">
                            <tr>
                                <td><input type="number" class="form-input"   id="inputPassword2" placeholder="Password"></td>
                                <td><button type="submit" class="btn btn-primary mb-2">+ Sale</button></td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>

</template>


<script >


import axios from 'axios'
import store from '../store/index';
import { RouterLink } from 'vue-router';

export default {

    name: 'Payment Action',
    data()
    {
        return {
            'saleAmout':'',
            'printAmount':'',
            'copyAmount':'',
            'dueAmount':'',
            'collectionAmount':'',
            'salesDate':
            {
                'saleQuantity':''
            }
        }
    },

 
    mounted()
    {
        this.$store.dispatch('fetchAppData');     
        this.saleAmout = store.getters.productSales
        this.printAmount = store.getters.printSales
        this.copyAmount = store.getters.copySales
        this.dueAmount = store.getters.duePayemnts
        this.collectionAmount = store.getters.collections
    },

    watch()
    {

    },

    methods: {

        async addProductSale()
        {
            
            await axios.post('/add-product-salse',this.salesDate)
                .then(function (response) {
                    if(response.data.status =='SUCCESS')
                        {
                            alert("Product Sale Save Successfully")
                            store.commit('loadProductSale',response.data.productSale)
                        }
                    })
                    .catch(function (error) {
                         console.log(error);
                    });
        },




       


    }

}



</script>








<style>


.form-input
{
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #787878;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    appearance: none;
    border-radius: 10px;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    margin: 5px;
}

</style>
