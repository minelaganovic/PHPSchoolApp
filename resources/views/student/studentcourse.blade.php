@extends('front.layouts.layoutstudent')
@section('content')
<div class="section-2">
<div class="special_cource padding_top">
    <h1><i class="fa fa-list-alt" aria-hidden="true"></i> Vaši kursevi</h1>
    <br>
    <div class="row">
        @foreach ($courses as $course)
        @if ($course->state=='otvoren')
        <div class="col-sm-6 col-lg-6">
            <div class="single_special_cource">
                <img src="/images/{{$course->image}}" class="special_img" alt="">
                <div class="special_cource_text">
                    </form>
                    <h4>{{$course->state}}</h4>
                    <a><h3 style="color:red">{{$course->course}}</a>
                    <p>{{$course->infomation}}</p>
                    <h5>Predavanje</h5>
                    @foreach ($lectures as $lecture )
                       @if ($course->course==$lecture->course)
                        <ul>
                        <li>{{$lecture->textlecture}}</dt>
                            <h4><a style="color: red;" href="{{url('/download',$lecture->file)}}"><i class="fa fa-download" aria-hidden="true"></i></a></h4>
                        <li>- <span class="fa fa-file-text"></span> {{$lecture->file}}</li>
                        <br>
                        </ul>
                        @endif
                        @endforeach
                        <br>
                        <h5>Predloženi testovi:</h5>
                        @foreach ($tests as $ts)
                        @if($course->id==$ts->course_id)
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> {{$ts->tipeT}}</p>
                        <form action="">
                        <a href="{{"testload/".$ts['id']}}" class="btn_4">{{$ts->nameT}}</a>
                        </form>
                        @endif
                        @endforeach
                        <br>
                    <div class="author_info">
                       <div class="author_img">
                            <img src="{{asset('front/img')}}/onlinett.png" alt="">
                            <div class="author_info_text">
                                <p>Predavač:</p>
                                <h5><a href="#">{{$course->imePredavaca}}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <br>
    <br>
</div>
</div>
@endsection