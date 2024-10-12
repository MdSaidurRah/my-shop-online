

<template>


     
        <div class="section-head">
                <h5>Experience</h5>
        </div>
    
        <div class="teble-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Degree</th>
                        <th>Institute</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Responsibilities</th>
                        <th>Leave Reason</th>
                        <th>Reference Person </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="expericens in experience" :key="expericens.id">
                        <td>{{expericens.designation}}</td>
                        <td>{{expericens.institutionName}}</td>
                        <td>{{expericens.startDate}}</td>
                        <td>{{expericens.endDate}}</td>
                        <td>{{expericens.keyResponsibilities}}</td>
                        <td>{{expericens.reasonToLeave}}</td>
                        <td>{{expericens.referencePerson}}</td>
                        <td><i class="pi pi-check" style="font-size: 1rem"></i></td>
                    </tr>
                </tbody>
            </table>
        
        </div>
         
</template>
<script >

import axios from 'axios'

import store from '../../store/index';

export default {

    
    name: 'Experience',
    data()
    {        return {
            'experience':[]
        }
    },
   
    created() 
    {
        this.loadExperience()
        this.experience = store.getters.getExperience
    },

  
    methods: {


        loadExperience()
        {
            axios.get('/get-experience')
                .then(function (response) {
                    store.commit('loadExperience',response.data.experience)
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
