@extends('layouts.main')

@section('contents')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Utilisateurs</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Nouveau utlisateur </a>
            <a href="{{ URL('/trashed/users') }}" class="btn btn-sm btn-warning"><i class="fas fa-trash-alt"></i></a>
            <a href="{{ URL('/history/users') }}" class="btn btn-sm btn-default"><i class="fas fa-history"></i> </a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" id="user-table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              
              <th scope="col">Nom</th>
              <th scope="col">Prenom</th>
              <th scope="col">Login</th>
              <th scope="col">Mot de passe</th>
              <th scope="col"> Numéro de téléphone</th>
              <th scope="col">Actions</th>


            </tr>
          </thead>
          <tbody>
            @if(!empty($users))
            @foreach ($users as $key => $user)
              <tr>
                <td scope="row">{{ $key++ }}</td>
                <td scope="row">{{ $user->nom}}</td>
                <td scope="row">{{ $user->prenom }}</td>
                <td scope="row">{{ $user->login  }}</td>
                <td scope="row">{{ $user->password}}</td>
                <td scope="row">{{ $user->telephone }}</td>
                <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Modifier</a></td>
                <td scope="row"><button class="btn btn-sm btn-danger deleteCtg" data-link="{{ route('users.destroy', $user->id) }}" data-token="{{csrf_token()}}" >Delete</button></td>
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

