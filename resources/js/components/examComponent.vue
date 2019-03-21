<template>
    <div class="container">
     <form v-if="!seen">
           <input type="text" v-model="examiner.lname" placeholder="Last nane"><br>
           <input type="text" v-model="examiner.fname" placeholder="Firstname"><br>  
           <input type="text" v-model="examiner.course" placeholder="Course"><br>         
          <button @click.prevent="subj">submit</button>
      </form>  
          
          <form class="form-group form_filter" v-if="seen">
           <h4> Question # {{pagination.current_page}}</h4>
             <div v-for="exam in exams" v-bind:key="exam.id">
                 
                  <table class="table">
                   <thead>
                    <tr>
                      <th scope="col"><h2>{{exam.q}} qid {{exam.id}}</h2></th>
                    </tr>
                  </thead>
                  <tbody>
                      <input type="hidden" id="qid" :value="exam.id"> 
                     <!-- <p v-model:value="exam.id"></p> -->
                    <tr><td><span>1</span><span><input   type="checkbox"  v-model="checkbox1" value="1"></span>{{exam.a1}}</td></tr>
                    <tr><td><span>2</span><span><input   type="checkbox"  v-model="checkbox2" value="2"></span>{{exam.a2}}</td></tr>
                    <tr><td><span>3</span><span><input   type="checkbox"  v-model="checkbox3" value="3"></span>{{exam.a3}}</td></tr>
                    <tr><td><span>4</span><span><input   type="checkbox"  v-model="checkbox4" value="4"></span>{{exam.a4}}</td></tr>
                    <tr><td><span>5</span><span><input   type="checkbox"  v-model="checkbox5" value="5"></span>{{exam.a5}}</td></tr>
                  </tbody>
                </table>
              <a class="btn btn-primary" @click.prevent="fetchExam(pagination.next_page_url)">Submit</a>
              
           </div>   
        </form>        
  </div> <!-- end if container --> 
</template>

<script>
 
export default{ 

 mounted() {
             console.log('Component mounted.')
        },

   data(){
    
      return{
    
        examiner:{
            'lname':'',
            'fname':'',
           'course':'',
           },

       exams:[], //api response holder
        exam:{
            'id':null,
            'q':'',
            'a1':'',
            'a2':'',
            'a3':'',
            'a4':'',
            'a5':'',
            'c_a':'',            
          }, 
        exam_id:'',
        checkbox1:false,
        checkbox2:false,
        checkbox3:false,
        checkbox4:false,
        checkbox5:false,      
        answer:'',
        pagination:{},
        answers:[],
        token:[],
        answer:{
          'qid':null,
          'e_id':null,
          'e_answer':'',
          },

        edit:false,
        submitted:true,
        seen:false
      }//End return 
   },
    // end data function
   created(){
     this.fetchExam();
   },

methods:{
  subj(){
      this.seen=true;    
      if(this.edit===false){
         fetch('api/examiner',{
             method:'post',
             body:JSON.stringify(this.examiner),
             headers:{
                'content-type':'application/json',
             }
         });
      }   
    },
  
  fetchExam(page_url){
    let vm = this;
    
    page_url = page_url || 'api/exams';
    fetch(page_url).then(res=>res.json())
    .then(res=>{
       this.exams = res.data;
      // console.log(this.answer.qid);
       vm.makePagination(res.meta,res.links);       
        // reset checkbox
        // $('.form_filter :checkbox').each(function () {
        // $(this).prop('checked', false); 
        // }); 
            this.ans = "";
      if(this.checkbox1==true){
               this.ans += "1";
            this.checkbox1=false;
            }
      if(this.checkbox2==true){
              this.ans += "2";
              this.checkbox2=false;
              }
     if(this.checkbox3==true){
             this.ans += "3";
             this.checkbox3=false;
             }
     if(this.checkbox4==true){
              this.ans += "4";
              this.checkbox4=false;
             }
     if(this.checkbox5==true){
              this.ans += "5";
              this.checkbox5=false;
             }

        
          vm.iData();  
    }) // end of res

     .catch(err=>console.log(err));
  },

  makePagination(meta,links){
    let pagination = {
      current_page:meta.current_page,
      next_page_url:links.next,
      prev_page_url:links.prev,
      last_page:meta.last_page,
    }
    this.pagination = pagination;   
    
  },

       iData(){
         if(this.edit===false){
            if((this.ans!="")&&(this.examiner.lname!="")){
           this.answer.e_answer = this.ans;
           this.answer.e_id = this.examiner.lname; 
           
           if((this.exams[0].id-1)==0){
                this.answer.qid=this.pagination.last_page;
                alert('Done!');

                window.location='/exam';
                    }else{
                this.answer.qid=this.exams[0].id-1;
             }
                                             
            fetch('api/answer',{
                  method:'post',                  
                  body:JSON.stringify(this.answer),         
                  headers:{
                    'content-type':'application/json'
                  },   
                                    
                    }).then(function(data){
                        console.log(data);                   
                  });

                 }

                }
            }
  
 } //end of method

} // end export default

</script>

<style scoped>
    span{
         padding-right:20px;
       };
</style>
