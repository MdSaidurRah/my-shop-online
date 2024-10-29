

<template>


    <div class="content">

        <h3>Nogod</h3>
        <hr/>
        <form class="form-inline" @submit.prevent="addProductSale">
            <div class="form-group">
                <label for="exampleInputEmail1">Customer Name</label>
                <input type="text" class="form-control" v-model="form.customerName" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <br/>   
            <div class="form-group">
                <label for="exampleInputEmail1">Product Reference</label>
                <input type="text" class="form-control" v-model="form.referenceItem" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <br/>
            <div class="form-group">
                <label for="exampleInputPassword1">Amount</label>
                <input type="number" class="form-control"  v-model="form.amount"  id="exampleInputPassword1">
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
