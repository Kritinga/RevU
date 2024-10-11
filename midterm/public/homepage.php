<?php 
session_start();
include "style.php";

if (!isset($_SESSION['NotSup'])){
    echo "<script>alert('Please login first!')</script>";
    echo "<script>window.location.href='LoginHere'</script>";
}


?>
<?php 
//include "style.php"; // If necessary for dynamic styling or additional CSS imports
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link
            rel="icon"
            href="images/ccs.png"
            type="image/x-icon"
        />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Font for professional typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar">
            <div class="logo-container">
            <img src="images/ccs.png" alt="CCP Logo">
            <div class="logo">REV-<span>U</span></div>
            </div>
            <ul class="nav-links">
                <li><a href="logout.php">Home</a></li>
                <li class="dropdown">
                <a href="#">Topics</a>
                <div class="dropdown-content">
                    <a href="#php">PHP</a>
                    <a href="#java">JAVA</a>
                    <a href="#python">PYTHON</a>
                    <a href="#javascript">JAVASCRIPT</a>
                    <a href="#css">CSS</a>
                    <a href="#html">HTML</a>
                </div>
            </li>
                <li><a href="privacy-policy.php">Privacy & Policy</a></li>
                <li><a href="StudentAccount">Account Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
                <hr style="text-align: center; margin-left: 2%; margin-right: -5px;">
            </ul>
        </nav>
    </header><br><br>

    <section class="home-grid">

   <h1 class="heading">Quick Options</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">Top Likes Topic</h3>
         <p class="likes">PHP likes : <span>25</span></p>
         <a href="#php" class="inline-btn">View Topic</a>
         <p class="likes">Python Likes : <span>12</span></p>
         <a href="#python" class="inline-btn">View Topic</a>
         <p class="likes">HTML Likes : <span>4</span></p>
         <a href="#html" class="inline-btn">View Topic</a>
      </div>

      <div class="box">
         <h3 class="title">Popular Topics</h3>
         <div class="flex">
            <a href="#html"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#css"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#javascript"><i class="fab fa-js"></i><span>Javascript</span></a>
            <a href="#python"><i class="fab fa-python"></i><span>Python</span></a>
            <a href="#php"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Rev-U Now</h3>
         <p class="tutor">"Master your subjects, one review at a time. Get started today and unlock your path to success!"</p>
         <a href="#php" class="inline-btn">Get Started</a>
      </div>

   </div>

</section>  
    <div class="new-post-container">
        <h2>New Post</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="description" placeholder="Describe everything about this post here" maxlength="300" required></textarea>
            <div class="upload-icons">
                <label for="image-upload">
                    <img src="images/image-icon.jpg" alt="Upload Image" width="24px">
                    <input type="file" name="file" id="image-upload" accept="image/*">
                </label>
                <label for="video-upload">
                    <img src="images/video-icon.png" alt="Upload Video" width="24px">
                    <input type="file" name="file" id="video-upload" accept="video/*">
                </label>
            </div>
            <div class="submit-buttons">
                <button type="submit" class="post-btn">Post</button>
            </div>
        </form>
    </div>
    <section id="php" class="info">
  <h1>Learn PHP</h1>
</section>
<section class="cards-wrapper">
  <div class="card-grid-space">
    <div class="num">01</div>
    <a class="card" href="#" style="--bg-img: url(images/php1.jpg)">
      <div>
        <h1>PHP Syntax</h1>
        <p>The syntax of a language is how it works. How to actually write it. Learn PHP syntax…</p>
        <div class="date">6 Oct 2017</div>
        <div class="tags">
          <div class="tag">PHP</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num">02</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Basic types of PHP tags</h1>
        <p>Learn about some of the most common PHP tags…</p>
        <div class="date">9 Oct 2017</div>
        <div class="tags">
          <div class="tag">PHP</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num">03</div>
    <a class="card" href="#" style="--bg-img: url('images/php3.png')">
      <div>
        <h1>Links, images and about file paths</h1>
        <p>Learn how to use links and images along with file paths…</p>
        <div class="date">14 Oct 2017</div>
        <div class="tags">
          <div class="tag">PHP</div>
        </div>
      </div>
    </a>
  </div>
  
</section>

<section id="java" class="info">
  <h1>Learn JAVA</h1>
</section>
<section class="cards-wrapper">
  <div class="card-grid-space">
    <div class="num">01</div>
    <a class="card" href="#" style="--bg-img: url(images/php2.jpg)">
      <div>
        <h1>JAVA Syntax</h1>
        <p>The syntax of a language is how it works. How to actually write it. Learn JAVA syntax…</p>
        <div class="date">6 Oct 2017</div>
        <div class="tags">
          <div class="tag">JAVA</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num">02</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Basic types of JAVA tags</h1>
        <p>Learn about some of the most common JAVA tags…</p>
        <div class="date">9 Oct 2017</div>
        <div class="tags">
          <div class="tag">JAVA</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num">03</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Links, images and about file paths</h1>
        <p>Learn how to use links and images along with file paths…</p>
        <div class="date">14 Oct 2017</div>
        <div class="tags">
          <div class="tag">JAVA</div>
        </div>
      </div>
    </a>
  </div>
  
</section>

<section id="python" class="info">
  <h1>Learn PYTHON</h1>
</section>
<section class="cards-wrapper">
  <div class="card-grid-space">
    <div class="num">01</div>
    <a class="card" href="#" style="--bg-img: url(images/php2.jpg)">
      <div>
        <h1>PYTHON Syntax</h1>
        <p>The syntax of a language is how it works. How to actually write it. Learn PYTHON syntax…</p>
        <div class="date">6 Oct 2017</div>
        <div class="tags">
          <div class="tag">PYTHON</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num">02</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Basic types of PYTHON tags</h1>
        <p>Learn about some of the most common PYTHON tags…</p>
        <div class="date">9 Oct 2017</div>
        <div class="tags">
          <div class="tag">PYTHON</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num">03</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Links, images and about file paths</h1>
        <p>Learn how to use links and images along with file paths…</p>
        <div class="date">14 Oct 2017</div>
        <div class="tags">
          <div class="tag">PYTHON</div>
        </div>
      </div>
    </a>
  </div>
  
</section>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
