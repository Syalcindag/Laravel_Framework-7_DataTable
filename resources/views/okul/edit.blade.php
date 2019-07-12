@extends('okul.layout')


@section('content')
<style>
        .uper {
          margin-top: 40px;
        }
        .form-group{
            color: cornflowerblue;
        }
</style>

    <div class="card uper">
            <div class="card-header">
                    <h3>Update Book</h3>
            </div>
            <div class="card-body">
                  <div class="container">
                    {!! Form::model($student,['method' => 'PATCH','route'=>['okul.update',$student->no]]) !!}
                    <div class="form-group">
                        {!! Form::label('no', 'No:') !!}
                        {!! Form::text('no',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('ad', 'Ad:') !!}
                        {!! Form::text('ad',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('soyad', 'Soyad:') !!}
                        {!! Form::text('soyad',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                  </div>
            </div>
    </div>
@endsection


