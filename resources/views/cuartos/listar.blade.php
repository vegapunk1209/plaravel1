@extends('layouts.app')
@section('htmlheader_title')
    Listado de Cuartos
@endsection
@section('css-inicio')
	<link rel="stylesheet" href="{{ asset('dist/css/jquery.bootgrid.min.css')}}">
@endsection
@section('script-inicio')
    <script src="{{ asset('dist/js/jquery.bootgrid.min.js')}}"></script>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      @if (session('errors'))
          <div class="alert alert-warning">
              {{ session('errors') }}
          </div>
      @endif
        <div class="contenedor-list">
            <div class="panel-heading">
                <h2 class="text-center titulo-ubicacion" style="font-weight:bold;"><i class="fa fa-list" aria-hidden="true"></i>&nbsp; Listado de Cuartos &nbsp;<i class="fa fa-list" aria-hidden="true"></i></h2>
            </div>
            <div class="panel-body">
					
	            <div id="tablePanel">
	                <div class="row">
	                </div>
	            </div>  <!-- end div #tablePanel -->
	            <div class="table-responsive" id="lista-monedas">
                        <table class="table table-hover" id="tbl-monedas">
						  <thead>
						     <tr>
						      <th class="text-center" style="vertical-align:middle;" data-column-id="id" data-type="numeric">#</th>
						      <th class="text-center" style="vertical-align:middle;" data-column-id="titulo_ubicacion">Nombre Cuarto</th>
						    </tr>
						  </thead>
						  <tbody>
						  	
						  	@foreach($cuartos as $cuarto)
						  	<tr>
						  		<td>{{$cuarto->id}}</td>
						  		<td>{{$cuarto->nombre_descripcion_cuartos}}</td>
						  	</tr>
						  	@endforeach

						  </tbody>
						  </table>
                    </div>
	       	</div> 
        	
        </div>    
@endsection
@section('script-fin')
<script>
$(document).ready(function()
{
	$("#tbl-monedas").bootgrid();
});
</script>
@endsection