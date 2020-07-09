@extends('layouts.app')
@section('page-title','student details')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Dettaglio Studente</h1>
    <ul>
        <li>{{$student->id}}</li>
        <li>{{$student->name}}</li>
        <li>{{$student->surname}}</li>
        <li>{{$student->badge}}</li>
        <li>{{$student->email}}</li>
        <li>{{$student->description}}</li>
    </ul>
        </div>
    </div>
</div>
    
@endsection