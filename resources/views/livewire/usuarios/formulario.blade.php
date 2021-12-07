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
            <img style="width: 230px; height: 230px;" src="{{Storage::disk('public')->url( $agregar->foto!=null ? $agregar->foto : 'images/usuarios/default.png')}}" alt="">
            @endif
            
            <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Subir imagen</label>
                  <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                  @error('foto') <span class="text-danger">{{$message}}</span> @enderror  
                </div>
              </form>

        </div>
        <div class="col-6 mx-auto">
                <div class="form-group">
                  <label>Nombre</label>
                  <input wire:model.defer="agregar.nombre" type="text" placeholder="Gabriel" class="form-control">
                @error('agregar.nombre') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                  <label>Apellido Paterno</label>
                  <input wire:model.defer="agregar.apellidoPaterno" type="text" placeholder="Jimenez" class="form-control">
                  @error('agregar.apellidoPaterno') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Direccion</label>
                    <input wire:model.defer="agregar.direccion" type="text" placeholder="Av. Jalisco #405" class="form-control">
                    @error('agregar.direccion') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                  <div class="form-group">
                  <label>Telefono</label>
                  <input wire:model.defer="agregar.telefono" type="tel" placeholder="(653) 849-9179" pattern="[0-9]{10}" class="form-control">
                  @error('agregar.telefono') <span class="text-danger">{{$message}}</span> @enderror 
                </div>
                
                <div class="form-group">
                  <label>Email</label>
                  <input wire:model.defer="agregar.email" type="email" placeholder="gabriel@hotmail.com"  class="form-control">
                  @error('agregar.email') <span class="text-danger">{{$message}}</span> @enderror 
                </div>
                
                <div class="form-group">
                  <label>Password</label>
                  <input wire:model.defer="agregar.password" type="password" placeholder="HakunaMatata1" class="form-control">
                  @error('agregar.password') <span class="text-danger">{{$message}}</span> @enderror 
                </div>
                
                
              

        </div>

    </div>
</div>
