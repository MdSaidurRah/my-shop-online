<template>
    <div class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{saleAmout}}  Product </h2>
                        <span v-for="(pd, key) in productTable" :key="pd.id">
                            <span>{{ productTable[key]['saleAmount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/product-form" class="btn btn-primary mb-2"> Product Sales Date</router-link> 
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{printAmount}} Print </h2>
                        
                        <span v-for="(pd, key) in printTable" :key="pd.id">
                            <span>{{ printTable[key]['saleAmount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/print-form" class="btn btn-primary mb-2">+ Print Sales Data</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{copyAmount}} Copy </h2>
                       
                        <span v-for="(pd, key) in copyTable" :key="pd.id">
                            <span>{{ copyTable[key]['saleAmount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/copy-form" class="btn btn-primary mb-2">+ Copy Sales Data</router-link> 

                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{dueAmount}} Due Payment </h2>
                       
                        <span v-for="(pd, key) in dueTable" :key="pd.id">
                            <span>{{ dueTable[key]['amount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/due-payment" class="btn btn-primary mb-2">+ Due Payment</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{collectionAmount}} Collections </h2>
                        
                        <span v-for="(pd, key) in collectionTable" :key="pd.id">
                            <span>{{ collectionTable[key]['amount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/collection" class="btn btn-primary mb-2">+ Collection</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h2> {{expenseData}} Expense </h2>
                        
                        <span v-for="(pd, key) in expenseTable" :key="pd.id">
                            <span>{{ expenseTable[key]['expenseAmount']}}</span>+
                        </span>
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
            'expenseData':'',

            'productTable':[],
            'copyTable':[],
            'printTable':[],
            'dueTable':[],
            'collectionTable':[],
            'expenseTable':[],
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

        this.productTable = store.getters.productTables
        this.copyTable = store.getters.copyTables
        this.printTable = store.getters.printTables
        this.dueTable = store.getters.dueTables
        this.collectionTable = store.getters.collectionTables
        this.expenseTable = store.getters.expenseTables

        console.log(this.expenseTable)
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
