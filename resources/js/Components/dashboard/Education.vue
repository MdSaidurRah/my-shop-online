

<template>


     
        <div class="section-head">
            <div class="row">
                <div class="col-8 col-md-12 col-lg-10 col-xl-10">
                    <h5>Educational Qualifications</h5>
                </div>
                <div class="col-4 col-md-2 col-lg-2 col-xl-2">

                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addModal" ><i class="pi pi-plus" style="font-size: 1rem"></i> Add New</button>
                </div>
            </div>
            
        </div>
    
        <div class="teble-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Degree</th>
                        <th>Institute</th>
                        <th>Year</th>
                        <th>Country</th>
                        <th>Language</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="edu in education" :key="edu.id">
                        <td>{{edu.degreeName}}</td>
                        <td>{{edu.instituteName}}</td>
                        <td>{{edu.year}}</td>
                        <td>{{edu.country}}</td>
                        <td>{{edu.language}}</td>
                        <td>
                            <button class="btn btn-sm btn-primary" @click="editEducation(edu.id)" ><i class="pi pi-file-edit" style="font-size: 1rem"></i> Edit </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        
        </div>

        <!-- Add Modal -->
          
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <form @submit.prevent="saveUserEducation">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Education Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Degree </label>
                            <input type="text" class="form-control" v-model="userEducation.degreeName" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Institution  </label>
                            <input type="text" class="form-control" v-model="userEducation.instituteName" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Country</label>
                            <input type="text" class="form-control" v-model="userEducation.country" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Passing Year</label>
                            <input type="number" class="form-control" v-model="userEducation.year" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Language</label>
                            <input type="text" class="form-control" v-model="userEducation.language" id="exampleInputPassword1">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                
                </div>
                </form>
                </div>
            </div>
        </div>
        
        
        <!-- Edit Modal -->
          
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <form @submit.prevent="saveUserEducation">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Education Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Degree </label>
                            <input type="text" class="form-control" v-model="selectedUser.degreeName" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Institution  </label>
                            <input type="text" class="form-control" v-model="selectedUser.instituteName" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Country</label>
                            <input type="text" class="form-control" v-model="selectedUser.country" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Passing Year</label>
                            <input type="number" class="form-control" v-model="selectedUser.year" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Language</label>
                            <input type="text" class="form-control" v-model="selectedUser.language" id="exampleInputPassword1">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update changes</button>
                
                </div>
                </form>
                </div>
            </div>
        </div>
         
</template>
<script >



</script>




<style scoped>


</style>
