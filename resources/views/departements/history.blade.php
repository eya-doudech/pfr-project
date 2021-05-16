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
            <a href="{{ route('departements.index') }}" class="btn btn-sm btn-info"><i class="fas fa-th-list"></i> </a>
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
              <th scope="col">Statut</th>
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
                <td scope="row">{{ $departement->status == 1 ? 'Deleted':'Exist'  }}</td>
                @if($departement->status == 1)
                <td scope="row"><button class="btn btn-sm btn-warning deleteCtg" data-btn="Yes, restore it!" data-body="your data have been restored" data-title="restore" data-ajax="GET" data-link="{{ URL('/trashed/departements/restore/'.$departement->id) }}" data-token="{{csrf_token()}}" >Restore</button></td>
                @else
                <td scope="row"><button class="btn btn-sm btn-danger deleteCtg" data-btn="Yes, delete it!" data-body="your data have been deleted" data-title="delete" data-ajax="DELETE" data-link="{{ route('departements.destroy', $departement->id) }}" data-token="{{csrf_token()}}" >Delete</button></td>
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