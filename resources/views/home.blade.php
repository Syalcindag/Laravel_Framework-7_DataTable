@extends('okul.layout')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link href="{{ asset('css/framework7-icons.css') }}" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

@section('content')
    <div class="data-table data-table-init">
        <div class="card-header">
                <div class="data-table-actions">
                    <a href="{{ url('/okul/create') }}"  class="link external icon-only"><i class="icon f7-icons">add</i></a>
                </div>
                <div><h2>Öğrenci</h2></div>
                <!-- Table actions -->
                <div class="data-table-actions">
                <a href="{{url('/sort')}}" class="link external icon-only"><i class="icon f7-icons">sort</i></a>
                </div>

        </div>
        <div class="card data-table">
            <table id="mytable">
                            <thead>
                            <th class="numeric-cell">No </th>
                            <th class="label-cell">Ad </th>
                            <th class="label-cell">Soyad</th>
                            <th class="label-cell">Güncelle</th>
                            <th class="label-cell">Silme</th>

                            </thead>
                            <tbody>
                            @foreach ($okul as $kayit)
                            <tr>
                                <td class="numeric-cell">{{ $kayit->no }}</td>
                                <td class="label-cell">{{ $kayit->ad }}</td>
                                <td class="label-cell">{{ $kayit->soyad }}</td>
                                <td class="actions-cell">
                                    {!! Form::open(['method' => 'get','route'=>['okul.edit', $kayit->no]]) !!}
                                    {!! Form::submit('Güncelle', ['class' => 'btn btn-warning']) !!}
                                    {!! Form::close() !!}
                                </td>
                                <td class="actions-cell">
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['okul.destroy', $kayit->no]]) !!}
                                    {!! Form::submit('Silme', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

            </table>

        </div>

    </div>

    <script>
            $(document).ready(function() {
                $('#mytable').DataTable( {
                    "scrollY":        "400px",
                    "scrollCollapse": true,
                    "paging":         false,
                    "info":     false,
                    "searching": true,
                    "ordering": false
                } );
            } );


    </script>

@endsection






