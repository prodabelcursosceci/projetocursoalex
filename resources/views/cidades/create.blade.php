@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova cidade</div>
                
                @if(count($errors))
                <div class="alert alert-danger" role="alert">
                     @json($errors)
                </div>
                @endif
                <div class="card-body">
                    <form action="{{route('cidades.store')}}" method="post">
                        @csrf
                            Nome cidade:
                        <p>
                            <input type="text" name="nome" required='required' class="form-control" >
                        </p>
                        <p>
                            <input type="submit" value="Salvar" class="btn btn-primary" />
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
