<template>
    <div class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{saleAmout}}  Product </h2>
                        <hr/>
                        <h2> </h2>
                        <router-link to="/product-form" class="btn btn-primary mb-2"> Product Sales Date</router-link> 
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2>Print </h2>
                        <hr/>
                        <h2> {{printAmount}} </h2>
                        <router-link to="/print-form" class="btn btn-primary mb-2">+ Print Sales Data</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2> Copy </h2>
                        <hr/>
                        <h2>{{copyAmount}}</h2>
                        <router-link to="/copy-form" class="btn btn-primary mb-2">+ Copy Sales Data</router-link> 

                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2> Due Payment </h2>
                        <hr/>
                        <h2>{{dueAmount}}</h2>
                        <router-link to="/due-payment" class="btn btn-primary mb-2">+ Due Payment</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2> Collections </h2>
                        <hr/>
                        <h2>{{collectionAmount}}</h2>
                        <router-link to="/collection" class="btn btn-primary mb-2">+ Collection</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2>  Expense </h2>
                        <hr/>
                        <h2>{{expenseData}}</h2>
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
