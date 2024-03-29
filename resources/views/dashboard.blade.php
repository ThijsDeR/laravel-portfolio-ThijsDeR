@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/dashboardStyles.css">
    <link rel="stylesheet" href="css/general/sideLinkStyles.css">
    <script src="js/dashboardScript.js" defer></script>
@endsection('head-content')

@section('content')
    <main id="main">
        <div id="links">
            <p class="" onclick="toggleLinks(event)">&gt;</p>
            <ul id="links-list">
                <li>
                    <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank">Course Regulations</a>
                </li>
                <li>
                    <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf" target="_blank">Implementation Regulations</a>
                </li>
                <li>
                    <a href="https://learn.hz.nl/my/" target="_blank">HZ Learn</a>
                </li>
                <li>
                    <a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="_blank">Teams</a>
                </li>
                <li>
                    <a href="https://hz.osiris-student.nl/" target="_blank">Study Progress</a>
                </li>
                <li>
                    <a href="https://github.com/ThijsDeR/HZ-ICT-Repo" target="_blank">Github Repo</a>
                </li>
            </ul>
        </div>
        <div id="section" class="active">
            <div id="table">
                <table>
                    <tr>
                        <th>Quartile</th>
                        <th>Course</th>
                        <th>EC</th>
                        <th>Exam</th>
                        <th>Grade</th>
                    </tr>
                    @foreach($quartiles as $quartileIndex => $quartile)
                        @foreach($quartile->courses as $courseIndex => $course)
                            @foreach($course->ecs as $ecIndex => $ec)
                                @foreach($ec->exams as $examIndex => $exam)
                                    <tr>
                                        @if ($examIndex === 0 && $ecIndex === 0 && $courseIndex === 0)
                                            <td rowspan="{{$quartile->span()}}"><a href="{{route('quartiles.show', $quartile)}}" class="noStyle">{{$quartile->quartile}}</a></td>
                                        @endif
                                        @if ($examIndex === 0 && $ecIndex === 0)
                                            <td rowspan="{{$course->span()}}"><a href="{{route('courses.show', [$quartile, $course])}}" class="noStyle">{{$course->name}}</a></td>
                                        @endif
                                        @if ($examIndex === 0)
                                            <td rowspan="{{$ec->span()}}"><a href="{{route('ecs.show', [$quartile, $course, $ec])}}" class="noStyle">{{$ec->ec}} EC</a></td>
                                        @endif
                                            <td><a href="{{route('exams.show', [$quartile, $course, $ec, $exam])}}" class="noStyle">{{$exam->name}}</a></td>
                                            <td><a href="{{route('exams.show', [$quartile, $course, $ec, $exam])}}">{{$exam->grade}}</a></td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endforeach
                    @endforeach
        

                </table>
                <div id="progress-bar">
                    <div id="progress" style="width: {{($currentEc / $maxEc) * 100}}%; background-color: {{$progressBarColor}};">
                        <p>{{$currentEc}}</p>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection('content')