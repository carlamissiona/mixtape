@extends('layout')



@section('content')


<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/174179940?byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
<p><a href="https://vimeo.com/174179940">LENNY KRAVITZ | Alexandre Chatelard</a> from <a href="https://vimeo.com/allensmithee">Allen Smithee</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
@foreach ($genrelist as $genre)
  <h3>{{ ucfirst(trans($genre)) }}</h3>
        @foreach ($genres as $songs)
          @foreach ($songs as $song)
                @if(strpos($song->genres, $genre) !== FALSE  )
                    <div class="col-lg-4 col-md-4 col-sm-4 mb">
                      <div class="content-panel pn">
                        <div id="profile-02">
                          <div class="user">
                            <img src="img/friends/fr-06.jpg" class="img-circle" width="80">
                            <h4>{{ $song->name }}</h4>
                            <h5>{{ $song->artist }}</h5>
                            <h5>{{ $song->genres }}</h5>
                          </div>
                        </div>
                        <div class="pr2-social centered">
                          <audio controls="" style="width:200px;height:30px;margin:8px 5px;">
                              <source src="{{ $song->localfile }}" type="audio/mpeg">
                            </audio>
                        </div>
                      </div>

                    </div>

                @endif

            @endforeach
        @endforeach
@endforeach



@endsection
