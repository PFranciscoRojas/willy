@extends('layouts.app')

@section('content')
 

<div class="container">

{{-- ********************************************LISTAR USUARIOS*************************************** --}}
<div class="row">
	
    <div class="card">
        <div class="card-header">
            <h2>BANNER PRINCIPAL</h2>
        </div>
         
       		<div class="table-responsive">
 				<p class="f-500 c-black m-b-20">Banner Numero 1</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="...">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
   		 	</div>

   		 	<div class="table-responsive">
 				<p class="f-500 c-black m-b-20">Banner Numero 2</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="...">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
   		 	</div>
    </div>
</div>
<br/>

<div class="row">
	
    <div class="card">
     
       		<div class="table-responsive">
 				<p class="f-500 c-black m-b-20">Titulo Principal</p>
   		 	</div>
   		 	<div class="form-group">
	            <div class="fg-line">
	                <input type="text" class="form-control" placeholder="Titulo Principal">
	            </div>
        	</div>
        	<div class="table-responsive">
 				<p class="f-500 c-black m-b-20">Subtitulo Principal</p>
   		 	</div>
   		 	<div class="form-group">
	            <div class="fg-line">
	                <input type="text" class="form-control" placeholder="Subtitulo Principal">
	            </div>
        	</div>
    </div>
</div>
</div>
    {{-- ********************************************FIN LISTAR USUARIOS*************************************** --}}



@stop




@section('scripts')
	
@stop

	
