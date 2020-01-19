@extends('admin.layouts.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('users')]) !!}
     <div class="form-group">
        {!! Form::label('name','User Name') !!}
        {!! Form::text('name',old('name'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('email','User Email') !!}
        {!! Form::email('email',old('email'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
      {!! Form::label('level','Level') !!}
      {!! Form::select('level',['user'=>'User','vendor'=>'Vendor','company'=>'Company'],
      old('level'),
      ['class'=>'form-control','placeholder'=>'............']) !!}
   </div>
     <div class="form-group">
        {!! Form::label('password','User Passwords') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
      

     </div>
     {!! Form::submit('Add New User',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
  
  
@endsection