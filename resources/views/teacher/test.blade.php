@extends('front.layouts.layoutteacher')
@section('content')
<div class="section-2">
    <div  class="blog_part section_padding">
    <h1><i class="fa fa-plus-square" aria-hidden="true"></i> Testovi:</h1>
    <label style="background-color: #ff663b" class="btn btn-default btn-primary" onclick="myFunctionCourse()" role="button" >Formiraj Test</label>
    <div class="col-md-6">
        @if (\Session::has('success'))
          <p class="alert alert-danger" style="background-color:  rgb(101, 179, 213); ">{{\Session::get('success')}}</p>
        @endif
    </div>
    <div class="row">
        <div hidden id="adcourse" class="col-sm-6">
                <div style="background-color:#2530ae98;border:1px solid black;border-radius:10px;" class="card">
                    <div  class="card-body">
                        <button onclick="myFunctionTest()" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                            &times;
                       </span>
                       </button>
                        <form action="{{ route('addTest') }}" method="POST" enctype="multipart/form-data">
                            {{@csrf_field() }}
                            <p>Odaberi kurs</p>
                            <select class="form-control form-control-sm" name="valueid">
                                @foreach ($courses as $course)
                                @if ($course->state=='otvoren'&& Session::get('loginId')==$course->idUser)
                                   <option value="{{$course->id}}">{{$course->course}}</option>
                                @endif
                                @endforeach
                            </select>
                            <p class="mt-1" for="picturenews">Naziv Testa:</p>
                            <input type="text" class="form-control form-control-sm"  style="height: 38px;"  name="nametest" id="nametest">
                            <p class="mt-1" for="picturenews">Vrsta Testa:</p>
                            <select class="form-control form-control-sm" name="tipetest">
                                <option value="easy">Lako</option>
                                <option value="hard">Srednje</option>
                                <option value="medium">Teško</option>
                            </select>
                            <br>
                        <button class="btn_1">Sačuvaj Test</button>
                    </form>
                    </div>
                </div>
            </div>
  </div><br>
  <table>
    <thead style="background-color:#ff663b">
    <tr>
      <th>Naziv Testa</th>
      <th>Kurs</th>
      <th>Vrsta Testa</th>
      <th>Datum kreiranja</th>
      <th>Test Pitanja</th>
      <th>Rezultati Testova</th>
    </tr>
    </thead>
    @foreach ($tests as $ts)
    @if(Session::get('loginId')==$ts->courses[0]['idUser'])
    <td>{{$ts->nameT}}</td>
    <td>{{$ts->courses[0]['course']}}</td>
    <td>{{$ts->tipeT}}</td>
    <td>{{$ts->created_at}}</td>
    <td>
     <label for="modal-switch" style="background-color: #ff663b" class="btn btn-default btn-primary" role="button" data-toggle="modal" onclick="Funct({{$ts->id}})" data-target="#addTestModal">Formiraj Pitanja</label> 
    </td>
    <td>
        <form action="">
            <a style="border:1px solid blue;margin-bottom:6px; height:35px; border-radius:6px; " href="{{"informacije/".$ts['id']}}" class="btn_4"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
        </form>
    </td>
    </tr>
    @endif
    @endforeach
  </table>
<div class="pure-css-bootstrap-modal">
    <input type="checkbox" id="modal-switch"/>
    <div class="modal fade" id="addTestModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <label class="modal-backdrop fade" for="modal-switch"></label>
        <div class="modal-dialog" role="document">
            <form action="addQA" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <label for="modal-switch" class="close" data-dismiss="modal" aria-label="Close" style="display: flex; align-items: center;">
                            <span aria-hidden="true">
                                 &times;
                            </span>
                        </label>
                        <h4 class="modal-title" id="myModalLabel">Kreiraj Pitanje</h4>
                        <input type="text" hidden id="testid" name="testid"/>
                    </div>
                    <div class="modal-body">
                        <label>Pitanje:</label>
                        <input type="text" placeholder="Unesite pitanje" class="form-control form-control-sm" style="height: 38px;" name="nameq" id="nameq" required>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>A:</label>
                                <input type="text" class="form-control form-control-sm" style="height: 38px;" name="valueA" id="valueA" placeholder="Unesite odgovor" required/>
                                <br>
                                <label>B:</label>
                                <input type="text" class="form-control form-control-sm" style="height: 38px;" name="valueB" id="valueB" placeholder="Unesite odgovor" required/>
                            </div>
                            <div class="col-sm-6">
                                <label>C:</label>
                                <input type="text" class="form-control form-control-sm" style="height: 38px;" name="valueC" id="valueC" placeholder="Unesite odgovor" required/>
                                <br><label>D:</label>
                                <input type="text" class="form-control form-control-sm" style="height: 38px;" name="valueD" id="valueD" placeholder="Unesite odgovor" required/>
                            </div>
                        </div>
                        <div>
                            <label>Tačan odgovor:</label>
                            <input type="text" class="form-control form-control-sm" style="height: 38px;" name="ans" id="ans" placeholder="Unesite tacan odgovor" required/>                                
                        </div>
                       </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Sačuvaj</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
   <br>
</div>
</div>
@endsection