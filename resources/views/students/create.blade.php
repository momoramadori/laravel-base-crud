@extends('layouts.app')
@section('page-title','create student')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif      
          <form class='mt-3 mb-3' action='{{route('students.store')}}' method='post'>
                @csrf
                @method('POST')
                <div class="form-group row">
                  <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nome" name="name" placeholder="Nome" value='{{old('name')}}' required>
                    @error('name')
                  <small class='text-danger'>{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cognome" class="col-sm-2 col-form-label">Cognome</label>
                  <div class="col-sm-10">
                    <input type="text" name="surname" class="form-control" id="cognome" placeholder="Cognome" value='{{old('surname')}}' required>
                    @error('surname')
                    <small class='text-danger'>{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                    <label for="badge" class="col-sm-2 col-form-label">badge</label>
                  <div class="col-sm-10">
                    <input type="text" name="badge" class="form-control" id="badge" placeholder="Badge" value='{{old('badge')}}' required>
                    @error('badge')
                    <small class='text-danger'>{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" placeholder="email@example.com" value='{{old('email')}}' required>
                    @error('email')
                    <small class='text-danger'>{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                    <label for="descrizione" class="col-sm-2 col-form-label">Descrizione</label>
                  <div class="col-sm-10">
                    <textarea type="text" name="description" class="form-control" id="descrizione" placeholder="Descrizione">
                      {{ old('description') }}
                    </textarea>
                    @error('description')
                    <small class='text-danger'>{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection