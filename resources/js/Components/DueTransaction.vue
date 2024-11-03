

<template>


    <div class="content">

        <h3>Due Transaction</h3>
        <hr/>
        <Form class="form-inline"  @submit="dueTransactionSubmit"  :validation-schema="schema" :initial-values="formValues" >


            <Field  name="id" type="hidden" class="form-control" />

            <div class="form-group">
                <label for="username">Customer Number</label>
                <Field  name="customerName" type="text" class="form-control" />
                <ErrorMessage name="customerName" class="error-feedback" />
            </div>
            <br/>   

            <div class="form-group">
                <label for="transactionType">Transaction Type </label>
                <Field name="transactionType" as="select" class="form-control"  >
                    <option value="" >Select Type</option>
                    <option value="Due Payment">Due Payment</option>
                    <option value="New Due">New Due</option>
                </Field>
                <ErrorMessage name="transactionType" class="error-feedback" />
            </div>
            <br/>   
            <div class="form-group">
                <label for="amount">Amount</label>
                <Field name="amount" type="number" class="form-control" />
                <ErrorMessage name="amount" class="error-feedback" />
            </div>
           
            <br/>
            <button type="submit" class="btn btn-primary">Make Transaction</button>
        </Form>
    </div>

</template>


<script >


import axios from 'axios'
import store from '../store/index';
import router from '../routes/routes';

import { Form, Field, ErrorMessage } from "vee-validate";
import * as yup from "yup";

export default {

    name: 'Payment Action',
    components: {
        Form,
        Field,
        ErrorMessage,
    },
    data() 
    {
        const schema = yup.object().shape({
        customerName: yup.string().required("Customer is required!"),
        transactionType: yup.string().required("Type is required!"),
        amount: yup.string().required("Amount is required!"),
        });

        const  formValues= {
                customerName:store.getters.selectedDue.customerName,
                amount:store.getters.selectedDue.amount,
                id:store.getters.selectedDue.id,
            }

        return {
            formValues,
            schema
        }
    },

    methods:
    {
        dueTransactionSubmit(trasactionDate)
        {
            axios.post('/due-transaction',trasactionDate)
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
