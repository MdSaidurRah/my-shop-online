
<template>

    <div class="content">

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{productSale}} Product Sales </h1>
                        <hr/>
                        <form class="form-inline">
                            <tr>
                                <td><input type="number" class="form-input"   id="inputPassword2" placeholder="Password"></td>
                                <td><button type="submit" class="btn btn-primary mb-2">+ Sale</button></td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{printSales}} Print Sales </h1>
                        <hr/>
                        <form class="form-inline">
                            <tr>
                                <td><input type="number" class="form-input"   id="inputPassword2" placeholder="Password"></td>
                                <td><button type="submit" class="btn btn-primary mb-2">+ Sale</button></td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{copySales}} Copy Sales </h1>
                        <hr/>
                        <form class="form-inline">
                            <tr>
                                <td><input type="number" class="form-input"   id="inputPassword2" placeholder="Password"></td>
                                <td><button type="submit" class="btn btn-primary mb-2">+ Sale</button></td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{duePayemnts}} Due Payment </h1>
                        <hr/>
                        <form class="form-inline">
                            <tr>
                                <td><input type="number" class="form-input"   id="inputPassword2" placeholder="Password"></td>
                                <td><button type="submit" class="btn btn-primary mb-2">+ Sale</button></td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1><i  class="pi pi-gift" style="font-size: 1rem; font-size: 30px;"></i> {{collections}} Collections </h1>
                        <hr/>
                        <form class="form-inline">
                            <tr>
                                <td><input type="number" class="form-input"   id="inputPassword2" placeholder="Password"></td>
                                <td><button type="submit" class="btn btn-primary mb-2">+ Sale</button></td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>

</template>


<script >


import axios from 'axios'
import store from '../store/index';

export default {

    name: 'Payment Action',
    data()
    {
        return {
            'productSale':'',
            'printSales':'',
            'copySales':'',
            'duePayemnts':'',
            'collections':''
        }
    },

    mounted()
    {
        this.loadData()

        console.log(store.getters.productSales)

        this.productSale = store.getters.productSales
        this.printSales = store.getters.printSales
        this.copySales = store.getters.copySales
        this.duePayemnts = store.getters.duePayemnts
        this.collections = store.getters.collections
    },

    methods: {

        loadData()
        {
            axios.get('/all-datas')
                .then(function (response) {
                    if(response.data.status =='success')
                    {
                        store.commit('loadProductSale',response.data.productSale)
                        store.commit('loadCopySale', response.data.copySale)
                        store.commit('loadPrintSale',response.data.printSale)
                        store.commit('loadDuePayment', response.data.dueAmount)
                        store.commit('loadCollection',response.data.collection)
                    }
                    // store.commit('loadEducation',response.data.education)
                })
                .catch(function (error) {
                    console.log(error);
                });
        }


    }

}



</script>








<style>


.form-input
{
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #787878;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    appearance: none;
    border-radius: 10px;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    margin: 5px;
}

</style>
