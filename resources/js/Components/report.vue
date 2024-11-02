<template>
    
    <div class="content">
        <h4> Product Sales </h4>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Tk. Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(post, key) in productSale" :key="post.id">
                    <td>{{ key+1}}</td>
                    <td>{{ post.productName }}</td>
                    <td>{{ post.saleQuantity }}</td>
                    <td>{{ post.saleAmount }}</td>
                </tr>
            </tbody>
        </table>
        <hr/>
        <h4> Print Sales </h4>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Tk. Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(post, key) in printSale" :key="post.id">
                    <td>{{ key+1}}</td>
                    <td>{{ post.productName }}</td>
                    <td>{{ post.saleQuantity }}</td>
                    <td>{{ post.saleAmount }}</td>
                </tr>
            </tbody>
        </table>
        
        <hr/>
        <h4> Copy Sales </h4>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Tk. Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(post, key) in copySale" :key="post.id">
                    <td>{{ key+1}}</td>
                    <td>{{ post.productName }}</td>
                    <td>{{ post.saleQuantity }}</td>
                    <td>{{ post.saleAmount }}</td>
                </tr>
            </tbody>
        </table>
        <hr/>
        <h4> Daily Expense </h4>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Expense Head</th>
                    <th>Tk. Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(post, key) in expense" :key="post.id">
                    <td>{{ key+1}}</td>
                    <td>{{ post.expenseHead }}</td>
                    <td>{{ post.expenseAmount}}</td>
                </tr>
            </tbody>
        </table>
        
        <h4> Cash Amount</h4>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cash Type</th>
                    <th>Tk. Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(post, key) in cashAmount" :key="post.id">
                    <td>{{ key+1}}</td>
                    <td>{{ post.cashType }}</td>
                    <td>{{ post.amount}}</td>
                </tr>
            </tbody>
        </table>
        <hr/>
        <h4> Daily Due Payments </h4>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Customer Name</th>
                    <th>Reference Item</th>
                    <th>Tk. Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(post, key) in dailyDuePayment" :key="post.id">
                    <td>{{ key+1}}</td>
                    <td>{{ post.date}}</td>
                    <td>{{ post.customerName }}</td>
                    <td>{{ post.referenceItem}}</td>
                    <td>{{ post.amount}} {{ post.balance}}</td>
                    <td>
                        <button @click="dueTransaction(post.id)" class="btn payent-btn"> Due Transaction</button>
                    </td>
                </tr>
            </tbody>
        </table> 
        
        <hr/>
        <h4> Daily Collections </h4>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Reference Item</th>
                    <th>Tk. Amount</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(post, key) in dailyCollection" :key="post.id">
                    <td>{{ key+1}}</td>
                    <td>{{ post.customerName }}</td>
                    <td>{{ post.referenceItem}}</td>
                    <td>{{ post.amount}}</td>
                    <td>{{ post.collectionType}}</td>
                </tr>
            </tbody>
        </table>
        
    </div>
</template>

<script >

import axios from 'axios'
import store from '../store/index';
import router from '../routes/routes';

export default {

    name: "Posts",
    data() {
        return {
            cashAmount: [], // Initial state
            productSale: [], // Initial state
            printSale: [], // Initial state
            copySale: [], // Initial state
            expense: [], // Initial state
            dailyDuePayment: [], // Initial state
            dailyCollection: [], // Initial state
            dueKey:{
                dueItem:''
            },
            show:true 
            
          
           
        };
    },
    mounted() {
        this.getProductSale();
        this.getPrintSale();
        this.getCopySale();
        this.getExpense();
        this.getDailyDuePayment();
        this.getDailyCollection();
        this.getCashAmount();
    },
    methods: {

        dueTransaction(id)
        {

            this.dueKey.dueItem = id
            axios.post('/get-due-data',this.dueKey)
                .then(function (response) {
                    if(response.data.status =='SUCCESS')
                        {
                            store.commit('loadSelectedDue', response.data.duePayment);
                            router.push('Due-Transaction')
                        }
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        async getDailyCollection() {
            let res = await axios.get("/daily-collection");
            this.dailyCollection = res.data.collection;
        },          
        
        async getDailyDuePayment() {
            let res = await axios.get("/daily-due-payment");
            this.dailyDuePayment = res.data.duePayment;
        },          
        
        async getExpense() {
            let res = await axios.get("/daily-expense");
            this.expense = res.data.expenses;
        },         
        
        async getCopySale() {
            let res = await axios.get("/copy-sales-data");
            this.copySale = res.data.copySale;
        },        
        
        async getProductSale() {
            let res = await axios.get("/product-sales-data");
            this.productSale = res.data.productSale;
        },
        
        async getPrintSale() {
            let res = await axios.get("/print-sales-data");
            this.printSale = res.data.printSale;
        },        
        async getCashAmount() {
            let res = await axios.get("/cash-amount");
            this.cashAmount = res.data.cash;
        },
        
    },
}

</script>

<style>


.payent-btn
{
    background: #1957cb;
    color: white;
    margin-right: 4px;
    padding: 2px 10px;
    font-size: 12px;
    border-radius: 5px;
}

.payent-btn:hover
{
    background: #174396;
    color: white;
}

</style>
