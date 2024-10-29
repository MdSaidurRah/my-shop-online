<template>
    <div class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-gift item-icon"></i> BKash </h4>
                        <span v-for="(pd, key) in productTable" :key="pd.id">
                            <span class="data-value">{{ productTable[key]['saleAmount']}}</span>+
                        </span>
                        <router-link to="/bkash-form" class="btn btn-warning mb-2"> <i class="fas fa-plus"></i> <i class="fas fa-gift"></i></router-link> 
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-print item-icon"></i> Nogod </h4>
                        <span v-for="(pd, key) in printTable" :key="pd.id">
                            <span class="data-value">{{ printTable[key]['saleAmount']}}</span>+
                        </span>
                        <router-link to="/nogod-form" class="btn btn-warning mb-2"><i class="fas fa-plus"></i> <i class="fas fa-print"></i> </router-link> 
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="far fa-copy item-icon"></i> Rocket </h4>
                        <span v-for="(pd, key) in copyTable" :key="pd.id">
                            <span class="data-value">{{ copyTable[key]['saleAmount']}}</span>+
                        </span>
                        <router-link to="/rocket-form" class="btn btn-warning mb-2"><i class="fas fa-plus"></i> <i class="far fa-copy"></i> </router-link> 

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
        }
    },
 
    mounted()
    {   
        this.productTable = store.getters.productTables
        this.copyTable = store.getters.copyTables
        this.printTable = store.getters.printTables
        this.dueTable = store.getters.dueTables
        this.collectionTable = store.getters.collectionTables
        this.expenseTable = store.getters.expenseTables
    },



    

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
