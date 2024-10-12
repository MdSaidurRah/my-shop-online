
<script >


import { RouterLink, RouterView } from 'vue-router';
import store from '../store/index';

import Profile from '../Components/dashboard/Profile.vue'
import Notice from '../Components/dashboard/notice.vue'
import Appoinment from '../Components/dashboard/appoinment.vue'
import Circular from '../Components/dashboard/circular.vue'
import Apply from '../Components/dashboard/apply.vue'
import Test from '../Components/dashboard/test.vue'
import Education from '../Components/dashboard/education.vue'
import Experience from '../Components/dashboard/experience.vue'

export default {
    name: 'Payment Action',
    data() {
        return {
            authUser:'',
             current: 'profile'
        }
    },
    components: {
        Profile,Appoinment,Notice,Apply,Circular,Test,Education,Experience
    },

    mounted() {
        this.authUser= store.getters.getAuthData
    },

  
    methods: {

        loadComponent(comp)
        {
            this.current = comp
        }
        
     
    }
    
}

    
    

</script>

<template>


    

    <div class="dashboard">


        <div class = 'toolbar'>
            <div class = 'row'>
                <div class = 'col-lg-12'>
                <a @click="loadComponent('profile')" type = 'button' class = 'btn dtool-btn'><span class = 'glyphicon glyphicon-gift' ></span>Profile</a>
                <a @click="loadComponent('education')" type = 'button' class = 'btn dtool-btn'><span class = 'glyphicon glyphicon-gift' ></span>Education</a>
                <a @click="loadComponent('experience')" type = 'button' class = 'btn dtool-btn'><span class = 'glyphicon glyphicon-gift' ></span>Experience</a>
                <a @click="loadComponent('appoinment')" type = 'button' class = 'btn  dtool-btn'><span class = 'glyphicon glyphicon-gift' ></span>Appoinment</a>
                <a @click="loadComponent('test')" type = 'button' class = 'btn  dtool-btn'><span class = 'glyphicon glyphicon-gift' ></span>Test</a>
                <a @click="loadComponent('circular')" type = 'button' class = 'btn  dtool-btn'><span class = 'glyphicon glyphicon-gift' ></span>Circular</a>
                <a @click="loadComponent('apply')" type = 'button' class = 'btn  dtool-btn'><span class = 'glyphicon glyphicon-gift' ></span>Apply</a>
                <a @click="loadComponent('notice')" type = 'button' class = 'btn  dtool-btn'><span class = 'glyphicon glyphicon-gift' ></span>Notice</a>
                
               
                </div>
            </div>
        </div> 


        <div class="d-content">

            <div class="row">
                <div class="col-12 col-md-4 col-lg-2 col-xl-2">
                    <img v-bind:src="authUser.profilePhoto" width="100%"> 
                </div>
                <div class="col-12 col-md-4 col-lg-6 col-xl-6">
                    <h3>{{authUser.name}}</h3> 
                    <h4>{{authUser.profession}}</h4>
                    <h4>{{authUser.institution}}</h4>
                    <h5>{{authUser.dateOfBirth}}</h5>
                    <h5>{{authUser.profileLink}}</h5>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4">

                    <button class="btn btn-primary">Click Me! </button>
                    <button class="btn btn-primary">Click Me! </button>
                    <button class="btn btn-primary">Click Me! </button>
                    <button class="btn btn-primary">Click Me! </button>
                    <button class="btn btn-primary">Click Me! </button>
                    
                </div>
            </div>
            <br/>
        
            <component :is="current"></component >
        </div>



    
       
    </div>

</template>





<style scoped>

.btn-primary{
  background-color: #0275d8;
  box-shadow: 0 6px #052341;
  margin: 5px;
}
.btn-primary:hover{
  box-shadow: 0 4px #052341;
  top: 2px;
}
.btn-primary:active{
  box-shadow: 0 0 #052341;
  top: 6px;
}


</style>
