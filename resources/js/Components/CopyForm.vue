

<template>

   

    <div class="content">
        <h3>Copy Sales Data</h3>
        <hr/>
        <form class="form-inline" @submit.prevent="addProductSale">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Quantity</label>
                <input type="number" class="form-control" v-model="salesDate.saleQuantity" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <br/>
            <div class="form-group">
                <label for="exampleInputPassword1">Amount</label>
                <input type="number" class="form-control"  v-model="salesDate.saleAmount"  id="exampleInputPassword1">
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
            'salesDate':
            {
                'saleQuantity':'',
                'saleAmount':''
            }
        }
    },

    methods: {

        async addProductSale()
        {
            await axios.post('https://eduinntech.com/shop/save-copy-sales',this.salesDate)
                .then(function (response) {
                    if(response.data.status =='SUCCESS')
                        {
                            alert("Product Sale Save Successfully")
                            store.commit('loadCopyTable',response.data.copySales)
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
