@extends('admin.layout.template')

@section('edit_kegiatan')


<form method="POST" action="{{ route('updatedata',$k->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama kegiatan</label>
      <input type="text" name="nama_kegiatan" class="form-control @error('nama_kegiatan')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$k->nama_kegiatan}}">
      @error('nama_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">jenis kegiatan</label>
      <input type="text" name="jenis_kegiatan" class="form-control @error('jenis_kegiatan')is-invalid @enderror" id="exampleInputPassword1" value="{{$k->jenis_kegiatan}}">
      @error('jenis_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">tanggal kegiatan</label>
      <input type="text" name="tanggal_kegiatan" class="form-control @error('tanggal_kegiatan')is-invalid @enderror" id="exampleInputPassword1" value="{{$k->tanggal_kegiatan}}">
      @error('tanggal_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
    <img src="{{asset('admin/pegawai/'.$k->foto)}}" alt="{{$k->foto}}" class="img-thumbnail">
    <div class="input-group mb-3 mt-3">

        <div class="custom-file">
          <input name="foto" type="file" class="custom-file-input @error('foto')is-invalid @enderror"" id="inputGroupFile01">
          <small>mohon isikan foto lagi</small>
          @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
        </div>
      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">deskripsi kegiatan</label>
      <textarea class="form-control @error('deskripsi_kegiatan')is-invalid @enderror" name="deskripsi kegiatan" id="kegiatan" cols="30" rows="10">{{$k->deskripsi_kegiatan}}</textarea>

      @error('deskripsi_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



@endsection
