@extends('layout')



@section('content')
{{ $genres["instrumental"] }}
<h3>songlist</h3>
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
