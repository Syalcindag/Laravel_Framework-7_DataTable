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
                <h3>Create Student</h3>
        </div>
        <div class="card-body">
                <form method="post" action="{{ route('okul.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="name">No :</label>
                            <input type="text" class="form-control" name="no"/>
                            <div>{{$errors->first('no')}}</div>
                        </div>
                        <div class="form-group">
                            <label for="price">Ad :</label>
                            <input type="text" class="form-control" name="ad"/>
                            <div>{{$errors->first('ad')}}</div>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Soyad :</label>
                            <input type="text" class="form-control" name="soyad"/>
                            <div>{{$errors->first('soyad')}}</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                </form>
        </div>
    </div>
@endsection
