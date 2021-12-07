<div>
    <div class="row">

      {{-- Aparece mientras carga la foto --}}
      <div wire:loading wire:target="foto" class="align-items-center">
        <strong>Cargando...</strong>
        <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
      </div>



      <div class="col-4">
            @if ($foto!= null )
            <img style="width: 230px;height:230px" 
            src="{{$foto->temporaryUrl()}}" alt=""> 
            @else
            <img style="width: 230px; height: 230px;" src="{{Storage::disk('public')->url( $agregar->foto!=null ? $agregar->foto : 'images/materias/default.png')}}" alt="">
            @endif
            
            <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Subir imagen</label>
                  <input wire:model="foto" type="file" class="form-control-file" >
                  @error('foto') <span class="text-danger">{{$message}}</span> @enderror  
                </div>
              </form>

        </div>
        <div class="col-6 mx-auto">
                <div class="form-group">
                  <label>Nombre de la materia</label>
                  <input wire:model.defer="agregar.nombre_materia" type="text" placeholder="Informática" class="form-control">
                @error('agregar.nombre_materia') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                  <label>Cuatrimestre</label>
                  <input wire:model.defer="agregar.cuatrimestre" type="text" placeholder="I" class="form-control">
                  @error('agregar.cuatrimestre') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Codigo</label>
                    <input wire:model.defer="agregar.codigo" type="text" placeholder="201" class="form-control">
                    @error('agregar.codigo') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                 {{--  <div class="form-group">
                  <label>Telefono</label>
                  <input wire:model.defer="agregar.telefono" type="tel" placeholder="(653) 849-9179" pattern="[0-9]{10}" class="form-control">
                  @error('agregar.telefono') <span class="text-danger">{{$message}}</span> @enderror 
                </div> --}}
                
                
              

        </div>

    </div>
</div>
