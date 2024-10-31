<template>

    <div class="content">
       
        <h5>Mobile Banking Transaction</h5>
         <hr/>

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
                    <option value="Account In">Account In</option>
                    <option value="Account Out">Account Out</option>
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
import router from '../../routes/routes';

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
                    router.push('Mobile-banking')
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
