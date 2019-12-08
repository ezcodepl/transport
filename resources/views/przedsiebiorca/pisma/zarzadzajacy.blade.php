@extends('layouts.app')

@section('content')
    <style>
    .uper {
        margin-top: 40px;

    }
    .header-1 {
        background-color: #3399ff;
        color: #fff;
    }

    </style>
     @php $nr_dok = \App\DokumentyPrzed::find($przedsiebiorca->id)->nr_dok; @endphp
     <div class="container-fluid">
            <div class="col-md-12 text-center bg bg-primary" style="height: 8px;"></div>
            <div class="col-md-12 text-center text-primary shadow-sm p-2 mb-2 bg-white rounded"><h3>PRZEDSIĘBIORCY</h3></div>
        <div class="p-2">

        <div class="container">

        <form action="{{ url('/przedsiebiorca/' . $przedsiebiorca->id.'/dokument/'.$nr_dok.'/pisma/zarzadzajacy/printPDF')}}" method="get">
            @csrf

            <div class="card">
                <div class="card-header bg-dark text-light" >
                    <span style="color: #00ddff;font-size:16px;">Przygotowanie pisma o nieaktualnej umowie z osobą zarządzającą</span>
                </div>
                <div class="card-body">
                    <div class="col-md-4"><label>Wpisz numer sprawy:</label> <input class="form-control" type="text" name="nr_sprawy" /></div>
                    <div class="col-md-4"><label>Wpisz datę pisma:</label> <input class="form-control" type="date" name="data_p" /></div>
                <input type="hidden" name="nr_dok" value="{{$nr_dok}}" />
                    <div class="col-md-12" style="padding: 20px;"><input class="btn btn-success" type="submit" value="Utwórz pismo" /></div>
                </div>
            </div>
          </form>
        <div><a class="btn btn-primary" href="/przedsiebiorca/{{$przedsiebiorca->id}}/dokument/{{$nr_dok}}" role="button" ><i class="fa fa-arrow-left"></i> Szczegóły przedsiębiorcy</a></div><br />
        </div>
        </div>
@endsection

