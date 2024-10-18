<template>
    <div class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-gift"></i> Product </h4>
                        <span v-for="(pd, key) in productTable" :key="pd.id">
                            <span class="data-value">{{ productTable[key]['saleAmount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/product-form" class="btn btn-primary mb-2"> <i class="far fa-plus-square"></i> Product Sales </router-link> 
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-print"></i> Print </h4>
                        
                        <span v-for="(pd, key) in printTable" :key="pd.id">
                            <span class="data-value">{{ printTable[key]['saleAmount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/print-form" class="btn btn-primary mb-2"><i class="far fa-plus-square"></i> Print Sales </router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="far fa-copy"></i> Copy </h4>
                       
                        <span v-for="(pd, key) in copyTable" :key="pd.id">
                            <span class="data-value">{{ copyTable[key]['saleAmount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/copy-form" class="btn btn-primary mb-2"><i class="far fa-plus-square"></i> Copy Sales </router-link> 

                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-sync-alt"></i> Due Payment </h4>
                       
                        <span v-for="(pd, key) in dueTable" :key="pd.id">
                            <span class="data-value">{{ dueTable[key]['amount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/due-payment" class="btn btn-primary mb-2"><i class="far fa-plus-square"></i> Due Payment</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-hand-holding-heart"></i> Collections </h4>
                        
                        <span v-for="(pd, key) in collectionTable" :key="pd.id">
                            <span class="data-value">{{ collectionTable[key]['amount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/collection" class="btn btn-primary mb-2"><i class="far fa-plus-square"></i> Collection</router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-tasks"></i> Expense </h4>
                        
                        <span v-for="(pd, key) in expenseTable" :key="pd.id">
                            <span class="data-value">{{ expenseTable[key]['expenseAmount']}}</span>+
                        </span>
                        <hr/>
                        <router-link to="/expenses" class="btn btn-primary mb-2"><i class="far fa-plus-square"></i> Expenses</router-link> 
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


.data-value
{
    font-size: 20px;
    color: #b5006b;
    font-weight: bold;

}

</style>
