@extends('layouts.appCobrador')

@section('content')

    
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suscriptores</h1> <br><br>



@foreach ($consulta as $item)
@if ($item->id)


<ul class="nav justify-content-center">
<nav class="nav nav-pills nav-fill">
   <a class="nav-link disabled" href="#">{{ $item->name }}</a>
  





<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $item->name }}">
  Historial
</button>

<!-- Modal -->
<div class="modal fade" id="{{ $item->name }}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        




        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Fecha</th>
              <th>Servicio</th>
              <th>Costo</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($consulta1 as $item1 ) 
                @if ($item->id == $item1->user_id)
            <tr>
                  <td>{{ $item1->created_at }}</td>
                  <td>{{ $item1->nombre }}</td>
                  <td>{{ $item1->costo }}</td>
              
            </tr>
            @endif
              @endforeach
          
           
          </tbody>
        </table>
      </div>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>









<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#{{ $item->name }}y{{ $item->name }}">
  Servicios
</button>

<!-- Modal -->
<div class="modal fade" id="{{ $item->name }}y{{ $item->name }}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Servicios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">







<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Fecha</th>
              <th>Servicio</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($consulta2 as $item2)
                @if ($item->id == $item2->user_id)
            <tr>
                  <td>{{ $item2->created_at }}</td>
                  <td>{{ $item2->nombre }}</td>
              
            </tr>
            @endif
              @endforeach
          
           
          </tbody>
        </table>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>








<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{ $item->name }}w{{ $item->name }}">
  Perfil
</button>

<!-- Modal -->
<div class="modal fade" id="{{ $item->name }}w{{ $item->name }}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Datos del Usuarioats</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

         <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre : </strong>
            {{ $item->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>direccion : </strong>
            {{ $item->direccion}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>RFC : </strong>
            {{ $item->rfc}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Celular : </strong>
            {{ $item->celular}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email : </strong>
            {{ $item->email}}
        </div>
    </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>







<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{ $item->name }}z{{ $item->name }}">
Mensualidad
</button>

<!-- Modal -->
<div class="modal fade" id="{{ $item->name }}z{{ $item->name }}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






</nav>

</ul>

 @endif
@endforeach
         
     






@endsection


