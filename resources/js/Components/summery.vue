<template>
    
    <div class="content">
        <h4> Daily Business Summery </h4>


        <table class="table table-bordered table-hover">
            <tr>
                <td colspan="2">Income</td>
                <td colspan="2">Expense</td>
            </tr>
            <tr>
                <td>Product Sales</td>
                <td>{{ productSale }}</td>
                <td>Expense</td>
                <td>{{ expense }}</td>
            </tr>
            <tr>
                <td>Copy Sales</td>
                <td>{{ copySale }}</td>
                <td>Due Payment</td>
                <td>{{ dailyDuePayment }}</td>
            </tr>
            <tr>
                <td>Print Sales</td>
                <td>{{ printSale }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Collection</td>
                <td>{{ dailyCollection }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Income</td>
                <td>{{ totalIncome }}</td>
                <td>Total Expense</td>
                <td>{{ totalExpense }}</td>
            </tr>
            <tr>
                <td colspan="3">Final Status</td>
            
                <td>{{ finalStatus }} ({{ businessStatus }})</td>
            </tr>
        </table>
        
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
        };
    },
    mounted() {
        this.getSummery();
    },
    methods: {
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
        },          
        
       
        
    },
}


</script>



<style>

</style>
