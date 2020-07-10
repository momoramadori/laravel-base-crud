@extends('layouts.app')
@section('page-title','students')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="d-flex justify-content-between align-items-center ">
                <h1 class='mt-3 mb-3'>Tabella Studenti</h1>
              <a href="{{route('students.create')}}" class="btn btn-primary"> Nuovo Studente</a>
              </div>
              
                <table class=" table table-dark mt-3 mb-3">
                    <thead class="">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Badge</th>
                        <th scope="col">Email</th>
                        <th class='text-right' scope="col">Azioni</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $studente)
                        <tr>
                        <th scope="row">{{$studente->id}}</th>
                            <td>{{$studente->name}}</td>
                            <td>{{$studente->surname}}</td>
                            <td>{{$studente->badge}}</td>
                            <td>{{$studente->email}}</td>
                            <td class='text-right'>
                            <a class='btn btn-info bt-small' href="{{ route('students.show', ['student' => $studente->id]) }}"> Dettagli </a>
                            <a class='btn btn-warning bt-small' href="{{ route('students.edit', ['student' => $studente->id]) }}"> Modifica </a>
                            <form class='d-inline-block' action="{{ route('students.destroy', ['student' => $studente->id]) }}" method="POST" onclick="return confirm('Are you sure?')">
                              @method('DELETE')
                              @csrf 
                              <input type='submit' class='btn btn-danger bt-small' value='Elimina'>
                            </form>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection