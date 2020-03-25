<div class="form-group">
<label for="Nombre"  class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($computadora->nombre)?$computadora->nombre:''}}"
></div>
<div class="form-group">
<label for="Serie" class="control-label">{{'Serie'}}</label>
<input type="text" class="form-control" name="Serie" id="Serie" value="{{ isset($computadora->serie)?$computadora->serie:''}}">
</div>
<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar': 'Modificar'}}">
<a class="btn btn-primary" href="{{ url('computadoras')}}">Regresar</a>