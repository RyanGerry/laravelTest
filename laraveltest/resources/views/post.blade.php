@extends ('layout')

@section ('content')
<title>
    "Ryans PaceCard"
</title>
<head>
    "Ryans pacecard"
</head>
<body>
        <table class="minimalistBLack">
            <tr>
                <th>Horse</th>
                <th>FinishingPosition</th>
                <th>Course</th>
                <th>CourseGoing</th>
                <th>Distance</th>
                <th>Trainer</th>
                <th>Jockey</th>
                <th>PaceformRating</th>
                <th>RaceLink</th>
                <th>HorseLink</th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->Horse}}</td>
                <td>{{$post->FinishingPosition}}</td>
                <td>{{$post->Course}}</td>
                <td>{{$post->CourseGoing}}</td>
                <td>{{$post->Distance}}</td>
                <td>{{$post->Trainer}}</td>
                <td>{{$post->Jockey}}</td>
                <td>{{$post->PaceformRating}}</td>
                <td><a href={{$post->RacingPostRaceLink}}>RP Race</a></td>
                <td><a href={{$post->RacingPostHorseLink}}>RP Horse</a></td>
            </tr>
            @endforeach
        </table>
</body>
@section ('content')