<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>You Search for {{ $searchterm }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <h1 style="text-align:center;">You Searched for <em>{{ $searchterm }} </em></h1>

    <table style="width:100px; margin:auto;">
  <tr>
    <th>Title</th>
    <th>Genre</th>
    <th>Rating</th>
  </tr>

    @foreach($dvds as $dvd)
    <tr>
    <td style="background-color:pink;">{{$dvd->title}}</td>
    <td style="background-color:lightsteelblue;">{{$dvd->genre_name}}</td>
    <td style="background-color:pink;">{{$dvd->rating_name}}</td>
      <tr>
    @endforeach


    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>


  </body>
</html>
