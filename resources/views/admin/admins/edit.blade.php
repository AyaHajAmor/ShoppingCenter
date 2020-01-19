@extends('admin.layouts.index')
@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">{{ $title }}</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      {!! Form::open(['url'=>aurl('admin/'.$admin->id),'method'=>'put' ]) !!}
       <div class="form-group">
          {!! Form::label('name','New Name') !!}
          {!! Form::text('name',$admin->name,['class'=>'form-control']) !!}
       </div>
       <div class="form-group">
          {!! Form::label('email','New Email') !!}
          {!! Form::email('email',$admin->email,['class'=>'form-control']) !!}
       </div>
       <div class="form-group">
          {!! Form::label('password',trans('admin.password')) !!}
          {!! Form::password('password',['class'=>'form-control']) !!}
       </div>
       {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
@endsection