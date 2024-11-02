

<template>


    <div class="content">

        <h3>Cash Amount</h3>
        <hr/>
        <form class="form-inline" @submit.prevent="saveCaseAmount">
            <div class="form-group">
                <label for="exampleInputEmail1">Cast Type</label>
                <input type="text" class="form-control" v-model="form.cashType" id="exampleInputEmail1" aria-describedby="emailHelp" >
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
import router from '../routes/routes';

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

        async saveCaseAmount()
        {
            await axios.post('/save-cash-amount',this.form)
                .then(function (response) {
                    if(response.data.status =='SUCCESS')
                        {
                            alert("Cash Save Successfully")
                            store.commit('loadCashAmountTable',response.data.cash)
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
