<template>
    <div class="content">
        <h3>Expenses Data</h3>
        <hr/>
        <form class="form-inline" @submit.prevent="addProductSale">
            <div class="form-group">
                <label for="exampleInputEmail1">Expense Head</label>
                <input type="text" class="form-control" v-model="expenseDate.expenseHead" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <br/>
            <div class="form-group">
                <label for="exampleInputPassword1">Expense Amount</label>
                <input type="number" class="form-control"  v-model="expenseDate.expenseAmount"  id="exampleInputPassword1">
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
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
            'expenseDate':
            {
                'expenseHead':'',
                'expenseAmount':''
            }
        }
    },

    methods: {

        async addProductSale()
        {
            await axios.post('https://eduinntech.com/shop/save-expense',this.expenseDate)
                .then(function (response) {
                    if(response.data.status =='SUCCESS')
                        {
                            alert("Product Sale Save Successfully")
                            store.commit('loadExpenseTable',response.data.expenses)
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
