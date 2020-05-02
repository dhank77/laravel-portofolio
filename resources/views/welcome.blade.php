@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
        <div class="w-100">
            <h2 class="mb-0" style="font-size:80px">M. Hamdani Ilham Latjoro,
                <span class="text-primary">S.T</span>
            </h2>
            <div class="subheading mb-5">Jalan Talasalapang 1 Blok Y no 1, Makassar ·
                <a href="mailto:name@email.com">hamdani@binggostudio.com</a>
            </div>
            <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
            <div class="social-icons">
                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
        <div class="w-100">
            <h2 class="mb-5">Experience</h2>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Freelance Web Developer</h3>
                    {{-- <div class="subheading">Intelitec Solutions</div> --}}
                    <div class="text-primary mb-3"> November 2017 - Present</div>
                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                </div>
                <div class="resume-date text-md-right">
                </div>
            </div>
            
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Freelance Mobile Developer</h3>
                    {{-- <div class="subheading">Intelitec Solutions</div> --}}
                    <div class="text-primary mb-3"> September 2019 - Present</div>
                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                </div>
                <div class="resume-date text-md-right">
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Web Developer</h3>
                    <div class="subheading">IT Team South Sulawesi</div>
                    <div class="text-primary mb-3"> January 2020 - Present</div>
                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                </div>
                <div class="resume-date text-md-right">
                </div>
            </div>
        </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
        <div class="w-100">
            <h2 class="mb-5">Education</h2>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">University of Colorado Boulder</h3>
                    <div class="subheading mb-3">Bachelor of Science</div>
                    <div>Computer Science - Web Development Track</div>
                    <p>GPA: 3.23</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">August 2006 - May 2010</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                <div class="resume-content">
                    <h3 class="mb-0">James Buchanan High School</h3>
                    <div class="subheading mb-3">Technology Magnet Program</div>
                    <p>GPA: 3.56</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">August 2002 - May 2006</span>
                </div>
            </div>

        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
        <div class="w-100">
            <h2 class="mb-5">Skills</h2>

            <div class="subheading mb-3">Programming Languages &amp; Tools</div>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item">
                    <i class="fab fa-html5"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-css3-alt"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-js-square"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-angular"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-react"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-node-js"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-sass"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-less"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-wordpress"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-gulp"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-grunt"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-npm"></i>
                </li>
            </ul>

            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Mobile-First, Responsive Design</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Cross Browser Testing &amp; Debugging</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Cross Functional Teams</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Agile Development &amp; Scrum</li>
            </ul>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
        <div class="w-100">
            <h2 class="mb-5">Interests</h2>
            <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
            <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
        <div class="w-100">
            <h2 class="mb-5">Awards &amp; Certifications</h2>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    Google Analytics Certified Developer</li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    Mobile Web Specialist - Google Certification</li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    1<sup>st</sup>
                    Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    1<sup>st</sup>
                    Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    2<sup>nd</sup>
                    Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    1<sup>st</sup>
                    Place - James Buchanan High School - Hackathon 2006</li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    3<sup>rd</sup>
                    Place - James Buchanan High School - Hackathon 2005</li>
            </ul>
        </div>
    </section>

</div>
@endsection
