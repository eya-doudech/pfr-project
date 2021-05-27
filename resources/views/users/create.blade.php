@extends('layouts.main')

@section('contents')
<div class="row">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Nouveau utilisateur</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary">Retour</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('users.store') }}" method="POST">
          @csrf
          <h6 class="heading-small text-muted mb-4">Information</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Nom</label>
                  <input type="text" id="" class="form-control" name="nom" placeholder="entrer le nom" value="">
               
                
                </div>
                <div class="form-group">
                  <label class="form-control-label">Prenom</label>
                  <input type="text" id="" class="form-control" name="prenom" placeholder="entrer le prenom " value="">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Login </label>
                  <input type="text" id="" class="form-control" name="login" placeholder="entrer le login" value="{{old('login')}}">
                 
                </div>
                <div class="form-group">
                  <label class="form-control-label">Mot de passe</label>
                  <input type="text" id="" class="form-control" name="password" placeholder="entrer le mot de passe " value="">
                </div>
                <div class="form-group">
                  <label class="form-control-label"> Numéro de téléphone</label>
                  <input type="text" id="" class="form-control" name="telephone" placeholder="entrer le numéro de téléphone " value="">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Role</label>
                  <select name="is_admin" class="form-control">
                  <option value="1">admin</option>
                  <option value="0">utilisateur</option>
                  </select>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <button class="btn btn-sm btn-success">Ajouter utilisateur </button>
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