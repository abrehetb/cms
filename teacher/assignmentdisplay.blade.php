 @extends('studentsDashboard')

@section('content')
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0 text-dark">ናይ ኣባላት ዝርዝር</h1> -->

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"> <a href="{{url('/teachers')}}">dashboard</a> </li>
                        <li class="breadcrumb-item active">assignments</li>
                    </ol>
                </div>
            </div>
        </div>

    </div>
  
<section class="content">
  <div class="container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
          <div class="container">
            
  <!-- Trigger the modal with a button -->
  <a href="#" class="create-modal">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">assignment</button>
</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">assignment register</h4>
        </div>
        <form action="">
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        <div class="modal-body">
 
              <div class="form-group">
              <label class="col-md-3 control-label" for="birthPlace">sth</label>
              <div class="col-md-6">
                <input id="" name="" type="text" placeholder="" class="form-control" value=""></div>
              </div>
              <br>
              <br>
              <div class="form-group">
              <label class="col-md-3 control-label" for="birthPlace">sth</label>
              <div class="col-md-6">
                <input id="" name="" type="text" placeholder="" class="form-control" value=""></div>
              </div>
              <br>
              <br>
             
                <div class="form-group">
                <label class="col-md-3 control-label" for="dob">sth</label>
                <div class="col-md-6">
                  <input id="" name="" type="text" placeholder="" class="form-control" value=""></div>
                </div>
                <br>
                <br>
                  <div class="form-group">
                        <label class="control-label">select file</label>
                        <div>
                            <input type="file" class="form-control input-lg" name="password">
                        </div>
                    </div>            
 
      <tr>
        <div class="modal-footer">
          <button type="button" id="edit" class="btn btn-primary">edit</button>
        
       
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </tr>
      </div>
    </form>
      
    </div>
  </div>
  
</div>

            <!-- <p>
                <a href="{{url('/register')}} " class="btn btn-primary"> ኣባላት መዝግብ</a>
            </p> -->
            <table class="table table-bordered table-striped">
                <tr>
                    <th>sth</th>

                    <th>sth</th>
                    <th>sth</th> 
                    <th>sth</th>
                    <th>sth</th>
                    <th>sth</th> 
                    <th>sth</th>
                    <th>sth</th>
                    <th>edit</th>
                    <th class="col-xs-4">delete</th>
                </tr>
               <tr>
                 
               </tr>
            </table>
        </div>
    </div>
</div>
    </section>

<!-- Content Header (Page header) -->


   <!--  <div class="content-header">
    	<div class="container-fluid">
    		<div class="row mb-2">
    			<div class="col-sm-6">
    				<h1 class="m-0 text-dark">list of uploaded files</h1>

    			</div>
    			<div class="col-sm-6">
    				<ol class="breadcrumb float-sm-right">
    					<li class="breadcrumb-item"> <a href="{{url('/teachers')}}">dash board</a> </li>
    					<li class="breadcrumb-item active"> </li>
    				</ol>
    			</div>
    		</div>
    	</div>

    </div>

    <section class="content">


    <div class="container">
        <div class="row">
    	<div class="container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <div class="col-md-6" align="right">
                
            <form action="/filesearch" method="get" role="search">
            {{ csrf_field() }}
            <div class="input-group col-md-4" align="right">
                <input type="text" class="col-md-2 form-control" name="search"
                    placeholder="Search users"> 
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>

                   
            </div>
    		<p>
    			<a href="{{url('/uploadFile')}} " class="btn btn-primary">file upload</a>
    		</p>
            <div class="table-responsive">
    		<table class="table table-bordered table-striped" id="table11">
                
                <tr>
                    <th>file_name</th>
                    <th>student_name</th>
                    <th>sth</th>
                    <th>sth</th>
                   
                    <th>sth</th>
                    <th>sth</th>
                    <th>sth</th>
                    <th>edit</th>
                    <th class="col-xs-4">delete</th>
                </tr>
               
                <tr>
                 
                </tr>
              
         
                
    		</table>
    	</div>
    </div>
    </div>
</div>
</div>
</div>
 -->

 @endsection

 <!-- @section('scrip') -->