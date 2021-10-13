@extends('admin.layout.template')

@section('edit_kegiatan')


<form method="POST" action="{{ route('updatesusunan_pengurus',$k->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama susunan pengurus</label>
      <input type="text" name="nama" class="form-control @error('nama')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$k->nama}}">
      @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">jenis kelamin</label>
      <input type="text" name="kelamin" class="form-control @error('jenis_kegiatan')is-invalid @enderror" id="exampleInputPassword1" value="{{$k->kelamin}}">
      @error('jenis_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">tanggal lahir</label>
      <input type="text" name="ttl" class="form-control @error('ttl')is-invalid @enderror" id="exampleInputPassword1" value="{{$k->ttl}}">
      @error('ttl')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">jabatan</label>
      <input type="text" name="jabatan" class="form-control @error('jabatan')is-invalid @enderror" id="exampleInputPassword1" value="{{$k->jabatan}}">
      @error('jabatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
    <img src="{{asset('admin/pegawai/'.$k->foto)}}" alt="{{$k->foto}}" class="img-thumbnail">
    <div class="input-group mb-3 mt-3">

        <div class="custom-file">
          <input name="foto" type="file" class="custom-file-input @error('foto')is-invalid @enderror" id="inputGroupFile01">
          <small>mohon isikan foto lagi</small>
          @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
        </div>
      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">alamat</label>
      <textarea class="form-control @error('alamat')is-invalid @enderror" name="alamat" id="kegiatan" cols="30" rows="10">{{$k->alamat}}</textarea>

      @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



@endsection
