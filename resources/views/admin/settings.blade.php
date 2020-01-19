@extends('admin.layouts.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('settings'),'files'=>true]) !!}

    <div class="form-group">
      {!! Form::label('sitename_en','Site Name') !!}
      {!! Form::text('sitename_en',setting()->sitename_en,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('email','Email Admin') !!}
      {!! Form::email('email',setting()->email,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('logo','Logo ') !!}
      {!! Form::file('logo',['class'=>'form-control']) !!}
      @if(!empty(setting()->logo))
       <img src="{{ Storage::url(setting()->logo) }}" style="width:50px;height: 50px;" />
      @endif
    </div>
    <div class="form-group">
      {!! Form::label('icon','Icon') !!}
      {!! Form::file('icon',['class'=>'form-control']) !!}
      @if(!empty(setting()->icon))
       <img src="{{ Storage::url(setting()->icon) }}" style="width:50px;height: 50px;" />
      @endif
    </div>
    <div class="form-group">
      {!! Form::label('description','Description') !!}
      {!! Form::textarea('description',setting()->description,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('keywords','Keywords') !!}
      {!! Form::textarea('keywords',setting()->keywords,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
      {!! Form::label('status','Status') !!}
      {!! Form::select('status',['open'=>trans('admin.open'),'close'=>trans('admin.close')],setting()->status,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('message_maintenance','Maintenance') !!}
      {!! Form::textarea('message_maintenance',setting()->message_maintenance,['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection