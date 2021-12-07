<div wire:init="cargando">
    {{-- <div wire:poll> funciona para recargar pagina en tiempo real--}}
      <h4>Index de materias</h4>
      <a type="button" href="{{route('materias.agregar')}}" class="float-right mb-3 btn btn-success">Agregar <i class="fa fa-plus" aria-hidden="true"></i></a>
  
      <div class="mb-2 col-3">
          <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
              <input wire:model = "search" class="form-control" placeholder="Buscar..." type="search" aria-l aria-describedby="addon-wrapping">
  
          </div>
  
      </div>
  
       @if (count($materias)>0)
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre de la materia</th>
            <th scope="col">Cuatrimestre</th>
            <th scope="col">Codigo</th>
            <th>Imagen</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
            <tr>
                <th scope="row">{{$materia->id}}</th>
                <td> {{$materia->nombre_materia}}</td>
                <td> {{$materia->cuatrimestre}}</td>
                <td> {{$materia->codigo}}</td>
                <th>
                    <img style="width: 40px;height:40px" src="{{Storage::disk('public')->url($materia->foto ? $materia->foto : 'images/materias/default.png')}}" alt="">
                </th>
                <td>
                    <a href="{{route('materias.mostrar',$materia)}}" title="Ver más" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="{{route('materias.editar',$materia)}}" title="Editar" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></i></a>
                    <a href="{{route('materias.eliminar',$materia)}}" title="Eliminar" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
              </tr> 
  
            @endforeach
          
        </tbody>
    </table>
  
       @else
        <img class="mx-auto d-block" style="width: 250px; height: 250px" src="{{Storage::disk('public')->url('images/otros/cargando.gif')}}" alt="cargando">
      @endif 
  
     </div
      
      
        {{$cargando==true ? $materias->links(): null}} 
  </div>
  