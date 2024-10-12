<template>
    <div class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{saleAmout}} Product Sales </h2>
                        <hr/>
                        <router-link to="/product-form" class="btn btn-primary mb-2">+ Product Sales Date</router-link> 
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2><i  class="pi pi-print" style="font-size: 1rem; font-size: 30px;"></i> {{printAmount}} Print Sales </h2>
                        <hr/>
                        <router-link to="/print-form" class="btn btn-primary mb-2">+ Print Sales Data</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2><i  class="pi pi-copy" style="font-size: 1rem; font-size: 30px;"></i> {{copyAmount}} Copy Sales </h2>
                        <hr/>
                        <router-link to="/copy-form" class="btn btn-primary mb-2">+ Copy Sales Data</router-link> 

                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2> {{dueAmount}} Due Payment </h2>
                        <hr/>
                        <router-link to="/due-payment" class="btn btn-primary mb-2">+ Due Payment</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2> {{collectionAmount}} Collections </h2>
                        <hr/>
                        <router-link to="/collection" class="btn btn-primary mb-2">+ Collection</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2> {{expenseData}} Expense </h2>
                        <hr/>
                        <router-link to="/expenses" class="btn btn-primary mb-2">+ Expenses</router-link> 
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
    data()
    {
        return {
            'saleAmout':'',
            'printAmount':'',
            'copyAmount':'',
            'dueAmount':'',
            'collectionAmount':'',
            'expenseData':''
        }
    },
 
    mounted()
    {   
        this.saleAmout = store.getters.productSales
        this.printAmount = store.getters.printSales
        this.copyAmount = store.getters.copySales
        this.dueAmount = store.getters.duePayemnts
        this.collectionAmount = store.getters.collections
        this.expenseData = store.getters.expenses
    },



    

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
