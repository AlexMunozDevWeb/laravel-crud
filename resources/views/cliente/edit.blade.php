@extends( 'main.app' )

@section( 'title', 'Inicio')

@section( 'content' )

  <h2 class="text-center mt-3">Actualizar cliente</h2>

  <form action="{{ route( 'cliente.update', $cliente ) }}" class="form-component" method="POST">
    @csrf
    @method('put')
    <x-client-form :cliente="$cliente"/>
  </form>
  <div class="errors-form">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
  </div>
@endsection