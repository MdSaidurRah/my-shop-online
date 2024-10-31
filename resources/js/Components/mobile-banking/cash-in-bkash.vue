

<template>


    <div class="content">


        <div class="row">
            <div class="col-7 col-md-8">
                <h3>BKash</h3>
            </div>
            <div class="col-3 col-md-4">
                <span>Balance</span>
                <h3>241122536 Tk</h3>
            </div>
        </div>
        <hr/>
        <h5>Cash In</h5>


        <Form @submit="saveTransaction" :validation-schema="schema">
            <div class="form-group">
                <label for="username">Customer Number</label>
                <Field name="customer_number" type="number" class="form-control" />
                <ErrorMessage name="customer_number" class="error-feedback" />
            </div>
            <br/>   
        
            <div class="form-group">
                <label for="provider">Provider </label>
                <Field name="provider" as="select" class="form-control"  >
                    <option value="">Select Provider</option>
                    <option value="BKASH">BKash</option>
                    <option value="NOGOD">Nogod</option>
                    <option value="ROCKET">Rocket</option>
                </Field>
                <ErrorMessage name="provider" class="error-feedback" />
            </div>
            <br/>            

            <div class="form-group">
                <label for="transactionType">Transaction Type </label>
                <Field name="transactionType" as="select" class="form-control"  >
                    <option value="">Select Type</option>
                    <option value="Cash In">Cash In</option>
                    <option value="Cash Out">Cash Out</option>
                </Field>
                <ErrorMessage name="provider" class="error-feedback" />
            </div>

            <br/>
          
            <div class="form-group">
                <label for="amount">Amount</label>
                <Field name="amount" type="number" class="form-control" />
                <ErrorMessage name="amount" class="error-feedback" />
            </div>

            <br/>

            <div class="form-group">
                <button class="btn btn-primary btn-block" :disabled="loading">
                    <span>Save</span>
                </button>
            </div>

            <div class="form-group">
            <div v-if="message" class="alert alert-danger" role="alert">
                {{ message }}
            </div>
            </div>
      </Form>

    
    </div>

</template>

<script >

import { Form, Field, ErrorMessage } from "vee-validate";
import * as yup from "yup";

export default {
  name: "Login",
  components: {
    Form,
    Field,
    ErrorMessage,
  },
  data() {
    const schema = yup.object().shape({
      customer_number: yup.string(),
      provider: yup.string().required("Provider is required!"),
      transactionType: yup.string().required("Type is required!"),
      amount: yup.string().required("Amount is required!"),
    });

    return {
      loading: false,
      message: "",
      schema,
    };
  },

  methods: {


    async saveTransaction(trasactionDate)
        {
            await axios.post('/save-transaction',trasactionDate)
                .then(function (response) {

                    alert(response.data.message)

                    // if(response.data.status =='SUCCESS')
                    //     {
                    //         alert("Due Amount Save Successfully")
                    //         store.commit('loadCollectionTable',response.data.collection)
                    //         router.push('Shop')
                    //     }
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
   
  },
};

</script>

<style scoped>

</style>
