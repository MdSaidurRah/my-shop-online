

<template>


    <div class="content">

        <h3>Due Transaction</h3>
        <hr/>
        <form class="form-inline" @submit.prevent="duePaymentSubmit">
            <div class="form-group">
                <label for="exampleInputEmail1">Customer Name </label>
                <input type="text" class="form-control" v-model="transaction.customerName" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <br/>   
            <div class="form-group">
                <label for="exampleInputEmail1">Transaction Type</label>
                <select  type="text" class="form-control" v-model="transaction.transactionType" id="exampleInputEmail1" >
                    <option value="">Select Type</option>
                    <option value="Payment Due">Payment Due</option>
                    <option value="New Due">New Due</option>
                </select>
            </div>
            <br/>
            <div class="form-group">
                <label for="exampleInputPassword1">Amount</label>
                <input type="number" class="form-control" v-model="transaction.amount"  id="exampleInputPassword1">
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Make Transaction</button>
        </form>
    </div>

</template>


<script >


import axios from 'axios'
import store from '../store/index';
import router from '../routes/routes';

export default {

    name: 'Payment Action',
    data() 
    {
        return {
            'transaction':'',
        
        }
    },

    mounted() {
        this.transaction = store.getters.selectedDue 
    },

    methods:
    {
        duePaymentSubmit()
        {
            axios.post('/due-transaction',this.transaction)
                .then(function (response) {
                    if(response.data.status =='SUCCESS')
                    {
                        alert(response.data.message)
                        router.push('Report')
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }


}


</script>


<style scoped>

</style>
