@extends('layouts.main')

@section('contents')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">immobilisations</h3>
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
              <th scope="col">Code à bar</th>
              <th scope="col">Quantité</th>
              <th scope="col">Catégories</th>
              <th scope="col">Départements</th>
              <th scope="col">Date d'entrée</th>
              <th scope="col">Date de sortie</th>
              <th scope="col">Actions</th>
          

            </tr>
          </thead>
          <tbody>
            @if(!empty($trashed_immobilisations))
            @foreach ($trashed_immobilisations as $key => $immobilisation)
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
                <td scope="row"><button class="btn btn-sm btn-danger deleteCtg" data-link="{{ URL('/trashed/immobilisations/restore/'.$immobilisation->id) }}" data-token="{{csrf_token()}}" >Restore</button></td>
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
    
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, restore it!'
}).then((result) => {
  if (result.isConfirmed) {
    var token = $(this).attr('data-token');
    $.ajax({
      url: $(this).attr('data-link'),
      type: 'GET',
      data: { '_token': token },
      success: function(finalresult) {
        Swal.fire({
          title :'Restored!',
          text:'Your data has been restored.',
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
