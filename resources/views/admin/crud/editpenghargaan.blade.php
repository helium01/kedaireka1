@extends('admin.layout.template')

@section('edit_kegiatan')


<form method="POST" action="{{ route('updatepenghargaan',$k->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">tanggal penghargaan</label>
      <input type="text" name="tanggal_penghargaan" class="form-control @error('tanggal_penghargaan')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$k->tanggal_penghargaan}}">
      @error('tanggal_penghargaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">penghargaan dari</label>
      <input type="text" value="{{$k->penghargaan_dari}}" name="penghargaan_dari" class="form-control @error('penghargaan_dari')is-invalid @enderror" id="exampleInputPassword1">
      @error('penghargaan_dari')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
    <img src="{{asset('admin/pegawai/'.$k->foto)}}" alt="{{$k->foto}}" class="img-thumbnail">
    <div class="input-group mb-3 mt-3">

        <div class="custom-file">
          <input name="foto" type="file" class="custom-file-input" id="inputGroupFile01">
          <label class="custom-file-label" for="inputGroupFile01">tempelkan file</label>
        </div>
      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">deskripsi penghargaan</label>
      <textarea class="form-control @error('deskripsi_penghargaan')is-invalid @enderror" name="deskripsi_penghargaan" id="kegiatan" cols="30" rows="10">{{$k->deskripsi_penghargaan}}</textarea>

      @error('deskripsi_penghargaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



@endsection
