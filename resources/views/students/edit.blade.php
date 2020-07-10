@extends('layouts.app')
@section('page-title','edit student')
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
          <form class='mt-3 mb-3' action='{{ route('students.update', ['student' => $student->id])}}' method='post'>
                @csrf
                @method('PUT')
                <div class="form-group row">
                  <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nome" name="name" placeholder="Nome" value='{{old('name', $student->name)}}'>
                    @error('name')
                  <small class='text-danger'>{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cognome" class="col-sm-2 col-form-label">Cognome</label>
                  <div class="col-sm-10">
                    <input type="text" name="surname" class="form-control" id="cognome" placeholder="Cognome" value='{{old('surname', $student->surname)}}'>
                    @error('surname')
                    <small class='text-danger'>{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                    <label for="badge" class="col-sm-2 col-form-label">badge</label>
                  <div class="col-sm-10">
                    <input type="text" name="badge" class="form-control" id="badge" placeholder="Badge" value='{{old('badge', $student->badge)}}'>
                    @error('badge')
                    <small class='text-danger'>{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" placeholder="email@example.com" value='{{old('email', $student->email)}}'>
                    @error('email')
                    <small class='text-danger'>{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                    <label for="descrizione" class="col-sm-2 col-form-label">Descrizione</label>
                  <div class="col-sm-10">
                    <textarea type="text" name="description" class="form-control" id="descrizione" placeholder="Descrizione">{{old('description',$student->description)}}
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