@extends('layouts.main')

@section('contents')
<div class="row">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Nouveau département</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('departements.index') }}" class="btn btn-sm btn-primary">Retour</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('departements.store') }}" method="POST">
          @csrf
          <h6 class="heading-small text-muted mb-4">Information</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Désignation</label>
                  <input type="text" id="" class="form-control" name="designation" placeholder="entrer la désignation" value="">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Localisation</label>
                  <input type="text" id="" class="form-control" name="localisation" placeholder="entrer la localisation " value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <button class="btn btn-sm btn-success">Ajouter département </button>
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