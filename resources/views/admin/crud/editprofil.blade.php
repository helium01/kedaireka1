@extends('admin.layout.template')
@section('kegiatan')


            <form method="POST" action="{{ route('updateprofil',$k->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Profil Tirtarona</label>
                  <input type="text" name="profil_tirtarona" class="form-control @error('profil_tirtarona')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$k->profil_tirtarona}}">
                  @error('profil_tirtarona')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Visi</label>
                  <textarea name="visi" class="form-control @error('visi')is-invalid @enderror" id="visi" cols="30" rows="10">{{$k->visi}}</textarea>
                  @error('visi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Misi</label>
                  <textarea name="misi" class="form-control @error('misi')is-invalid @enderror" id="misi" cols="30" rows="10">{{$k->misi}}</textarea>

                  @error('misi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">akun facebook</label>
                 <small>masukan link akun facebook</small>
                  <input type="text" name="akun_fb" class="form-control @error('akun_fb')is-invalid @enderror" id="exampleInputPassword1" value="{{$k->akun_fb}}">
                  @error('akun_fb')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>

                <div class="mb-3">

                  <label for="exampleInputPassword1" class="form-label">akun whatsapp</label>
                 <small>gunakan +62</small>
                  <input type="text" name="akun_whatsapp" class="form-control @error('akun_wa')is-invalid @enderror" id="exampleInputPassword1" value="{{$k->akun_whatsapp}}">
                  @error('akun_wa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">

                  <label for="exampleInputPassword1" class="form-label">akun twitter</label>
                 <small>gunakan +62</small>
                  <input type="text" name="akun_twitter" class="form-control @error('akun_twitter')is-invalid @enderror" id="exampleInputPassword1" value="{{$k->akun_twitter}}">
                  @error('akun_twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">akun instagram</label>
                 <small>masukan link akun instagram</small>
                  <input type="text" name="akun_instagram" class="form-control @error('akun_instagram')is-invalid @enderror" id="exampleInputPassword1" value="{{$k->akun_instagram}}">
                  @error('akun_instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

@endsection
