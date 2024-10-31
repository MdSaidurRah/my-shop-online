

<template>


    <div class="content">
     
        <h3>Cash In</h3>
        <hr/>
        <form class="form-inline" @submit.prevent="addProductSale">
            <div class="form-group">
                <label for="exampleInputEmail1">Mobile No</label>
                <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <br/>   
            <div class="form-group">
                <label for="exampleInputEmail1">Amount </label>
                <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        
    </div>

</template>

<script >

</script>

<style scoped>

</style>
