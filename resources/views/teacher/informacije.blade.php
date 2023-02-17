@extends('front.layouts.layoutteacher')
@section('content')
<div class="section-2">
    <div  class="blog_part section_padding">
    <h1>Rezultat testa: <b>{{$tests->nameT}}</b></h2>
        <br>
            <table id="tabela">
                <thead>
                <tr style="background-color: #ff663b">
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Broj tačnih:</th>
                    <th>Broj netačnih:</th>
                    <th>Broj pitanja:</th>
                    <th>Broj poena:</th>
                </tr>
            </thead>
                @foreach ($results as $re)
                @if($re->test_id==$tests->id)
                <tr>
                <td>{{$re->users[0]['firstname']}}</td>
                <td>{{$re->users[0]['lastname']}}</td>
                <td> {{$re->yes_ans}} </td>
                <td>{{$re->no_ans}}</td>
                <td>{{$re->yes_ans + $re->no_ans}}</td>
                <td>{{$re->yes_ans*10}}</td>
                @endif
                @endforeach
        </table>
  </div>
</div>
@endsection