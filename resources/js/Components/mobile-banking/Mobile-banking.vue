

<template>


    <div class="content">


       
     


        <div class="row">
            <div class="col-7 col-md-8">
                <h5> Mobile Banking </h5>
            </div>
            <div class="col-3 col-md-4">
                <router-link to="/make-trasaction" class="btn btn-sm btn-success"> + Transaction</router-link>
            </div>
        </div>
        <hr/>
        
        
        <div class="row">
            <div class="col-7 col-md-8">
                <h4>BKash</h4>
            </div>
            <div class="col-3 col-md-4">
                <span>Balance</span>
                <h3>{{bkashBalace}} Tk</h3>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-7 col-md-8">
                <h4>Nogod</h4>
            </div>
            <div class="col-3 col-md-4">
                <span>Balance</span>
                <h3>{{nogodBalance}} Tk</h3>
            </div>
        </div>
        <hr/>
        
        <div class="row">
            <div class="col-7 col-md-8">
                <h4>Rocket</h4>
            </div>
            <div class="col-3 col-md-4">
                <span>Balance</span>
                <h3>{{rocketBalace}} Tk</h3>
            </div>
        </div>
        <hr/>

      
    </div>

</template>

<script >


export default {
  name: "Login",

  data() {
    return {
      bkashBalace:'',
      nogodBalance:'',
      rocketBalace:''
    };
  },

  mounted()
  {
    this.getCurrenctBalance()
  },

  methods: {

    async getCurrenctBalance()
        {

            let res = await axios.get("/get-balance");
                this.bkashBalace = res.data.bkashBalance,
                this.nogodBalance= res.data.nogodBalance,
                this.rocketBalace=res.data.rocketBalance
        },
   
  },
};

</script>

<style scoped>

</style>
