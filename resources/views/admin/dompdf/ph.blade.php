<table class="table">
    <thead>
      <tr>
        <th scope="col">data sensor</th>
        <th scope="col">tanggal sensor</th>
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
