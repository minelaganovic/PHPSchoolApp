@extends('front.layouts.layoutindex')
@section('content')
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5 style="color: #ff5757;">Nauči Da Programiraš</h5>
                            <h1>Najbolja Online Platforma Za Učenje PHP Programiranja</h1>
                            <a href="/register" class="btn_1">Pridruži se kao Polaznik</a>
                            <a href="/register" class="btn_2">Pridruži se kao Predavač</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>O NAMA</h5>
                        <h2>Najbolji i najbrži sistem učenja!</h2>
                        <br>
                        <p>Tehnološki napredak kojem svakodnevno svedočimo nameće sve veću potrebu za kompetentnim programerima. Veštine programiranja su sve traženije i nije slučajno što profesija developera i slična zanimanja privlače toliko interesovanja. Učite PHP programiranje od najboljih...</p>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="bi bi-pencil-square"></span>
                                    <h4>Učite bilo gde!</h4>
                                    <p>Plan i program učenja osimišljen sa fokusom na tutorijale i testiranja polaznika.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="bi bi-person-workspace"></span>
                                    <h4>Stručni Predavači!</h4>
                                    <p>Najbolji predavači sa aktivnim radom sa polaznicima.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                        <img style="border-radius: 450px" src="{{asset('front/img')}}/phpprogr.webp" alt="">
                        <img style="border-radius: 450px" src="{{asset('front/img')}}/phpdevelopment.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p style="color:#ff5757;">Najaktuelnije</p>
                        <h2>Novosti</h2>
                    </div>
                </div>
            </div>
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
                                <ul>
                                  <li style="color: black"><span class="fa fa-calendar"></span>{{$new['created_at']}}</li>
                                    <li> <span class="fa fa-comment"></span>4 Comments</li>
                                    <li> <span class="fa fa-heart"></span>3k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </section>
@endsection

 