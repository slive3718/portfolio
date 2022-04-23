<?php include('header.html')?>
<style>
    body{
        background-color:#DAE3E7;
    }
    .jumbotron{
        font-family:'Montserrat', sans-serif;
        color:#515355;
    }
    .display-4{
        font-weight:700;
        font-size:40px;
    }

    .icon{
        font-size: 40px;
        margin-left: 5px;
        color:#515355;
    }
    .icon-box{
        margin-top: 20px;
    }

    .profile-info{
        /*background-color:white;*/
        width:100%;
    }

    .about-me{
        max-width:800px;

        margin-left: 300px
    }
    .about-me-right{
        max-width:800px;
        max-height:300px;
        margin-left: 50px
    }

    .emploer-icon{
        height:50px
    }
    .profile-photo{
        margin-top:-15px
    }
</style>
<body>
<div class="container-fluid">


   <div class="row">
       <div class="col">
           <div class="jumbotron jumbotron-fluid mt-2 bg-white p-5">
               <div class="container">
                   <img alt="profile" class="profile-photo position-absolute" src="assets/images/profile_photo.jpg" style="border-radius:50%; max-width:150px; max-height:150px;  border:1px solid gray">
                   <div class="display-4 float-left" style="margin-left:170px">Rexter Dayuta <br>
                   <span class="lead">Full Stack Web Developer</span>
                       <div class="icon-box mt-1" >
                           <a href="" class="btn icon ml-0"><i class="fa-brands fa-facebook"></i></a>
                           <a href="" class="btn icon"><i class="fa-brands fa-linkedin"></i></a>
                           <a href="" class="btn icon"><i class="fa-brands fa-github"></i></a>
                       </div>
                   </div>
               </div>

           </div>

       </div>
   </div>
    <div class="row profile-info mt-5">
        <div class="col-7">
            <div class="card about-me">
                <div class="card-header">
                    <span class="mx-5">About Me</span>
                </div>
                <div class="card-body mx-5">
                     My name is Rexter Dayuta I am a 26-years-old Web Developer with 3+ years experience in web applications building and management.
                    I already developed different kind of website and web application using PHP and Codeigniter Framework.
                </div>
            </div>
            <div class="card about-me my-5">
                <div class="card-header">
                    <span class="mx-5">Employers / Work Experience</span>
                </div>
                <div class="card-body m-5">
                    <div class="card-title">
                        <img alt="upwork" class="emploer-icon" src="assets/images/ycl_logo_header.png" style=" max-width:120px; max-height:120px;  border:1px solid gray"> Yourconference
                    </div>
                    <p>Codeigniter Web Application Developer 2021-2022 </p>
                    YCL is made up of technicians, developers, designers, producers, and writers with a single goal: to produce the best event experience possible.
                    Always striving for new possibilities, YCL is driven by a uniquely talented and inspired management team.
                </div>
                <hr>
                <div class="card-body m-5">

                    <div class="card-title">
                        <img alt="upwork" class="emploer-icon" src="assets/images/upwork.png" style="max-width:120px; max-height:120px;  border:1px solid gray"> Upwork
                    </div>
                    <p>Freelance Web Engineer 2021-2022 </p>
                    I work as a Web Developer using PHP, JS, Mysql and Codeigniter framework.
                </div>
                <hr>
                <div class="card-body m-5">
                    My name is Rexter Dayuta I am a 26-years-old Web Developer with 3+ years experience in web applications building and management.
                    I already developed different kind of website and web application using PHP and Codeigniter Framework.
                </div>
                <hr>
            </div>
        </div>

        <div class="col-4">
            <div class="card  about-me-right">
                <div class="card-header">
                    <span class="mx-5">Contact Me</span>
                </div>
                <div class="card-body mx-5">
                   <span> <i class="fa-solid fa-envelope"></i> rexterdayuta@gmail.com</span><br>
                   <span> <i class="fa-solid fa-mobile"></i> 09669071238</span><br>
                   <span> <i class="fa-brands fa-skype"></i> live:.cid.3a0b75f2218167b4</span>
                </div>
            </div>
            <div class="card skills about-me-right mt-5">
                <div class="card-header">
                    <span class="mx-5">Skills</span>
                </div>
                <div class="card-body mx-5 pb-5">
                    <label>PHP</label><span style="float:right; color:#9da0a4">Pro</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <label>Codeigniter</label><span style="float:right; color:#9da0a4">Intermediate</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%; color:#515355" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <label>Mysql</label><span style="float:right; color:#9da0a4">Pro</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <label>Javascript</label><span style="float:right; color:#9da0a4">Intermediate</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 76%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <label>C++</label><span style="float:right; color:#9da0a4">Beginner</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <label>Java</label><span style="float:right; color:#9da0a4">Beginner</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</body>
<?php include('footer.html')?>