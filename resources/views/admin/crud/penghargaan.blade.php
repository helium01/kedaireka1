@extends('admin.layout.template')
@section('kegiatan')

<div class="container">
    <div class="row mb-3">
        @if ($message = Session::get('sukses'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="col-6">

            <h1 class="col-4">tabel penghargaan</h1>
        </div>
        <div class="col-6">
           <!-- Button trigger modal -->
            <button type="button" class=" btn btn-primary position-relative " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Tambahkan penghargaan
            </button>
        </div>
    </div>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">tanggal penghargaan</th>
                    <th scope="col">penghargaan dari</th>
                    <th scope="col">deskripsi penghargaan</th>
                    <th scope="col">foto</th>
                    <th scope="col">opsi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($penghargaan as $k)
                  <tr>
                    <td>{{$k->tanggal_penghargaan}}</td>
                    <td>{{$k->penghargaan_dari}}</td>
                    <td>{{$k->deskripsi_penghargaan}}</td>
                    <td><img src="{{asset('admin/pegawai/'.$k->foto)}}" alt="{{$k->foto}}" class="img-thumbnail"></td>
                    <td>
                        <a  class="btn btn-success" href="{{ route('editpenghargaan',$k->id) }}" role="button"><i class="align-middle" data-feather="edit"></i> edit data</a>
                        <a  class="btn btn-danger" href="{{ route('hapuspenghargaan',$k->id) }}" role="button"><i class="align-middle" data-feather="trash"></i> hapus data</a>
                        <a  class="btn btn-info" href="{{ route('viewpenghargaan',$k->id) }}" role="button"><i class="align-middle" data-feather="info"></i> lihat detail</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

</div>
 <!-- Modal insert -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">masukan data kegiatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('postdatapenghargaan') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">tanggal penghargaan</label>
                  <input type="text" name="tanggal_penghargaan" class="form-control @error('tanggal_penghargaan')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('tanggal_penghargaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">penghargaan dari</label>
                  <input type="text" name="penghargaan_dari" class="form-control @error('jenis_kegiatan')is-invalid @enderror" id="exampleInputPassword1">
                  @error('jenis_kegiatan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="custom-file">
                      <input name="foto" type="file" class="custom-file-input" id="inputGroupFile01">
                      <label class="custom-file-label" for="inputGroupFile01">tempelkan file</label>
                    </div>
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">deskripsi penghargaan</label>
                  <textarea class="form-control @error('deskripsi_penghargaan')is-invalid @enderror" name="deskripsi_penghargaan" id="kegiatan" cols="30" rows="10"></textarea>

                  @error('deskripsi_penghargaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal insert -->


@endsection
