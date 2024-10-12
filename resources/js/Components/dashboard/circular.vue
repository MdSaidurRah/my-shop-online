

<template>


     
    <div class="section-head">
            <h5>Open Job Circulars</h5>
    </div>

    <div class="teble-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Institute</th>
                    <th>Publish Date</th>
                    <th>Expired Date</th>
                    <th>Education Requirement</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="circulars in circular" :key="circular.id">
                    <td>{{circulars.positionName}}</td>
                    <td>{{circulars.instituteName}}</td>
                    <td>{{circulars.publishDate}}</td>
                    <td>{{circulars.expiredDate}}</td>
                    <td>{{circulars.educationLevel}}</td>
                    <td>
                        <router-link class="btn btn-sm btn-success" to=""><i class="pi pi-send" style="font-size: 1rem"></i> Apply Now</router-link></td>
                </tr>
            </tbody>
        </table>
    
    </div>
     
</template>
<script >

import axios from 'axios'

import store from '../../store/index';

export default {


name: 'Circular',
data()
{        return {
        'circular':[]
    }
},

created() 
{
    this.loadCircular()
    this.circular = store.getters.getCircular
},


methods: {


    loadCircular()
    {
        axios.get('/get-circular')
            .then(function (response) {
                store.commit('loadCircular',response.data.circular)
            })
            .catch(function (error) {
                console.log(error);
            });
    }
   

   
    
}

}

</script>












<style scoped>

.section-head
{
background: #cfcfcf;
padding: 5px 10px;
margin-bottom: 10px;
}

</style>
