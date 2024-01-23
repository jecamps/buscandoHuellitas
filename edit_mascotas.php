@extends('fragmentos.menu')

@section('content')


<div style="max-width: 800px; margin: 0 auto;">

    <div class="card formulario">
        <div class="card-body">
            <h3 class="card-title">Edita los datos de tu mascota</h3>
            <img src="{{url('/pdfsS')}}/{{$mascota->foto}}" class="card-img-top img2" id="img_url" name="img_url" alt="foto">
            <br>

           <form action="{{ route('mascota.edit') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                <input type="text" name="id_mascota" style="display: none;" value="{{$mascota->id}}">
                <input type="text" name="status" style="display: none;" value="Perdido">

                <div class="form-group">
                    <select class="form-control" name="raza" value="{{$mascota->raza}}" id="exampleFormControlSelect1">
                        <option value="{{$mascota->raza}}">{{$mascota->raza}}</option>
                        <option value="Pitbul">Pitbul</option>
                        <option value="Chihuahua ">Chihuahua </option>
                        <option value="Pastor Alemán">Pastor Alemán</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1" name="estado">
                        <option value="{{$mascota->estado}}">{{$mascota->estado}}</option>
                        <option value="Nezahualcoyotl">Nezahualcoyotl</option>
                        <option value="Chimalhuacan">Chimalhuacan</option>
                        <option value="Iztapalapa">Iztapalapa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Seleccionar foto</label>
                    <input class="form-control form-control-sm" name="foto" id="foto" onChange="img_pathUrl(this);" type="file" accept="image/*">
                </div>

                <div class="row g-3">
                    <div class="col">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre:" value="{{$mascota->nombre}}">
                    </div>
                    <div class="col">
                        <input class="form-control" id="datepicker2" name="fecha" placeholder="Fecha en la que se perdió: " value="{{$mascota->fecha}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="edad" placeholder="Edad:" value="{{$mascota->edad}}" >
                    </div>
                    <div class="col">
                        <input class="form-control" name="rencompensa" placeholder="Recompensa:" value="{{$mascota->rencompensa}}">
                    </div>
                </div>
                <br>
                <div class="form-floating">
                    <textarea class="form-control" name="descripcion" placeholder="Descripción" id="floatingTextarea" >{{$mascota->estado}}</textarea>
                </div>

                <br>
                <button type="submit" class="btn btn-danger">Guardar</button>
            </form>
        </div>
    </div>
</div>

<script>
     function img_pathUrl(input){
      $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
  }

</script>

@endsection