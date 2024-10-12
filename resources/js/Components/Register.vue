

<template>

    <div class="content">
        <h2>Register </h2>
        <hr/>

        <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <form action=""  @submit.prevent="registerPost">
                        <div class="mb-3">
                            <label for="name" class="form-label">Subscription Key</label>
                            <input type="text" class="form-control" v-model="user.subscriptionKey" id="name" aria-describedby="emailHelp" placeholder="First name" readonly required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" v-model="user.name" id="name" aria-describedby="emailHelp" placeholder="First name">
                        </div>
            
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" v-model="user.email"  id="email" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label placeholder="Password">
                            <input type="password" class="form-control" v-model="user.password"  id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary" v-on:click="registerPost()">Register </button>
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8"></div>

        </div>

       
    </div>

</template>


<script>

import { useRoute } from 'vue-router';
import router from '../routes/index';
export default {
    name: 'Register',
    data() {
        return {
            user: {
                name:'',
                email:'',
                password:'',
                subscriptionKey:''
            }
        }
    },


    mounted() {
        const route = useRoute();
        this.user.subscriptionKey = route.params.subscriptionkey
    },

    
    methods: {
        async registerPost() {

            try {
                await axios.post('/register-post', this.user)
                .then(function (response) {
                    if(response.data.response==='Successful')
                    {
                        router.push({name: 'Login'})
                    }else
                    {
                        alert(response.data.response)
                    }
                })
                .catch(function (error) {
                   
                });
            } 
            catch (error) {
                    console.log(error)
            }
            
        }
    }
    
}

</script>

<style scoped>

</style>
