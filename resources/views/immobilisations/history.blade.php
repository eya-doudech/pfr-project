@extends('layouts.main')

@section('contents')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Immobilisations</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('immobilisations.index') }}" class="btn btn-sm btn-info"><i class="fas fa-th-list"></i> </a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" id="user-table">
          <thead class="thead-light">
            <tr>
            <th scope="col">ID</th>
              
              <th scope="col">Désignation</th>
              <th scope="col">Code à barre</th>
              <th scope="col">Quantité</th>
              <th scope="col">Catégorie</th>
              <th scope="col">Département</th>
              <th scope="col">Date d'entrée</th>
              <th scope="col">Date de sortie</th>
              <th scope="col">Actions</th>
          

            </tr>
          </thead>
          <tbody>
            @if(!empty($immobilisations))
            @foreach ($immobilisations as $key => $immobilisation)
              <tr>
              <td scope="row">{{ $key++ }}</td>
                <td scope="row">{{ $immobilisation->codeAbar }}</td>
                <td scope="row">{{ $immobilisation->designation }}</td>
                <td scope="row">{{ $immobilisation-> quantite}}</td>
                <td scope="row">{{ $immobilisation->categorie_id}}</td>
                <td scope="row">{{ $immobilisation->departement_id }}</td>
                <td scope="row">{{ $immobilisation->dateDentree }}</td>
                <td scope="row">{{ $immobilisation->dateDeSortie}}</td>
                <td scope="row">{{ $immobilisation->status == 1 ? 'Deleted':'Exist'  }}</td>
                @if($immobilisation->status == 1)
                <td scope="row"><button class="btn btn-sm btn-warning deleteCtg" data-btn="Yes, restore it!" data-body="your data have been restored" data-title="restore" data-ajax="GET" data-link="{{ URL('/trashed/immobilisations/restore/'.$immobilisation->id) }}" data-token="{{csrf_token()}}" >Restore</button></td>
                @else
                <td scope="row"><button class="btn btn-sm btn-danger deleteCtg" data-btn="Yes, delete it!" data-body="your data have been deleted" data-title="delete" data-ajax="DELETE" data-link="{{ route('immobilisations.destroy', $categorie->id) }}" data-token="{{csrf_token()}}" >Delete</button></td>
                @endif
              </tr>
            @endforeach
            @endif
            
          </tbody> 
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
$("document").ready(function(){
  $(".deleteCtg").click(function(){
    var btnText = $(this).attr('data-btn');
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: btnText
}).then((result) => {
  if (result.isConfirmed) {
    var token = $(this).attr('data-token');
    var method = $(this).attr('data-ajax');
    var titleText = $(this).attr('data-title');
    var bodyText = $(this).attr('data-body');
    $.ajax({
      url: $(this).attr('data-link'),
      type: method,
      data: { '_token': token },
      success: function(finalresult) {
        Swal.fire({
          title :titleText,
          text:bodyText,
          confirmButtonText:'success'
        }).then((res) =>{
          location.reload();
       });
      }
    });
  }  
   });
  
  });

});
</script>
@endsection

