<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title; }}</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/dashboardStyles.css">
    <link rel="stylesheet" href="css/navStyles.css">
    <script src="js/dashboardScript.js" defer></script>
    <script src="js/navScript.js" defer></script>
</head>

<body>
    <nav>
        <h2 id="title" onclick="scrollToTop('main')">{{ $title; }}</h2>
        <div id="nav">
            <ul id="nav-list">
                <li><a href="home">Home</a></li>
                <li><a href="profile">Profile</a></li>
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="faq">FAQ</a></li>
                <li><a href="blog">Blog</a></li>
            </ul>
            <div id="burger-menu" onclick="burgerMenuToggle()">
                <div id="menu-btn" class="active"></div>
                <div id="close-btn" class=""></div>
            </div>
        </div>
    </nav>
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

                    <!-- Quartile 0 -->

                    <tr>
                        <td rowspan="3">0</td>
                        <td rowspan="3">Personal Professional Development</td>
                        <td class="ec">12.5 EC</td>
                        <td>Portfolio</td>
                        <td class="grade">0</td>
                    </tr>
                    <tr>
                        <td class="ec">1.25 EC</td>
                        <td>Personality 1</td>
                        <td class="grade">0</td>
                    </tr>
                    <tr>
                        <td class="ec">1.25 EC</td>
                        <td>Personality 2</td>
                        <td class="grade">0</td>
                    </tr>

                    <!-- Quartile 1 -->

                    <tr>
                        <td rowspan="3">1</td>
                        <td>Programme and Career Orientation</td>
                        <td class="ec">2.5 EC</td>
                        <td>Assesment Exam</td>
                        <td class="grade">10</td>
                    </tr>
                    <tr>
                        <td>Computer Science Basics</td>
                        <td class="ec">5 EC</td>
                        <td>Written Exam</td>
                        <td class="grade">9.8</td>
                    </tr>
                    <tr>
                        <td>Programming Basics</td>
                        <td class="ec">5 EC</td>
                        <td>Case Study Exam</td>
                        <td class="grade">10</td>
                    </tr>

                    <!-- Quartile 2 -->

                    <tr>
                        <td rowspan="2">2</td>
                        <td rowspan="2">Object Oriented Programming</td>
                        <td class="ec" rowspan="2">10 EC</td>
                        <td>Case Study Exam</td>
                        <td class="grade">10</td>
                    </tr>
                    <tr>
                        <td>Project</td>
                        <td class="grade">8.5</td>
                    </tr>

                    <!-- Quartile 3 -->

                    <tr>
                        <td rowspan="4">3</td>
                        <td>Framework Development 1</td>
                        <td class="ec">5 EC</td>
                        <td>Case Study Exam</td>
                        <td class="grade">0</td>
                    </tr>
                    <tr>
                        <td rowspan="3">Framework Project 1</td>
                        <td class="ec" rowspan="3">7.5 EC</td>
                        <td>Project</td>
                        <td class="grade">0</td>
                    </tr>
                    <tr>
                        <td>Assessment</td>
                        <td class="grade">0</td>
                    </tr>
                    <tr>
                        <td>Report</td>
                        <td class="grade">0</td>
                    </tr>

                     <!-- Quartile 4 -->

                     <tr>
                        <td rowspan="3">4</td>
                        <td rowspan="3">Framework Project 2</td>
                        <td class="ec" rowspan="3">10 EC</td>
                        <td>Portfolio/td>
                        <td class="grade">0</td>
                    </tr>
                    <tr>
                        <td>Project</td>
                        <td class="grade">0</td>
                    </tr>
                    <tr>
                        <td>Assessment</td>
                        <td class="grade">0</td>
                    </tr>
                </table>
                <div id="progress-bar">
                    <div id="progress" style="width: 37.5%; background-color: lightcoral;">
                        <p>22.5</p>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>

</html>