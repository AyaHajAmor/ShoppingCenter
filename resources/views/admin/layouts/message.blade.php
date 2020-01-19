@if(count($errors->all()) > 0)
 <div class="alert alert-danger">
 	<ul>
 		@foreach($errors->all() as $error)
 		 <li>{{ $error }}</li>
 		@endforeach
 	</ul>
 </div>
@endif

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
 
@endif