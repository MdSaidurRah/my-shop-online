<template>
    <div class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-gift item-icon"></i> Product </h4>
                        <span v-for="(pd, key) in productTable" :key="pd.id">
                            <span class="data-value">{{ productTable[key]['saleAmount']}}</span>+
                        </span>
                        <router-link to="/product-form" class="btn btn-warning mb-2"> <i class="fas fa-plus"></i> <i class="fas fa-gift"></i></router-link> 
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-print item-icon"></i> Print </h4>
                        <span v-for="(pd, key) in printTable" :key="pd.id">
                            <span class="data-value">{{ printTable[key]['saleAmount']}}</span>+
                        </span>
                        <router-link to="/print-form" class="btn btn-warning mb-2"><i class="fas fa-plus"></i> <i class="fas fa-print"></i> </router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="far fa-copy item-icon"></i> Copy </h4>
                        <span v-for="(pd, key) in copyTable" :key="pd.id">
                            <span class="data-value">{{ copyTable[key]['saleAmount']}}</span>+
                        </span>
                        <router-link to="/copy-form" class="btn btn-warning mb-2"><i class="fas fa-plus"></i> <i class="far fa-copy"></i> </router-link> 

                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-sync-alt item-icon"></i> Dues </h4>
                        <span v-for="(pd, key) in dueTable" :key="pd.id">
                            <span class="data-value">{{ dueTable[key]['amount']}}</span>+
                        </span>
                        <router-link to="/due-payment" class="btn btn-warning mb-2"><i class="fas fa-plus"></i> <i class="fas fa-sync-alt"></i></router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-hand-holding-heart item-icon"></i> Collections </h4>
                        <span v-for="(pd, key) in collectionTable" :key="pd.id">
                            <span class="data-value">{{ collectionTable[key]['amount']}}</span>+
                        </span>
                        <router-link to="/collection" class="btn btn-warning mb-2"><i class="fas fa-plus"></i> <i class="fas fa-hand-holding-heart"></i></router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-tasks item-icon"></i> Expense </h4>
                        <span v-for="(pd, key) in expenseTable" :key="pd.id">
                            <span class="data-value">{{ expenseTable[key]['expenseAmount']}}</span>+
                        </span>
                        <router-link to="/expenses" class="btn btn-warning mb-2"><i class="fas fa-plus"></i> <i class="fas fa-tasks"></i></router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-tasks item-icon"></i> Cash </h4>
                        <span v-for="(pd, key) in cashAmountTable" :key="pd.id">
                            <span class="data-value">{{ cashAmountTable[key]['amount']}}</span>+
                        </span>
                        <router-link to="/cash-amount" class="btn btn-warning mb-2"><i class="fas fa-plus"></i> <i class="fas fa-tasks"></i></router-link> 
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
            'productTable':[],
            'copyTable':[],
            'printTable':[],
            'dueTable':[],
            'collectionTable':[],
            'expenseTable':[],
            'cashAmountTable':[],
        }
    },
 
    mounted()
    {   
        this.dataTable()
    },


    methods: 
    {
         async dataTable() 
         {
            let res = await axios.get("/all-data-table", this.report);
            this.productTable = res.data.productSale
            this.copyTable = res.data.copySale
            this.printTable = res.data.printSale
            this.dueTable = res.data.dueAmount
            this.collectionTable = res.data.collection
            this.expenseTable = res.data.expenses
            this.cashAmountTable = res.data.cashAmount
        }
    }
    

}


</script>








<style>

.item-icon
{
    background: #dddddd;
    padding: 6px;
    color: #853e15;
    border-radius: 4px;
}

.data-value
{
    font-size: 20px;
    color: #b5006b;
    font-weight: bold;

}

</style>
