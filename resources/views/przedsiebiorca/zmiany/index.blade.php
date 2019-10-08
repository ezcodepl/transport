@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card uper">
          <div class="card-header bg-dark text-light" >

           Historia zmian przedsiębiorcy -
             <span style="color: #00ddff;font-size:16px;"> Nr licencji / zezwolenia:
               @foreach($dok as $dk)
                 @if(!empty($dk->nr_dok)) {{ $dk->nr_dok}} @else brak @endif

             </span><span style="color: #fff;font-size:16px;">wydano dn. {{ $dk->data_wyd}}   r.</span>
               @endforeach
          </div>
          <div class="card-body">
              <table class="table table-bordered table-striped table-sm text-center">
                <thead class="table-primary text-center" style="font-weight:bold;">
                    <th>Lp.</th>
                    <th>Nazwa zmiany</th>
                    <th>Data zmiany</th>
                </thead>
                <tbody>
                        <p style="font-size:1px;">{{$a=1}}</p>
                        @foreach($historia as $hzm)
                         <tr>
                            <td>{{$a++}}</td>
                            <td>{{$hzm->nazwa_zm}}</td>
                            <td style="width:120px;">{{$hzm->data_zm}}</td>
                         </tr>
                        @endforeach
                </tbody>
              </table>

          </div>
        </div>
        <div><a class="btn btn-primary" href="/przedsiebiorca/{{$przedsiebiorca->id}}" role="button"><i class="fa fa-arrow-left"></i> Szczegóły przedsiębiorcy</a></div><br />

</div>


@endsection
