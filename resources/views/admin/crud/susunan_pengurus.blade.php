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

            <h1 class="col-4">tabel susunan pengurus</h1>
        </div>
        <div class="col-6">
           <!-- Button trigger modal -->
            <button type="button" class=" btn btn-primary position-relative " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Tambahkan susunan pengurus
            </button>
        </div>
    </div>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">nama pengurus</th>
                    <th scope="col">jenis kelamin</th>
                    <th scope="col">tanggal lahir</th>
                    <th scope="col">jabatan</th>
                    <th scope="col">alamat</th>
                    <th scope="col">foto</th>
                    <th scope="col">opsi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($susunan_pengurus as $k)
                  <tr>
                    <td>{{$k->nama}}</td>
                    <td>{{$k->kelamin}}</td>
                    <td>{{$k->ttl}}</td>
                    <td>{{$k->jabatan}}</td>
                    <td>{{$k->alamat}}</td>
                    <td><img src="{{asset('admin/pegawai/'.$k->foto)}}" alt="{{$k->foto}}" class="img-thumbnail"></td>
                    <td>
                        <a  class="btn btn-success" href="{{ route('editsusunan_pengurus',$k->id) }}" role="button"><i class="align-middle" data-feather="edit"></i> edit data</a>
                        <a  class="btn btn-danger" href="{{ route('hapussusunan_pengurus',$k->id) }}" role="button"><i class="align-middle" data-feather="trash"></i> hapus data</a>
                        <a  class="btn btn-info" href="{{ route('viewsusunan_pengurus',$k->id) }}" role="button"><i class="align-middle" data-feather="info"></i> lihat detail</a>
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
          <h5 class="modal-title" id="staticBackdropLabel">masukan data susunan pengurus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('postdatasusunan_pengurus') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama pengurus</label>
                  <input type="text" name="nama" class="form-control @error('nama')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">jenis kelamin</label>
                  <input type="text" name="kelamin" class="form-control @error('kelamin')is-invalid @enderror" id="exampleInputPassword1">
                  @error('kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">jabatan</label>
                  <input type="text" name="jabatan" class="form-control @error('jabatan')is-invalid @enderror" id="exampleInputPassword1">
                  @error('jabatan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">alamat</label>
                    <textarea class="form-control @error('alamat')is-invalid @enderror" name="alamat" id="kegiatan" cols="30" rows="10"></textarea>
                    @error('alamat')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">tempat tanggal lahir</label>
                  <input type="text" name="ttl" class="form-control @error('ttl')is-invalid @enderror" id="exampleInputPassword1">
                  @error('ttl')
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


                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal insert -->


@endsection
