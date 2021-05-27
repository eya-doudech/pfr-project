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
            <a href="{{ route('users.index') }}" class="btn btn-sm btn-info"><i class="fas fa-th-list"></i> </a>
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
              <th scope="col">Numéro de téléphone</th>
              <th scope="col">Actions</th>


            </tr>
          </thead>
          <tbody>
            @if(!empty($trashed_users))
            @foreach ($trashed_users as $key => $user)
              <tr>
                <td scope="row">{{ $key++ }}</td>
                <td scope="row">{{ $user->nom}}</td>
                <td scope="row">{{ $user->prenom }}</td>
                <td scope="row">{{ $user->login  }}</td>
                <td scope="row">{{ $user->password}}</td>
                <td scope="row">{{ $user->telephone }}</td>
                <td scope="row"><button class="btn btn-sm btn-danger deleteCtg" data-link="{{ URL('/trashed/users/restore/'.$user->id) }}" data-token="{{csrf_token()}}" >Restore</button></td>
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

