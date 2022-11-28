@extends( 'main.app' )

@section( 'title', 'Lista de clientes')

@section( 'content' )
  <p class="text-center mt-3">Lista de clientes</p>

  <div class="tabla">
    <div class="titulo">Nombre</div>
    <div class="titulo">NIF</div>
    <div class="titulo">Población</div>
    <div class="titulo">Código postal</div>
    <div class="titulo">Opciones</div>
  </div>
  @foreach( $clientes as $cliente )
    <div class="tabla-content">
      <div class="contenido">{{ $cliente->nombre }}</div>
      <div class="contenido">{{ $cliente->NIF }}</div>
      <div class="contenido">{{ $cliente->poblacion }}</div>
      <div class="contenido">{{ $cliente->CP }}</div>
      <div class="buttons-container">
        <a class="btn btn-primary" href="{{ route('cliente.edit', $cliente->id) }}">Editar</a>
        <form action="{{ route('cliente.destroy', $cliente->id) }}" method="post">
          @csrf
          @method( 'delete' )
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
    </div>
  @endforeach

@endsection