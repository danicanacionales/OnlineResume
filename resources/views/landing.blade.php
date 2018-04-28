<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Danica Nacionales | Software Engineer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">


        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
            }

            .full-height {
                height: 100vh;
            }

            .photodiv {
                height: 100vh;
                padding: 0px !important;
                position: relative;
            }

            .bg-img {
                background-image: url(/../images/profile-img.jpg);
                background-size: cover;
                color: white;

                /* make text center */
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100vh;
            }
            
            .social-icon{
                padding: 3px;
            }

            .details {
                overflow: auto;
                padding-left: 100px;
                font-family: 'Karla', sans-serif;
            }

            ::-webkit-scrollbar {
                width: 0px;  /* remove scrollbar space */
                background: transparent;  /* optional: just make scrollbar invisible */
            }

            h3 {
                font-family: 'Roboto Slab', serif;
            }

            .title {
                font-weight: bold;
                /* background-color: #2A54F5;
                background-image: linear-gradient(45deg,#2A54F5 0%,#33E5BB 100%); */
                /* -webkit-background-clip: text; */
                /* webkit-text-fill-color: transparent; */
            }

            .row .col {
                padding: 1.75rem 1.75rem 0 1.75rem;
            }

            .project-title {
                /* font-size: 20px; */
                font-weight: bold;
            }

            .duration {
                color: #aaa;
                float: right;
                font-weight: 700;
            }

            ul li {
                font-size: 15px;
            }
        </style>

    </head>
    <body>
        <div class="row">
            <div class="photodiv full-height col s12 m6">
                <div class="bg-img">
                    <div class="info center-align">
                        <h3>Hi! I'm Danica</h3><br/>
                        
                        Developer & designer in Laguna, PH<br/>
                        Software engineer<br/><br/>

                        <div id="social-icons">
                            <a href="https://github.com/danicanacionales"><i class="social-icon fab fa-github fa-lg"></i></a>
                            <a href="www.linkedin.com/in/danicanacionales"><i class="social-icon fab fa-linkedin-in fa-lg"></i></a>
                            <a href="https://www.instagram.com/danicanacionales/"><i class="social-icon fab fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="details full-height col s12 m6">
                <div class="row">
                    <div class="title col s12 m2">INTRO</div>
                    <div class="col s12 m10">
                        I recently graduated with a degree of Computer Science from Malayan Colleges Laguna in the Philippines.<br/>
                        I have always been fascinated with technology and art, and in software engineering, I would be able to combine these and create something for people to use and see. I'm experienced in developing and designing systems both for web and desktop applications.<br/>

                    </div>

                </div>
                <div class="row">
                    <div class="title col s12 m2">SKILLS</div>
                    <div class="col s12 m10">
                        <b>LANGUAGES</b>
                        <table>
                            <tbody>
                                <tr>
                                    <td colspan="2">Object Oriented Programming using Java and C#</td>
                                    {{-- <td>Eclair</td> --}}
                                </tr>
                                <tr>
                                    <td>PHP</td>
                                    <td>HTML5</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>JavaScript</td>
                                    <td>CSS3</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        {{-- Object Oriented Programming using Java and C#, PHP, HTML5, CSS3, JavaScript<br/> --}}
                        <br/><b>DATABASE</b>
                        <table>
                            <tbody>
                                <tr>
                                    <td>MySQL</td>
                                    <td>Google Firestore</td>
                                </tr>
                            </tbody>
                        </table>
                            
                        {{-- </b> MySQL, Google Firestore </br> --}}
                        <br/><b>LIBRARIES & FRAMEWORKS</b>
                        <table>
                            <tbody>
                                <tr>
                                    <td>jQuery</td>
                                    <td>Laravel</td>
                                </tr>
                                <tr>
                                    <td>Bootstrap</td>
                                    <td>Materialize</td>
                                </tr>
                                <tr>
                                    <td>Google APIs</td>
                                    <td>Third Party APIs</td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- </b> jQuery, Laravel, Bootstrap, Materialize, Google APIs</br> --}}
                        <br/><b>TOOLS</b>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Git & Github</td>
                                    <td>Adobe Photoshop</td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- Git & Github, Adobe Photoshop --}}
                    </div>
                </div>
                <div class="row">
                    <div class="title col s12 m2">EDUCATION</div>
                    <div class="col s12 m10">
                        <b>Malayan Colleges Laguna</b></br>
                        <b><i>B.S. Computer Science, Major in Software Engineering</b></i><br/><br/>
                        <b>Courses: </b> Object Oriented Programming, Software Engineering, Relational Database Management, Data Structures and Algorithm Analysis, Automata and Language Theory<br/><br/>

                        Graduated: May 2018

                    </div>
                </div>
                <div class="row">
                    <div class="title col s12 m2">PROJECTS</div>
                    <div class="col s12 m10">
                        <div>
                            <div class="project-title">
                                Incident Report and Monitoring System
                                <i class="duration">City Government of Binan, PHL</i><br/>
                            </div>
                            
                            <i>Practicum Project</i> 
                            <ul class="browser-default">
                                <li>Created a mobile and web system that handles the monitoring, communication and incident reporting of the city's emergency response team.</li>
                                <li>Developed the web application using HTML, CSS, JavaScript, Google Firestore as database and third party APIs.</li>
                            </ul>
                        </div>
                        <div>
                            <b>Optimizing Multilateration Algorithm in Implementing BLE Mesh Network in Developing a Model for a Risk Reduction Messaging App</b><br/>
                            <i>Thesis</i><br/>
                            <ul class="browser-default">
                                <li>Simulated node localization and optimized the process and accuracy using various multilateration algorithms and localization techniques in MATLAB.</li>
                            </ul>
                        </div>
                        <div>
                            <b>Spaced Repetition Flashcard Program</b><br/>
                            Applied OOP in developing a Windows Form Application using C# and MySQL database.<br/><br/>
                        </div>
                        <div>
                            <b>Organizational Member Database</b><br/>
                            Developed a web application using PHP/Laravel and Google Firestore Database.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="title col s12 m2">ACHIEVEMENTS</div>
                    <div class="col s12 m10">
                        <div>
                            <b>2018 MCL Student Research Competition</b>
                            <div class="duration" style="float: right">APR 2018</div><br/>
                            Ranked 5th in the oral presentation for the research study 'Optimizing Multilateration Algorithm in Implementing BLE Mesh Network in Developing a Model for a Risk Reduction Messaging App'.<br/><br/>
                        </div>
                        <div>
                            <b>Dean's Lister</b>
                            <div class="duration" style="float: right">MAR 2017</div><br/>
                            Quarterly Weighted Average: 1.65<br/><br/>
                        </div>
                        <div>
                            <b>MCL Representative for IT Quiz Bee</b>
                            <div class="duration" style="float: right">FEB 2016</div><br/>
                            Represented Malayan Colleges Laguna in an interuniversity quiz bee competition held by University of Makati<br/><br/>
                        </div>
                        <div>
                            <b>College of Computer and Information Science Hackathon</b>
                            <div class="duration" style="float: right">OCT 2015</div><br/>
                            Placed 2nd in a programming hackathon held in Malayan Colleges Laguna.<br/><br/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="title col s12 m2">ORGANIZATIONS</div>
                    <div class="col s12 m10">
                        <div>
                            <b>College of Computer and Information Science Student Council</b>
                            <div class="duration" style="float: right">2016 - 2017</div><br/>
                            Elected as the Board of Director and is mainly responsible for the graphic design and publications.<br/><br/>
                        </div>
                        <div>
                            <b>Junior Philippine Computer Society - MCL Chapter</b>
                            <div class="duration" style="float: right">2015 - 2016</div><br/>
                            Involved in the planning of various organizational activities as the Computer Science Representative<br/><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
