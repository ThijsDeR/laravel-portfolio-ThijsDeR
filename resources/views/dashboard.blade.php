@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/dashboardStyles.css">
    <script src="js/navScript.js" defer></script>
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
                <li><a href="" target="_blank">Study Progress</a></li>
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

                    @foreach($grades as $grade)
                        <tr>
                            <td>0</td>
                            <td>{{$grade->course_name}}</td>
                            <td>0 EC</td>
                            <td>{{$grade->test_name}}</td>
                            <td>{{$grade->best_grade ? $grade->best_grade : '0'}}</td>
                        </tr>
                    @endforeach
                </table>
                <div id="progress-bar">
                    <div id="progress" style="width: 37.5%; background-color: lightcoral;">
                        <p>22.5</p>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection('content')