<div class="container">
        <form method="post" action="{{route('upload')}}" enctype="multipart/form-data">   
            @csrf
        <label>upload</label>    
            <input type="file" name="file">
          <button type="submit">upload</button>
          </form>
 </div> 
