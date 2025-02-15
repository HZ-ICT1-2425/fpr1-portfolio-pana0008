<x-layout.main>
    <br>
    <br>
    <br>
    <!--Table-->
    <link href="./css/table.css" rel="stylesheet">
    <div class="dashboard-table">
        <table>
            <thead>
            <tr>
                <th>Quarter</th>
                <th>Course</th>
                <th>ECs</th>
                <th>Exam</th>
                <th>Grade</th>

            </tr>
            </thead>
            <tr>
                <td rowspan="3">1</td>
                <td>Programme and Career Orientation</td>
                <td>2.5</td>
                <td>Presentation (individual) </td>
                <td><input type="text" class="grade-input"></td>
            </tr>
            <tr>
                <!-- Quarter 1 -->
                <td>Computer Science Basics</td>
                <td>5</td>
                <td>Written knowledge test</td>
                <td><input type="text" class="grade-input"></td>
            </tr>
            <tr>
                <!-- Quarter 1 -->
                <td>Programming Basics</td>
                <td>5</td>
                <td>Case study exam</td>
                <td><input type="text" class="grade-input"></td>
            </tr>
            <tr>
                <td rowspan="2">2</td>
                <td rowspan="2"> Object-Oriented Programming</td>
                <td rowspan="2">10</td>
                <td>Presentation (group)</td>
                <td><input type="text" class="grade-input"></td>
            </tr>
            <tr>
                <!-- Quarter 2 -->
                <!--Object-Oriented Programming-->
                <!--Credits-->
                <td>Written knowledge test</td>
                <td><input type="text" class="grade-input"></td>
            </tr>

            <tr>
                <td rowspan="4">3</td>
                <td rowspan="4">Framework Project 1</td>
                <td rowspan="4">10</td>
                <td>On-site case study exam </td>
                <td><input type="text" class="grade-input"></td>
            </tr>
            <tr>
                <!-- Quarter 3 -->
                <!--Framework Project 1-->
                <!--ECs-->
                <td>Database exam</td>
                <td><input type="text" class="grade-input"></td>
            </tr>
            <tr>
                <!-- Quarter 3 -->
                <!--Framework Project 1-->
                <!--ECs-->
                <td>Group presentation on project result</td>
                <td><input type="text" class="grade-input"></td>
            </tr>
            <tr>
                <!-- Quarter 3 -->
                <!--Framework Project 1-->
                <!--ECs-->
                <td>Group portfolio with individual elements on requirements</td>
                <td><input type="text" class="grade-input"></td>
            </tr>

            <tr>
                <td rowspan="3">4</td>
                <td rowspan="3">Framework Project 2</td>
                <td rowspan="3">10</td>
                <td>Final group delivery</td>
                <td><input type="text" class="grade-input"></td>
            </tr>

            <tr>
                <!-- Quarter 4 -->
                <!--Framework Project 2-->
                <!--ECs-->
                <td>Individualproject assessment</td>
                <td><input type="text" class="grade-input"></td>
            </tr>

            <tr>
                <!-- Quarter 4 -->
                <!--Framework Project 2-->
                <!--ECs-->
                <td>IT Development portfolio</td>
                <td><input type="text" class="grade-input"></td>
            </tr>

            <tr>
                <td>3 & 4</td>
                <td>Business IT Consultancy Basics</td>
                <td>2.5</td>
                <td>Video</td>
                <td><input type="text" class="grade-input"></td>
            </tr>

            <tr>
                <td rowspan="2">All year</td>
                <td>Personal Professional Development Exploration</td>
                <td>12.5</td>
                <td>Criterium focused interview</td>
                <td><input type="text" class="grade-input"></td>
            </tr>

            <tr>
                <!--All year-->
                <td>IT Personality</td>
                <td>2.5</td>
                <td>Portfolio</td>
                <td><input type="text" class="grade-input"></td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="completeness-bar">
        <div class="completeness-percentage">
            <p id="success">45 ECs</p>
            <p id="maximum">60 ECs</p>
        </div>
    </div>
    <div id="progress-text">In order to pass your first year in the HBO-ICT programme you need to have gathered at least 45 ECs out of 60 ECs/</div>
    <br>
    <br>
    <br>
</x-layout.main>
