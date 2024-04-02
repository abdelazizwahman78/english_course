
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
<h1>Level 4 - English</h1>

<section>
    <h2>Reading</h2>
    <p>Tips for improving reading skills:</p>
    <ul>
        <li>Read a wide range of texts, including academic articles, literary works, and opinion pieces.</li>
        <li>Analyze and evaluate the author's arguments, claims, and evidence.</li>
        <li>Develop critical reading skills by examining the implicit meaning and rhetorical devices used in texts.</li>
    </ul>
    <p>Recommended resources:</p>
    <ul>
        <li>YouTube channels: <a href="https://www.youtube.com/user/EnglishClass101" target="_blank">EnglishClass101</a>, <a href="https://www.youtube.com/c/EngVid" target="_blank">EngVid</a></li>
        <li>Online courses: <a href="https://www.coursera.org/learn/glasscock" target="_blank">Coursera's "Academic English: Reading and Writing"</a>, <a href="https://www.edx.org/course/ielts-academic-test-preparation?index=product&queryID=9da489f339763cfdc1a6667736511831&position=1&search_index=product&results_level=first-level-results&term=English+Reading&campaign=IELTS+Academic+Test+Preparation&source=edX&product_category=course&placement_url=https%3A%2F%2Fwww.edx.org%2Fsearch" target="_blank">edX's "English Reading"</a></li>
    </ul>
    <p>Downloadable PDF summaries:</p>
    <ul>
        <li><a href="pdf/Reading-L3.pdf" target="_blank">Reading Summary - English Level 4</a></li>
    </ul>
</section>
<hr>

<section>
    <h2>Writing</h2>
    <p>Tips for improving writing skills:</p>
    <ul>
        <li>Write coherent and well-structured essays, research papers, and professional documents.</li>
        <li>Develop persuasive arguments and use evidence effectively to support your claims.</li>
        <li>Refine your writing style by incorporating advanced vocabulary, sentence variety, and rhetorical devices.</li>
    </ul>
    <p>Recommended resources:</p>
    <ul>
        <li>YouTube channels: <a href="https://www.youtube.com/user/EnglishLessons4U" target="_blank">EnglishLessons4U</a>, <a href="https://www.youtube.com/watch?v=tN4WRsbjmuo" target="_blank">Write to Top</a></li>
        <li>Online courses: <a href="https://www.coursera.org/learn/english-composition" target="_blank">Coursera's "English Composition I"</a>, <a href="https://www.udemy.com/course/betterbusinesswriting-level2/" target="_blank">Udemy's "Advanced English Writing Skills"</a></li>
    </ul>
    <p>Downloadable PDF summaries:</p>
    <ul>
        <li><a href="pdf/Writing_L3.pdf" target="_blank">Writing Summary - English Level 4</a></li>
    </ul>
</section>
<hr>

<section>
    <h2>Listening</h2>
    <p>Tips for improving listening skills:</p>
    <ul>
        <li>Engage with authentic materials, including lectures, podcasts, and debates on various topics.</li>
        <li>Practice active listening techniques, such as identifying key information, understanding nuances, and inferring meaning.</li>
        <li>Improve your note-taking skills to capture important points and details while listening.</li>
    </ul>
    <p>Recommended resources:</p>
    <ul>
        <li>YouTube channels: <a href="https://www.youtube.com/watch?v=bEB8-SWMYhI" target="_blank">EnglishLessons4U</a>, <a href="https://www.youtube.com/watch?v=qVcVdz0dD4w" target="_blank">Fluency Matters</a></li>
        <li>Online courses: <a href="https://www.coursera.org/learn/ielts-listening-speaking" target="_blank">Coursera's "English for Business and Entrepreneurship: Business Listening"</a>, <a href="https://www.coursera.org/specializations/speaklistenenglish?" target="_blank">Udemy's "English Listening and Speaking"</a></li>
    </ul>
    <p>Downloadable PDF summaries:</p>
    <ul>
        <li><a href="pdf/Listening-L3.pdf" target="_blank">Listening Summary - English Level 4</a></li>
    </ul>
</section>
<hr>

<section>
    <h2>Grammar</h2>
    <p>Tips for improving grammar skills:</p>
    <ul>
        <li>Master advanced grammar topics, including complex sentence structures, verb tenses, and modals.</li>
        <li>Practice using grammar accurately and appropriately in both written and spoken English.</li>
        <li>Deepen your understanding of grammar through extensive reading, writing, and language analysis.</li>
    </ul>
    <p>Recommended resources:</p>
    <ul>
        <li>YouTube channels: <a href="https://www.youtube.com/watch?v=Klnroe1UBRs" target="_blank">English Lessons with Adam</a>, <a href="https://www.youtube.com/c/AjHogeEffortlessEnglish" target="_blank">Effortless English</a></li>
        <li>Online courses: <a href="https://www.coursera.org/specializations/learn-english-writing-grammar-complex-sentences" target="_blank">Coursera's "Learn English: Intermediate Grammar"</a>, <a href="https://www.udemy.com/course/advanced-english-grammar/" target="_blank">Udemy's "Advanced English Grammar"</a></li>
    </ul>
    <p>Downloadable PDF summaries:</p>
    <ul>
        <li><a href="pdf/Grammar-L3.pdf" target="_blank">Grammar Summary - English Level 4</a></li>
    </ul>
</section>
<hr>

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