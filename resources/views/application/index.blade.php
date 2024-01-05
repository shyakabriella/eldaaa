@extends('layouts.auth')
@section('content')
<head>
    <!-- ... other head elements ... -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UBUDEHE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=""> List of Request of elders </a>      
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
         <p>{{ $message }}</p>

        </div>

    @endif
<style>
    table {
  overflow:hidden;
  th, td {
    padding:.25em .5em;
    text-align:left;
    vertical-align:top;
  }
  th {
    background-color:#009;
    color:#fff;
  }
  td {
    background-color:#eee;
  }
  tr {
    transition:all 1s ease-in-out;
    &.slide-out {
      transform:translateX(100%);
    }
  }
}
</style>
    <table class="zigzag">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>National Id</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Gender</th>
      <th>province</th>
      <th>District</th>
      <th>Sector</th>
      <th>Cell</th>>
      <th>Ubudehe</th>
      <th>Education</th>
      <th>Asset</th>
      <th>Desease</th>
      <th>Disability</th>
      <th width="280px">Action</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($apply as $key => $app)
    <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $app->name }}</td>
    <td>{{ $app->nid }}</td>
    <td>{{ $app->phone }}</td>
    <td>{{ $app->email }}</td>
    <td>{{ $app->gender }}</td>
    <td>
      <span class="pip-rwanda-location" data-type="0" data-element="{{$app->province}}"></span>
    </td>
    <td>
      <span class="pip-rwanda-location" data-type="1" data-element="{{$app->district}}"></span>
    </td>

    <td>
      <span class="pip-rwanda-location" data-type="2" data-element="{{$app->sector}}"></span>
    </td>

    <td>
      <span class="pip-rwanda-location" data-type="2" data-element="{{$app->village}}"></span>
    </td>

    <td>{{ $app->ubudehe }}</td>
    <td>{{ $app->asset }}</td>
    <td>{{ $app->education }}</td>
    <td>{{ $app->disability }}</td>
    <td>{{ $app->desease }}</td>
    
    <td>
    <form action="{{ route('applications.approve', $app->id) }}" method="POST">
        <button type="submit" class="btn btn-info">Approve</button>
        @csrf
    </form>

    <form id="deleteForm{{$app->id}}" action="{{ route('applications.reject', $app->id) }}" method="POST">
        <button type="button" onclick="confirmDelete({{$app->id}})" class="btn btn-danger">Reject</button>
        @csrf
    </form>
</td>
    </tr>
  </tbody>
  @endforeach
</table>

<script>
        function confirmDelete(applicationId) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You wont to reject this application!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, reject it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, submit the form
                    document.getElementById('deleteForm' + applicationId).submit();
                }
            });
        }
</script>


  
<p class="text-center text-primary"><small>E|C|F</small></p>
@endsection