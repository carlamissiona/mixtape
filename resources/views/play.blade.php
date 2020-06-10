<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
            crossorigin="anonymous">
    </script>
    <script src="https://www.jqueryscript.net/demo/HTML5-Audio-Player-jQuery/dist/js/jquery.simpleaudioplayer.js"
          >
    </script>

	<link rel="stylesheet" href="https://www.jqueryscript.net/demo/HTML5-Audio-Player-jQuery/dist/css/simpleaudioplayer.min.css">

    <meta charset="utf-8">
    <script>

  $(document).ready(function() {

    $('#a1').simpleAudioPlayer({
      title: "jQueryScript.Net: Sample MP3",
      chapters: [
        {
          "seconds": 10,
          "title": "<strong>Chapter 1:</strong> jQuery"
        },
        {
          "seconds": 15,
          "title": "<strong>Chapter 2:</strong> Plugin"
        },
        {
          "seconds": 20,
          "title": "<strong>Chapter 3:</strong> Audio"
        },
        {
          "seconds": 25,
          "title": "<strong>Chapter 4:</strong> Player"
        }
      ]
    });



  });
</script>

<style>
  * {
    box-sizing: border-box;
  }
  body {
    background: #fafafa;
    margin: 0;
    padding: 0;
  }
  main {
    text-align: center;
    max-width: 1000px;
    width: 90%;
    margin: 150px auto;
    padding: 2em;
  }

  .simpleAudioPlayer {
    margin: 0 auto 2em auto;
  }
</style>


    <title></title>
  </head>
  <body>
    <ul>
        <li>

        			<h1>Simple Clean HTML5 Audio Player</h1>
        			<audio id="a1" src="https://files.freemusicarchive.org/storage-freemusicarchive-org/music/ccCommunity/Chad_Crouch/Arps/Chad_Crouch_-_Organisms.mp3?crossorigin=anonymous" crossorigin="anonymous"></audio>


        </li>
    </ul>

  </body>
</html>
