@extends('admin.layouts.index')
@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">{{ $title }}</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      {!! Form::open(['url'=>aurl('users/'.$user->id),'method'=>'put' ]) !!}
       <div class="form-group">
          {!! Form::label('name','New Name') !!}
          {!! Form::text('name',$user->name,['class'=>'form-control']) !!}
       </div>
       <div class="form-group">
          {!! Form::label('email','New Email') !!}
          {!! Form::email('email',$user->email,['class'=>'form-control']) !!}
       </div>
       <div class="form-group">
          {!! Form::label('password','Password') !!}
          {!! Form::password('password',['class'=>'form-control']) !!}
       </div>
       <div class="form-group">
        {!! Form::label('level','Level') !!}
        {!! Form::select('level',['user'=>'User','vendor'=>'Vendor','company'=>'Company'],
        $user->level,
        ['class'=>'form-control','placeholder'=>'............']) !!}
     </div>
       {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
@endsection