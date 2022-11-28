@extends( 'main.app' )

@section( 'title', 'Inicio')

@section( 'content' )

  <h2 class="text-center mt-3">Registrar cliente</h2>

  <form action="{{ route( 'cliente.store' ) }}" class="form-component" method="POST">
    <x-client-form/>
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