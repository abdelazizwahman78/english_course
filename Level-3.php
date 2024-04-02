
<?php 
session_start();
include ("connect.php");
$email = $_SESSION['txtid'];
$qryname = "SELECT *  from  tblstudent where email='$email'";
$result = mysqli_query($con, $qryname);
if (mysqli_num_rows($result) == 0) {
  header("location:login.html");
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>IELTS Assist platform</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/indexall.css" rel="stylesheet" />
  
</head>
<style>
.hero_area {
    height: 12vh;
}
.card {
            background-color: #ecf5ff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width:90%;
            margin: 0 auto;
            text-align: left;
            color: #333;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 35px;
            margin-top: 20px;
            color:red;
            font-weight:800px;
        }

        ul {
            list-style: disc;
            margin-left: 20px;
            margin-bottom: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        .container-fluid p{
  text-align: center;
}
    </style>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <span>
            IELTS Assist platform
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="ViewCourse.php"> Back</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php"> Logout</a>
                </li>
              
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
<br/><br/><br/><br/><br/>

<div class="card">
<section>
    <h1>Level 3 - English</h1>

    <section>
        <h2>Reading</h2>
        <p>Tips for improving reading skills:</p>
        <ul>
            <li>Read a variety of texts, including literature, news articles, and research papers.</li>
            <li>Analyze and interpret the main ideas, themes, and arguments in the texts.</li>
            <li>Develop critical thinking skills by evaluating and questioning the information presented.</li>
        </ul>
        <p>Recommended resources:</p>
        <ul>
            <li>YouTube channels: <a href="https://www.youtube.com/user/EnglishClass101" target="_blank">EnglishClass101</a>, <a href="https://www.youtube.com/watch?v=cNyLs7YWFL8&list=PLaNNx1k0ao1v8I2C8DAxXOayC3dG00xtj" target="_blank">Learn English with Emma</a></li>
            <li>Online courses: <a href="https://www.coursera.org/learn/esl-reading" target="_blank">Coursera's "English for Intermediate Learners"</a>, <a href="https://www.edx.org/course/english-grammar-and-style" target="_blank">edX's "English Grammar and Style"</a></li>
        </ul>
        <p>Downloadable PDF summaries:</p>
        <ul>
            <li><a href="pdf/Reading-L3.pdf" target="_blank">Reading Summary - English Level 3</a></li>
        </ul>
    </section>
    <hr>

    <section>
        <h2>Writing</h2>
        <p>Tips for improving writing skills:</p>
        <ul>
            <li>Write complex and well-structured essays, reports, and academic papers.</li>
            <li>Develop a strong argument or thesis statement and support it with evidence.</li>
            <li>Enhance your writing style and coherence by using advanced vocabulary and sentence structures.</li>
        </ul>
        <p>Recommended resources:</p>
        <ul>
            <li>YouTube channels: <a href="https://www.youtube.com/watch?v=vWQk67meYUA" target="_blank">English Lessons with Adam</a>, <a href="https://www.youtube.com/watch?v=PgwmAUJx248" target="_blank">Learn English with Rebecca</a></li>
            <li>Online courses: <a href="https://www.coursera.org/learn/writing-english-university" target="_blank">Coursera's "English for Career Development"</a>, <a href="https://www.udemy.com/course/master-english-essays/" target="_blank">Udemy's "Business English Writing Essentials"</a></li>
        </ul>
        <p>Downloadable PDF summaries:</p>
        <ul>
            <li><a href="pdf/Writing_L3.pdf" target="_blank">Writing Summary - English Level 3</a></li>
        </ul>
    </section>
    <hr>

    <section>
        <h2>Listening</h2>
        <p>Tips for improving listening skills:</p>
        <ul>
            <li>Listen to a variety of authentic materials, including lectures, podcasts, and interviews.</li>
            <li>Improve your listening comprehension by focusing on detail, tone, and inference.</li>
            <li>Practice note-taking and summarizing the main points while listening.</li>
        </ul>
        <p>Recommended resources:</p>
        <ul>
            <li>YouTube channels: <a href="https://www.youtube.com/user/EnglishClass101" target="_blank">EnglishClass101</a>, <a href="https://www.youtube.com/watch?v=Ff5FUoo2YZA" target="_blank">Learn English with Emma</a></li>
            <li>Online courses: <a href="https://www.coursera.org/specializations/speaklistenenglish" target="_blank">Coursera's "Business English: Speaking and Listening"</a>, <a href="https://www.udemy.com/course/master-english/?kw=English+Listening&src=sac" target="_blank">Udemy's "Conversational English: Speaking Fluently and Confidently"</a></li>
        </ul>
        <p>Downloadable PDF summaries:</p>
        <ul>
            <li><a href="pdf/Listening-L3.pdf" target="_blank">Listening Summary - English Level 3</a></li>
        </ul>
    </section>
    <hr>

    <section>
        <h2>Grammar</h2>
        <p>Tips for improving grammar skills:</p>
        <ul>
            <li>Master advanced grammar concepts, such as conditional sentences, subjunctive mood, and complex clauses.</li>
            <li>Practice applying grammar rules accurately and appropriately in your speaking and writing.</li>
            <li>Develop an understanding of English grammar through extensive reading and analysis.</li>
        </ul>
        <p>Recommended resources:</p>
        <ul>
            <li>YouTube channels: <a href="youtube.com/watch?v=pv5kuMclHqM&list=PLxYD9HaZwsI5C0d8CivHvoI_-0rs8XMfc" target="_blank">English Lessons with Adam</a>, <a href="https://www.youtube.com/c/LetsTalk" target="_blank">Learn English with Let's Talk - Free English Lessons</a></li>
            <li>Online courses: <a href="https://www.coursera.org/specializations/intermediate-grammar" target="_blank">Coursera's "Advanced Grammar and Writing"</a>, <a href="https://www.udemy.com/course/easy-english-grammar-course/" target="_blank">Udemy's "Advanced English Grammar Rules"</a></li>
        </ul>
        <p>Downloadable PDF summaries:</p>
        <ul>
            <li><a href="pdf/grammar_L3.pdf" target="_blank">Grammar Summary - English Level 3</a></li>
        </ul>
    </section>
    <hr>
</section>

    </div>

  <br/> <br/> <br/> <br/> <br/>
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2024 All Rights Reserved By University of Technology & Applied Sciences'Students
    </p>
  </section>
  <!-- footer section -->


 
</body>

</html>