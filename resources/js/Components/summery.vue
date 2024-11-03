<template>
    
    <div class="content">
        <h4> Business Summery </h4>
        <hr/>


        <div class="row">
            <div class="col-12 col-md-4 col-xl-4 col-xl-4">
                 <input  @change="showResult" v-model="report.date" type="date" class="form-control">
            </div>
        </div>

        <br/>


       


        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <h5> Total Sales</h5>
                <table class="table table-bordered table-hover">
                    <tr>
                        <td >#</td>
                        <td >Head</td>
                        <td >Amount</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Product Sales</td>
                        <td>{{ productSale }}</td>
                    
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Copy Sales</td>
                        <td>{{ copySale }}</td>
                    
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Print Sales</td>
                        <td>{{ printSale }}</td>
                        <td></td>
                    </tr>
                
                    <tr>
                        <td>4</td>
                        <td>Due Collection</td>
                        <td>{{ dailyCollection }}</td>
                    
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Total Income</td>
                        <td>{{ totalIncome }}</td>
                    
                    </tr>
                </table>
            </div>

            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <h5> Total Expenses</h5>
                <table class="table table-bordered table-hover">
                    <tr>
                        <td >#</td>
                        <td >Head</td>
                        <td >Amount</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Expense</td>
                        <td>{{ expense }}</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Dues </td>
                        <td>{{ dailyDuePayment }}</td>
                    </tr>
                 
                    <tr>
                        <td>2</td>
                        <td>Total Expense</td>
                        <td>{{ totalExpense }}</td>
                    </tr>
                </table>     
                
                <br>

                <table class="table table-bordered">
                    <tr>
                        <td colspan="3">Final Status</td>
                        <td>{{ finalStatus }} ({{ businessStatus }})</td>
                    </tr>
                </table>
             
            </div>

            <br/>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <h5> Today Accounts</h5>
                <table class="table table-bordered table-hover">
                    <tr>
                        <td >#</td>
                        <td >Head</td>
                        <td >Amount</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Total Income</td>
                        <td>{{ totalIncome }}</td>
                    </tr>
                                       
                    <tr>
                        <td>2</td>
                        <td>Cash</td>
                        <td>{{ cashAmount }}</td>
                    </tr>
                    
                </table>
            </div>

        </div>

        


        
        
    </div>
</template>

<script >

import store from '../store/index';

import axios from 'axios'

export default {

    name: "Summber",
    data() {
        return {
            productSale: '', // Initial state
            printSale: '', // Initial state
            copySale: '', // Initial state
            expense: '', // Initial state
            dailyDuePayment: '', // Initial state
            dailyCollection: '', // Initial state
            totalIncome: '', // Initial state
            totalExpense: '', // Initial state
            finalStatus: '', // Initial state
            businessStatus: '', // Initial state
            cashAmount: '', // Initial state
            report:{
                date:''
            } 
           
         
              
        };
    },
    mounted() {
        this.getSummery();
    },
    methods: {

        async showResult()
        {
            let res = await axios.post("/dated-business-summery", this.report);
            this.productSale = res.data.productSale;
            this.printSale = res.data.printSale;
            this.copySale = res.data.copySale;
            this.expense = res.data.expense;
            this.dailyDuePayment = res.data.duePayment;
            this.dailyCollection = res.data.collections;
            this.totalIncome = res.data.totalIncome;
            this.totalExpense = res.data.totalExpense;
            this.finalStatus = res.data.finalStatus;
            this.businessStatus = res.data.businessStatus;
            this.cashAmount = res.data.cashAmount;
        },



        async getSummery() {
            let res = await axios.get("/daily-business-summery");
            this.productSale = res.data.productSale;
            this.printSale = res.data.printSale;
            this.copySale = res.data.copySale;
            this.expense = res.data.expense;
            this.dailyDuePayment = res.data.duePayment;
            this.dailyCollection = res.data.collections;
            this.totalIncome = res.data.totalIncome;
            this.totalExpense = res.data.totalExpense;
            this.finalStatus = res.data.finalStatus;
            this.businessStatus = res.data.businessStatus;
            this.cashAmount = res.data.cashAmount;
        },          
        
       
        
    },
}


</script>



<style>

</style>
