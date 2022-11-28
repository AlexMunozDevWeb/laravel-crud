  @csrf
  <div class="row">
    <div class="col-sm-12 form-col">
      <label for="Nombre" class="InputForm">Nombre cliente: </label>
      <input type="text" name="nombre" id="input_name" placeholder="Inserte el nombre" value="{{ old( 'nombre', $cliente->nombre ) }}">
    </div>
    <div class="col-md-4 form-col">
      <label class="InputForm">NIF: </label>
      <input type="text" name="nif" id="input_nif" placeholder="Inserte el NIF" value="{{ old( 'nif', $cliente->NIF ) }}">
    </div>
    <div class="col-md-4 form-col">
      <label class="InputForm">Poblacion: </label>
      <input type="text" name="poblacion" id="input_poblacion" placeholder="Inserte la población" value="{{ old( 'poblacion', $cliente->poblacion ) }}">
    </div>
    <div class="col-md-4 form-col">
      <label class="InputForm">CP: </label>
      <input type="text" name="cp" id="input_cp" placeholder="Inserte el CP" value="{{ old( 'cp', $cliente->CP ) }}">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>