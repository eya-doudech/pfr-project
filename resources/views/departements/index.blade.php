@extends('layouts.main')

@section('contents')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Départements</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('departements.create') }}" class="btn btn-sm btn-primary">Nouveau département </a>
            <a href="{{ URL('/trashed/departements') }}" class="btn btn-sm btn-warning"><i class="fas fa-trash-alt"></i></a>
            <a href="{{ URL('/history/departements') }}" class="btn btn-sm btn-default"><i class="fas fa-history"></i> </a>
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
              <th scope="col">Localisation</th>
              <th scope="col">Actions</th>
          

            </tr>
          </thead>
          <tbody>
            @if(!empty($departements))
            @foreach ($departements as $key => $departement)
              <tr>
                <td scope="row">{{ $key++ }}</td>
                <td scope="row">{{ $departement->designation }}</td>
                <td scope="row">{{ $departement->localisation }}</td>
                <td><a href="{{ route('departements.edit', $departement->id) }}" class="btn btn-sm btn-primary">Modifier</a></td>
                <td scope="row"><button class="btn btn-sm btn-danger deleteCtg" data-link="{{ route('departements.destroy', $departement->id) }}" data-token="{{csrf_token()}}" >Delete</button></td>
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

