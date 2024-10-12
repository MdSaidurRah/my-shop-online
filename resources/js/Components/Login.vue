

<template>

    <div class="content">
        <h2>Login </h2>
        <hr/>

        <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <form action="" @submit.prevent="loginPost">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" v-model="user.email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" v-model="user.password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary" >Login</button>
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8"></div>
        </div>
    </div>

</template>


<script>
import router from '../routes/index';
import store from '../store/index';

export default {
    name: 'Master-layout',
    data() {
        return {
            user: {}
        }
    },
    methods: {
        loginPost() {
            axios.post('/login-post', this.user)
                .then(function (response) {


                    console.log('response.data.status')
                    if(response.data.status == 'Successful')
                    {
                        store.commit('setToken','LoggedIn')
                        store.commit('loggedUserData',response.data.userData)
                        router.push('Dashboard')
                    }else
                    {
                        alert("User name and/or password are not correct.")
                        router.push('Login')
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
