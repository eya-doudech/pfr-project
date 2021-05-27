@extends('layouts.main')

@section('contents')
<div class="row">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Editer immobilisation</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('immobilisations.index') }}" class="btn btn-sm btn-primary">Retour</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('immobilisations.update', $immobilisation->id)}}" method="POST">
          @method('PUT')
          @csrf
          <h6 class="heading-small text-muted mb-4">Information</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                
                <div class="form-group">
                  <label class="form-control-label" > Code à bar </label>
                  <input type="text" id="" class="form-control" name=" codeAbar" value="{{ $immobilisation->codeAbar}}">
                </div>
                <div class="form-group">
                  <label class="form-control-label" >Désignation </label>
                  <input type="text" id="" class="form-control" name="designation" value="{{ $immobilisation->designation}}">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Quantité</label>
                  <input type="text" id="" class="form-control" name="quantite" value="{{ $immobilisation->quantite}}">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Catégories</label>
                  @if(!empty($categories))
                  <select class="form-control" name="categorie_id">
                      @foreach($categories as $key=>$value)
                        <option value="{{$value->id}}" {{ $value->id == $immobilisation->categorie_id ? 'selected':'' }}>{{$value->designation}}</option>
                      @endforeach
                  </select>
                  @else
                    <span class="alert alert-danger">No Records</span>
                  @endif                </div>
                <div class="form-group">
                  <label class="form-control-label">Départements</label>
                  @if(!empty($departements))
                    <select class="form-control" name="departement_id">
                      @foreach($departements as $key=>$value)
                        <option value="{{$value->id}}" {{$value->id == $immobilisation->departement_id ? 'selected':'' }}>{{$value->designation}}</option>
                      @endforeach
                    </select>
                  @else
                    <span class="alert alert-danger">No Records</span>
                  @endif                </div>
                  {{-- user modif --}}
                  <div class="form-group">
                    <label class="form-control-label">Users</label>
                    @if(!empty($departements))
                      <select class="form-control" name="departement_id">
                        @foreach($users as $key=>$value)
                          <option value="{{$value->id}}" {{$value->id == $immobilisation->user_id ? 'selected':'' }}>{{$value->prenom}}</option>
                        @endforeach
                      </select>
                    @else
                      <span class="alert alert-danger">No Records</span>
                    @endif                </div>
                <div class="form-group">
                  <label class="form-control-label">Date d'entrée</label>
                  <input type="text" id="" class="form-control" name="dateDentree" value="{{ $immobilisation->dateDentree}}">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Date de sortie</label>
                  <input type="text" id="" class="form-control" name="dateDeSortie"value="{{ $immobilisation->dateDeSortie}}">
                </div>
              </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <button class="btn btn-sm btn-success">  Modifier </button>
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4" />
        </form>
      </div>
    </div>
  </div>
</div>
@endsection