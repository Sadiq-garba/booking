@if(count($errors)>0)
  @foreach($errors->all() as $error)
  <div class="alert alert-danger col-md-8 col-12" style="text-align: center;">
    
        {{$error}}


    </div> 
      
@endforeach
@endif

@if(session('success'))

     <div class="alert alert-success col-md-8 col-12" style="text-align: center;">
        
        {{session('success')}}
    </div>
     


@endif


@if(session('error'))
        
      <div class="alert alert-danger col-md-8 col-12" style="text-align:center;">
        
          
           {{session('error')}}
       
       
    
 
       </div>

@endif