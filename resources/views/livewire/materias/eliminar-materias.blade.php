<div>
    <div class="card mx-auto" style="width: 18rem;">
      <img style="width: 150px; height: 150px;"  class="mx-auto mt-3 card-img-top" 
      src="{{Storage::disk('public')->url($agregar->foto ? $agregar->foto : 'images/materias/default.png')}}" alt="Image">
        <div class="card-body">
          <h5 class="card-title">{{$agregar->nombre_materia}}</h5>
          <p class="card-text">{{$agregar->codigo}}</p>
          <button wire:click="eliminar" class="btn btn-danger btn-sm">Confirmar <i class="fa fa-trash" aria-hidden="true"></i></button>
          <a href="{{route('usuarios.index')}}" class="btn btn-primary btn-sm">Cancelar <i class="fa fa-save" aria-hidden="true"></i></a>
        </div>
      </div>
</div>
