@extends('admin.layouts.index')
@section('content')
@push('css')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">{{ $title}}</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      {!! Form::open(['id'=>'form_data','url'=>aurl('admin/destroy/all'),'method'=>'delete']) !!}
      {!! $dataTable->table(['class'=>'dataTable table table-striped table-hover  table-bordered'],true) !!}
      {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
</div>
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="multipleDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-trash"></i> Delete</h4>
      </div>
      <div class="modal-body">
        <div >
          <div class="empty_record hidden">
            <h3>Please select some records to delete</h3>
          </div>
          <div class="not_empty_record hidden">
            <h3 class="alert alert-danger" >  Are you sure to delete  <span class="record_count"> </span> rows ?</h3>
          </div>
        </div>
      </div>
      <div class="modal-footer empty_record hidden">
        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
        
      </div>
      <div class="modal-footer not_empty_record hidden">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      <input type="submit"  value="Delete" class="btn btn-danger del_all" onsubmit="" >
    </div>
    </div>

  </div>
</div>
  <!-- /.box --> 
  @push('js')
  <script >
  delete_all();
  </script>
  {!! $dataTable->scripts() !!}
  @endpush
  
  
@endsection