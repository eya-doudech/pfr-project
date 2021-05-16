@extends('layouts.main')

@section('contents')
<div class="row">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Nouvelle immobilisation</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('immobilisations.index') }}" class="btn btn-sm btn-primary">Retour</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('immobilisations.store') }}" method="POST">
          @csrf
          <h6 class="heading-small text-muted mb-4">Information</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
              <div class="form-group">
                  <label class="form-control-label">Code à bar</label>
                  <input type="text" id="" class="form-control" name="codeAbar"  placeholder="entrer le code à bar"   value="">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Désignation</label>
                  <input type="text" id="" class="form-control" name="designation"  placeholder="entrer la désignation"  value="">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Quantité</label>
                  <input type="text" id="" class="form-control" name="quantite" placeholder="entrer la quantité"  value="">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Catégories</label>
                  @if(!empty($categories))
                  <select class="form-control" name="categorie_id[]" multiple >
                      @foreach($categories as $key=>$value)
                        <option value="{{$value->id}}">{{$value->designation}}</option>
                      @endforeach
                  </select>
                  @else
                    <span class="alert alert-danger">No Records</span>
                  @endif
                </div>
                <div class="form-group">
                  <label class="form-control-label">Départements</label>
                  @if(!empty($departements))
                    <select class="form-control" name="departement_id">
                      @foreach($departements as $key=>$value)
                        <option value="{{$value->id}}">{{$value->designation}}</option>
                      @endforeach
                    </select>
                    
                  @else
                    <span class="alert alert-danger">No Records</span>
                  @endif
                </div>
                <div class="form-group">
                  <label class="form-control-label">Date d'entrée</label>
                  <input type="date" id="" class="form-control" name="dateDentree" placeholder="entrer la date d'entrée" value="">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Date de sortie</label>
                  <input type="date" id="" class="form-control" name="dateDeSortie" placeholder="entrer la date de sortie"  value="">
                </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <button class="btn btn-sm btn-success">Ajouter immobilisation </button>
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