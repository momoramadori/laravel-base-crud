@extends('layouts.app')
@section('page-title','create student')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form>
                <div class="form-group row">
                  <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="nome" value="name" placeholder="Nome">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cognome" class="col-sm-2 col-form-label">Cognome</label>
                  <div class="col-sm-10">
                    <input type="text" value="surname" class="form-control" id="cognome" placeholder="Cognome">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="badge" class="col-sm-2 col-form-label">Cognome</label>
                  <div class="col-sm-10">
                    <input type="number" value="badge" class="form-control" id="badge" placeholder="Badge">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" value="email" class="form-control" id="email" placeholder="email@example.com">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="descrizione" class="col-sm-2 col-form-label">Descrizione</label>
                  <div class="col-sm-10">
                    <textarea type="text" value="description" class="form-control" id="descrizione" placeholder="Descrizione"></textarea>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection