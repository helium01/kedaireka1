@extends('admin.layout.template')
@section('kegiatanya')

<div class="container">

    <img src="{{asset('admin/pegawai/'.$k->foto)}}" class="container-fluid" alt="foto {{$k->foto}}">
    <article class="blog-post mt-3">
        <h2 class="blog-post-title">{{$k->nama_kegiatan}} </h2>
        <p class="blog-post-meta">{{$k->tanggal_kegiatan}} <a href="#">{{$k->jenis_kegiatan}}</a></p>

        <p>{{$k->deskripsi_kegiatan}}</p>
        <hr>
        <p>tirtarona indah</p>
<a href="{{ route('kegiatan') }}">kembali</a>
      </article>
</div>


@endsection
