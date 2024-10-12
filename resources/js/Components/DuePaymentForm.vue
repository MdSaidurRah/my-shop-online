


<template>


    <div class="content">

        <h3>Due Payment Data</h3>
        <hr/>
        <form class="form-inline" @submit.prevent="addProductSale">
            <div class="form-group">
                <label for="exampleInputEmail1">Customer Name</label>
                <input type="text" class="form-control" v-model="form.customerName" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <br/>   
            <div class="form-group">
                <label for="exampleInputEmail1">Product Reference</label>
                <input type="text" class="form-control" v-model="form.referenceItem" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <br/>
            <div class="form-group">
                <label for="exampleInputPassword1">Amount</label>
                <input type="number" class="form-control"  v-model="form.amount"  id="exampleInputPassword1">
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

</template>


<script >


import axios from 'axios'
import store from '../store/index';
import router from '../routes/index';

export default {

    name: 'Payment Action',
    data()
    {
        return {
            'form':
            {
                'customerName':'',
                'referenceItem':'',
                'amount':''
            }
        }
    },

    methods: {

        async addProductSale()
        {
            await axios.post('/save-due-payment',this.form)
                .then(function (response) {
                    if(response.data.status =='SUCCESS')
                        {
                            alert("Due Amount Save Successfully")
                            store.commit('loadDuePayment',response.data.dueAmount)
                            console.log(response.data.dueAmount)
                            router.push('Shop')
                        }
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

    }

}


</script>


<style scoped>

</style>
