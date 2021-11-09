@extends('admin.layout.template')
@section('do_kolam1')
    <h1 class="col">tabel monitoring do kolam 1</h1>
    <div class="dropdown">
        <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          download data
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">PDF</a></li>
          <li><a class="dropdown-item" href="#">EXEL</a></li>
          <li><a class="dropdown-item" href="#">CSV</a></li>
        </ul>
      </div>
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
              <th>{{$d['field4']}}</th>
              <td>{{$d['created_at']}}</td>
            </tr>
          </tbody>
        @endforeach

      </table>
@endsection
