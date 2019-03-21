<template>
  <div class="container">
    <div class="row">
        <div class="col-md-6">
       <h1 class="mt-20">Add Customer Leads </h1>
            <form>

            <div class="form-group">
                <input type="text" class="form-control" id="customer_name" aria-describedby="emailHelp" placeholder="Enter Name">    
            </div>

              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>

          <div class="form-group">
            <select class="custom-select">
              <option selected>Gender</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
          </div>

             <div class="form-group">
                <input type="text" class="form-control" id="Phone" aria-describedby="emailHelp" placeholder="Enter Phone">
              </div>
              
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>  
   </div><!-- end of container -->        
</template>

<script>
export default {
  
    data(){
      return{
           customers:[],
           customer:{
             'id':'',
             'lname':'',
             'fname':'',
             'gender':'',
             'email':'',
             'phone':''
           },
        
        created(){
           this.fetchCustomer();
           alert('function called');
          },

        mounted(){
        console.log('Mounted');
        },

    methods:{
       
       fetchCustomer(){
        // fetch('api/customers')
        //    .then(res=>res.json)
        //    .then(res=>{
        //    this.customers=res.data;
        //    })
        // .catch(err=>console.log(err));
       console.log('customer');

          }//end fetchCustomer
        } //end of methods
      } // end return
    } // end data  
} // end export default
</script>

<style scoped>
</style>