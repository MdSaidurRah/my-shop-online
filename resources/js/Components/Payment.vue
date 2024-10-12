
<template>

<div class="row" style="padding:50px">
    <div class="col-md-6 col-lg-6 col-xl-6">
        <div>

        <h3>Payment Here</h3>
        <hr/>
        <form action="" @submit.prevent="paymentAction" class="row g-3" >
               
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="inputEmail4" v-model="user.firstName"  placeholder="Frist name">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputPassword4" v-model="user.lastName"  placeholder="Last name">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputAddress" v-model="user.email" placeholder="Email">
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Contact No</label>
                    <input type="number" class="form-control" id="inputAddress2" v-model="user.contactNo" placeholder="Contact no" >
                </div>   
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Profession</label>
                    <input type="text" class="form-control" id="inputAddress2" v-model="user.profession" placeholder="Enter your profession">
                </div> 
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Date of Brith</label>
                    <input type="date" class="form-control" v-model="user.dateofbirth" id="dateofbirth" >
                </div>
            
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Make Payment</button>
                </div>
            </form>
        </div> <!-- card-body.// -->
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <h1> Your Selected Plan is {{ selectedPlan }}</h1>
        <button @click="testState">TEst State</button>
    </div>
</div>

    

</template>


<script>

import store from '@/store';
import router from '../routes/index';

export default {
    name: 'Payment Action',
    data() {
        return {
            user: 
            {
                firstName:'',
                lastName:'',
                email:'',
                contactNo:'',
                profession:'',
                dateofbirth:'',
                plan:''
            },
            selectedPlan:''
        }
    },

    mounted() {
        this.getPlan()
        this.user.plan= this.selectedPlan
    },

  
    methods: {

        async paymentAction()
        {
            try {

                await axios.post('/payment-proceed',this.user )
                .then(function (response) {
                    if(response.data.subscriptionKey)
                    {
                        router.push({name: 'Register', params: {subscriptionkey:response.data.subscriptionKey}})
                    }else
                    {
                        router.push('Home')
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
            catch (error) {
                    console.log(error)
            }
        },

        getPlan()
        {
            if(store.state.selectedPlan=='')
            {
                this.$router.push('Subscription')
            }else
            {
                this.selectedPlan =  store.state.selectedPlan
                this.user = store.getters.getUserData
            }
        },

        testState()
        {
            console.log(store.getters.getUserData)
        }

        
    }
    
}



</script>







<style scoped>



</style>
