@extends('admin.layout.template')
@section('tss_kolam3')
<table class="table">
    <h1 class="col">tabel monitoring tss kolam 3</h1>
    <thead>
      <tr>
        <th scope="col">nama kegiatan</th>
        <th scope="col">jenis kegiatan</th>
        <th scope="col">tanggal kegiatan</th>
        <th scope="col">deskripsi kegiatan</th>
        <th scope="col">foto</th>
      </tr>
    </thead>
    <tbody>

      {{-- <tr>
        <th>{{$k->nama_kegiatan}}</th>
        <td>{{$k->jenis_kegiatan}}</td>
        <td>{{$k->tanggal_kegiatan}}</td>
        <td>{{$k->deskripsi_kegiatan}}</td>
        <td>{{$k->foto}}</td>
      </tr> --}}

    </tbody>
  </table>
@endsection
