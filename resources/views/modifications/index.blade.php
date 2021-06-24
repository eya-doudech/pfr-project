@extends('layouts.main')

@section('contents')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Historique de Modifications</h3>
          </div>
          {{-- <div class="col text-right">
          <a href="{{ Route('immobilisations.create') }}" class="btn btn-sm btn-primary">Nouvelle immobilisation </a>

            <a href="{{ URL('/trashed/immobilisations') }}" class="btn btn-sm btn-warning"><i class="fas fa-trash-alt"></i></a>
            <a href="{{ URL('/history/immobilisations') }}" class="btn btn-sm btn-default"><i class="fas fa-history"></i> </a>
          </div> --}}
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" id="user-table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              
              <th scope="col">immobli_designation</th>
              <th scope="col">modified_attribute</th>
              <th scope="col">old_val</th>
              <th scope="col">new_val</th>
              <th scope="col">date</th>
            </tr>
          </thead>
          <tbody>
            @if(!empty($modifications))
            @foreach ($modifications as $key => $modification)
              <tr>
                <td scope="row">{{ $key++ }}</td>
                <td scope="row">{{ $modification->designation}}</td>
                <td scope="row">{{ $modification->modified_attribute}}</td>
                <td scope="row">{{ $modification->old_val }}</td>
                <td scope="row">{{ $modification->new_val}}</td>
                <td scope="row">{{ $modification->created_at}}</td>
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

