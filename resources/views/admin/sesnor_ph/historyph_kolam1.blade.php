@extends('admin.layout.template')
@section('ph_kolam1')
<table class="table">
    <h1 class="col">tabel monitoring ph kolam 1 </h1>

    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1537281/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1537281/widgets/377012"></iframe><br>
    <h1>{{$a}}</h1>

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">data sensor</th>
            <th scope="col">tanggal sensor</th>
            <form method="POST" action="/post/date">
                @csrf
            <th scope="col">
                masukan tanggal awal
                <input name="start" type="text" id="date">
                masukan akhir
                <input name="end" type="text" id="date1">
                <button type="submit" class="btn btn-primary">Submit</button>
            </th>
        </form>
          </tr>
        </thead>
       @for ($a=sizeof($data)-1;$a>=0;$a--)
       <tbody>
        <tr>
          <th>{{$data[$a]['field1']}}</th>
          <td>{{$data[$a]['created_at']}}</td>
        </tr>
      </tbody>
       @endfor


      </table>

      <script>
        $( function() {
          $( "#date" ).datepicker({
            dateFormat: "yy-mm-dd"
          });
        } );
        </script>
<script>
    $( function() {
      $( "#date1" ).datepicker({
        dateFormat: "yy-mm-dd"
      });
    } );
    </script>
@endsection
