@extends('admin.layout.template')
@section('ph_kolam1')
<table class="table">
    <h1 class="col">tabel monitoring ph kolam 1</h1>
    <table class="table" >
        <thead>
          <tr>
            <th scope="col">data sensor</th>
            <th scope="col">tanggal sensor</th>
          </tr>
        </thead>

        @foreach ($data as $d)
        <tbody>
            <tr>
              <th>{{$d['field1']}}</th>
              <td>{{$d['created_at']}}</td>
            </tr>
          </tbody>
        @endforeach

      </table>

@endsection
