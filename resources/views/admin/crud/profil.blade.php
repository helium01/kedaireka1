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

            <h1 class="col-4">tabel profil perangkat</h1>
        </div>
        <div class="col-6">
           <!-- Button trigger modal -->
            <button type="button" class=" btn btn-primary position-relative " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Tambahkan profil
            </button>
        </div>
    </div>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">profil tirtarona</th>
                    <th scope="col">visi</th>
                    <th scope="col">misi</th>
                    <th scope="col">akun fb</th>
                    <th scope="col">akun twitter</th>
                    <th scope="col">akun whatsapp</th>
                    <th scope="col">akun instagram</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($profil as $k)
                  <tr>
                    <th>{{$k->profil_tirtarona}}</th>
                    <td>{{$k->visi}}</td>
                    <td>{{$k->misi}}</td>
                    <td>{{$k->akun_fb}}</td>
                    <td>{{$k->akun_twitter}}</td>
                    <td>{{$k->akun_whatsapp}}</td>
                    <td>{{$k->akun_instagram}}</td>
                    <td>
                        <a  class="btn btn-success" href="{{ route('editprofil',$k->id) }}" role="button"><i class="align-middle" data-feather="edit"></i> edit data</a>
                        <a  class="btn btn-danger" href="{{ route('hapusprofil',$k->id) }}" role="button"><i class="align-middle" data-feather="trash"></i> hapus data</a>
                        <a  class="btn btn-info" href="{{ route('viewprofil',$k->id) }}" role="button"><i class="align-middle" data-feather="info"></i> lihat detail</a>
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
          <h5 class="modal-title" id="staticBackdropLabel">masukan data profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('postdataprofil') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Profil Tirtarona</label>
                  <input type="text" name="profil_tirtarona" class="form-control @error('profil_tirtarona')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('profil_tirtarona')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Visi</label>
                  <textarea name="visi" class="form-control @error('visi')is-invalid @enderror" id="visi" cols="20" rows="5"></textarea>
                  @error('visi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Misi</label>
                  <textarea name="misi" class="form-control @error('misi')is-invalid @enderror" id="misi" cols="20" rows="5"></textarea>

                  @error('misi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">akun facebook</label>
                 <small>masukan link akun facebook</small>
                  <input type="text" name="akun_fb" class="form-control @error('akun_fb')is-invalid @enderror" id="exampleInputPassword1">
                  @error('akun_fb')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>

                <div class="mb-3">

                  <label for="exampleInputPassword1" class="form-label">akun whatsapp</label>
                 <small>gunakan +62</small>
                  <input type="text" name="akun_whatsapp" class="form-control @error('akun_wa')is-invalid @enderror" id="exampleInputPassword1">
                  @error('akun_wa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">

                  <label for="exampleInputPassword1" class="form-label">akun twitter</label>
                 <small>gunakan +62</small>
                  <input type="text" name="akun_twitter" class="form-control @error('akun_twitter')is-invalid @enderror" id="exampleInputPassword1">
                  @error('akun_twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">akun instagram</label>
                 <small>masukan link akun instagram</small>
                  <input type="text" name="akun_instagram" class="form-control @error('akun_instagram')is-invalid @enderror" id="exampleInputPassword1">
                  @error('akun_instagram')
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
