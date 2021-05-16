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
          <a href="{{ Route('immobilisations.create') }}" class="btn btn-sm btn-primary">Nouvelle immobilisation </a>

            <a href="{{ URL('/trashed/immobilisations') }}" class="btn btn-sm btn-warning"><i class="fas fa-trash-alt"></i></a>
            <a href="{{ URL('/history/immobilisations') }}" class="btn btn-sm btn-default"><i class="fas fa-history"></i> </a>
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
              <th scope="col">Statut</th>
              <th scope="col">Actions</th>
          

            </tr>
          </thead>
          <tbody>
            @if(!empty($immobilisations))
            @foreach ($immobilisations as $key => $immobilisation)
              <tr>
                <td scope="row">{{ $key++ }}</td>
                <td scope="row">{{ $immobilisation->designation}}</td>
                <td scope="row">{{ $immobilisation->codeAbar }}</td>
                <td scope="row">{{ $immobilisation-> quantite}}</td>
                <td scope="row">{{ $immobilisation->category}}</td>
                <td scope="row">{{ $immobilisation->departement }}</td>
                <td scope="row">{{ $immobilisation->dateDentree }}</td>
                <td scope="row">{{ $immobilisation->dateDeSortie}}</td>
                <td><a href="{{ route('immobilisations.edit', $immobilisation->id) }}" class="btn btn-sm btn-primary">Modifier</a></td>
                <td scope="row"><button class="btn btn-sm btn-danger deleteCtg" data-link="{{ route('immobilisations.destroy', $immobilisation->id) }}" data-token="{{csrf_token()}}" >Delete</button></td>
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
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    var token = $(this).attr('data-token');
    $.ajax({
      url: $(this).attr('data-link'),
      type: 'DELETE',
      data: { '_token': token },
      success: function(finalresult) {
        Swal.fire({
          title :'Deleted!',
          text:'Your file has been deleted.',
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

