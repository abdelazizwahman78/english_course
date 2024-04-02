
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
.container-fluid p{
  text-align: center;
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
                  <a class="nav-link" href="StudentHomepage.php"> Back</a>
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
        <h1>English Course</h1>

        <section>
            <h2>Reading</h2>
            <p>Tips for improving reading skills:</p>
            <ul>
                <li>Read a variety of texts regularly, starting with simple ones and gradually increasing difficulty.</li>
                <li>Focus on comprehension by asking yourself questions about the text and summarizing what you've read.</li>
                <li>Expand your vocabulary by looking up unfamiliar words and using context clues to understand their meanings.</li>
            </ul>
            <p>Recommended resources:</p>
            <ul>
                <li>YouTube channels: <a href="https://www.youtube.com/user/EnglishClass101" target="_blank">EnglishClass101</a>, <a href="https://www.youtube.com/c/LearnEnglishwithEmma" target="_blank">Learn English with Emma</a></li>
                <li>Online courses: <a href="https://www.duolingo.com" target="_blank" >Duolingo</a>, <a href="https://www.coursera.org/specializations/english-for-beginners" target="_blank">Coursera's "English for Beginners"</a></li>
            </ul>
            <p>Downloadable PDF summaries:</p>
            <ul>
                <li><a href="pdf/English-L1-Writing.pdf" target="_blank">Reading Summary - English Level 1</a></li>
            </ul>
        </section>
          <hr>
        <section>
            <h2>Writing</h2>
            <p>Tips for improving writing skills:</p>
            <ul>
                <li>Practice regularly by writing short paragraphs or journal entries on different topics.</li>
                <li>Focus on grammar and sentence structure, and proofread your writing for errors.</li>
                <li>Expand your vocabulary by learning new words and using them in your writing.</li>
            </ul>
            <p>Recommended resources:</p>
            <ul>
                <li>YouTube channels: <a href="https://www.youtube.com/watch?v=o9aVjBHEEbU" target="_blank">Learn English with Rebecca</a>, <a href="https://www.youtube.com/watch?v=0IFDuhdB2Hk" target="_blank">English Lessons with Adam</a></li>
                <li>Online courses: <a href="https://www.edx.org/course/academic-and-business-writing" target="_blank">edX's "Academic and Business Writing"</a>, <a href="https://www.coursera.org/learn/professional-emails" target="_blank">Udemy's "Write Professional Emails and Memos"</a></li>
            </ul>
            <p>Downloadable PDF summaries:</p>
            <ul>
                <li><a href="pdf/English-L1-Writing.pdf" target="_blank">Writing Summary - English Level 1</a></li>
            </ul>
        </section>
        <hr>

        <section>
            <h2>Listening</h2>
            <p>Tips for improving listening skills:</p>
            <ul>
                <li>Listen to English podcasts, music, and audiobooks regularly to train your ears.</li>
                <li>Practice active listening by taking notes and summarizing what you've heard.</li>
                <li>Watch movies, TV shows, and videos with English subtitles to help with comprehension.</li>
            </ul>
            <p>Recommended resources:</p>
            <ul>
                <li>YouTube channels: <a href="https://www.youtube.com/user/EnglishClass101" target="_blank">EnglishClass101</a>, <a href="https://www.youtube.com/watch?v=OualsHB1FqE" target="_blank">Learn English with Emma</a></li>
                <li>Online courses: <a href="https://www.duolingo.com" target="_blank">Duolingo</a>, <a href="https://www.coursera.org/specializations/learn-english" target="_blank">Coursera's "English for Beginners" Specialization</a>
            </ul>
            <p>Downloadable PDF summaries:</p>
            <ul>
                <li><a href="pdf/Listining.pdf" target="_blank">>Listening Summary - English Level 1</a></li>
            </ul>
        </section>
        <hr>

        <section>
            <h2>Grammar</h2>
            <p>Tips for improving grammar skills:</p>
            <ul>
                <li>Study grammar rules and practice using them in sentences and exercises.</li>
                <li>Identify common grammatical mistakes and work on correcting them.</li>
                <li>Read grammar guides and explanations to deepen your understanding.</li>
            </ul>
            <p>Recommended resources:</p>
            <ul>
                <li>YouTube channels: <a href="https://www.youtube.com/watch?v=o0YOITIDdKY" target="_blank">English Lessons with Adam</a>, <a href="https://www.youtube.com/c/LetsTalk" target="_blank">Learn English with Let's Talk - Free English Lessons</a></li>
                <li>Online courses: <a href="https://www.udemy.com/course/learn-english-grammar-online/" target="_blank">Udemy's "English Grammar Launch"</a>, <a href="https://www.coursera.org/learn/grammar-punctuation" target="_blank">Coursera's "Grammar and Punctuation"</a></li>
            </ul>
            <p>Downloadable PDF summaries:</p>
            <ul>
                <li><a href="pdf/Gramer.pdf" target="_blank">Grammar Summary - English Level 1</a></li>
            </ul>
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