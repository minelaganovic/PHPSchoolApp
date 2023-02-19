@extends('front.layouts.layoutadmin')
@section('content')
<div class="section-2">
<div  class="blog_part section_padding">
        <h2 class="col-md-6"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Novosti PHP Skole</h2><br>
            <div  class="row">
              <div class="col-md-6">
                <button class="btn_1" onclick="myFunction()">Dodaj novu vest!</button>
                <div>
                  <br>
                  <div class="col-md-6">
                  @if ($message=Session::get('success'))
                    <p class="alert alert-danger" style="background-color:  rgb(101, 179, 213); ">{{$message}}</p>
                  @endif
                  </div>
                  @if ($errors->any())
                  <div class="alert alert-danger" style="color:white;background-color:#6888fa81;">
                      <strong>Ooops!</strong> Nešto nije u redu.<br><br>
                      <ul style="margin-left: 25%">
                        @foreach ($errors->all() as $error)
                            <li>Sva polja moraju biti uneta!</li>
                            <li>Pokusajte ponovo!</li>
                        @endforeach
                    </ul>
                  </div>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6" hidden id="adnews">
                  <div id="cardnews" class="card">
                    <img src="{{asset('front/img')}}/loginsl.jpg" class="card-img-top" alt="blog">
                    <div class="card-body">
                    <form method="POST" action="{{ route('store')}}" enctype="multipart/form-data" >
                      @csrf
                      <div id="basicInfo">
                      <label class="card-title" for="fname">Naslov Novosti: </label>
                      <input style="margin-left:20px;border-radius:10px; height:40px;" type="text" id="nname" name="nname" placeholder="Akuelna vest" >
                      <br><br>
                      <label for="detail">Objašnjenje Novosti: </label>
                      <textarea id="detail" name="detail"  placeholder="Komentari" style="height:150px;margin-right:20px;border-radius:10px;"></textarea>
                      <button class="btn_1" style="float:bottom;justify-content:right;" type="submit">Sačuvaj</button>
                      </div>
                    </form>
                    </div>
                  </div>
            </div></div>
            <br>
            <div class="row">
              @foreach ($news as $new)
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{asset('front/img')}}/loginsl.jpg" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="/login">
                                    <h5 class="card-title">{{$new['name']}}</h5>
                                </a>
                                <p>{{$new['detail']}}</p>
                                <form action="{{route('deleteNews',$new->id)}}" method="POST">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn_1">Obriši</button>
                                </form>
                                <ul>
                                  <li style="color: black"><span class="fa fa-calendar"></span>{{$new['created_at']}}</li>
                                    <li> <span class="fa fa-comment"></span>2 Comments</li>
                                    <li> <span class="fa fa-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
          </div>
      </div>
</div>
@endsection