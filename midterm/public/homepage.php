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
                    <a href="#html">JAVA</a>
                    <a href="#python">PYTHON</a>
                    <a href="#javascripts">JAVASCRIPT</a>
                    <a href="#css">CSS</a>
                    <a href="#html">HTML</a>
                    <a href="#bootstrap">BOOTSTRAP</a>
                </div>
            </li>
                <li><a href="privacy-policy.php">Privacy & Policy</a></li>
                <li><a href="StudentAccount">Account Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
                <hr style="text-align: center; margin-left: 2%; margin-right: -5px;">
            </ul>
        </nav>
    </header><br><br>
<div class="loader" id="pageLoader"></div>
<div id="content" style="display: none;">
    <!-- Your page content goes here -->

    <section class="home-grid">

   <h1 class="heading">Quick Options</h1>
   <div class="box-container">

      <div class="box">
    <h3 class="title">Top Likes Topic</h3>
    <p class="likes">PHP likes: <span id="php-total-likes">0</span></p>
    <a href="#php" class="inline-btn">View Topic</a>
    <p class="likes">Python Likes: <span id="python-total-likes">0</span></p>
    <a href="#python" class="inline-btn">View Topic</a>
    <p class="likes">HTML Likes: <span id="html-total-likes">0</span></p>
    <a href="#html" class="inline-btn">View Topic</a>
    <p class="likes">JAVA Likes: <span id="java-total-likes">0</span></p>
    <a href="#java" class="inline-btn">View Topic</a>
</div>

      <div class="box">
         <h3 class="title">Popular Topics</h3>
         <div class="flex">
            <a href="#html"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#css"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#java"><i class="fab fa-java"></i><span>Java</span></a>
            <a href="#javascripts"><i class="fab fa-js"></i><span>Javascript</span></a>
            <a href="#python"><i class="fab fa-python"></i><span>Python</span></a>
            <a href="#php"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#bootstrap"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
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
    <div class="like-button" data-card-id="php-syntax">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
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
    <div class="like-button" data-card-id="php-tags">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
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
    <div class="like-button" data-card-id="php-links">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
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
    <div class="like-button" data-card-id="java-syntax">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
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
    <div class="like-button" data-card-id="java-tags">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
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
    <div class="like-button" data-card-id="java-links">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
</section>



<section id="html" class="info">
  <h1>Learn HTML</h1>
</section>
<section class="cards-wrapper">
  <div class="card-grid-space">
    <div class="num">01</div>
    <a class="card" href="#" style="--bg-img: url(images/php2.jpg)">
      <div>
        <h1>HTML Syntax</h1>
        <p>The syntax of a language is how it works. How to actually write it. Learn HTML syntax…</p>
        <div class="date">6 Oct 2017</div>
        <div class="tags">
          <div class="tag">HTML</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="html-syntax">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>

  <div class="card-grid-space">
    <div class="num">02</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Basic types of HTML tags</h1>
        <p>Learn about some of the most common HTML tags…</p>
        <div class="date">9 Oct 2017</div>
        <div class="tags">
          <div class="tag">HTML</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="html-tags">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>

  <div class="card-grid-space">
    <div class="num">03</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Links, images and about file paths</h1>
        <p>Learn how to use links and images along with file paths…</p>
        <div class="date">14 Oct 2017</div>
        <div class="tags">
          <div class="tag">HTML</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="html-links">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
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
    <div class="like-button" data-card-id="python-syntax">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
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
    <div class="like-button" data-card-id="python-tags">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
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
    <div class="like-button" data-card-id="python-links">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
</section>

<section id="css" class="info">
  <h1>Learn CSS</h1>
</section>
<section class="cards-wrapper">
  <div class="card-grid-space">
    <div class="num">01</div>
    <a class="card" href="#" style="--bg-img: url(images/php2.jpg)">
      <div>
        <h1>CSS Syntax</h1>
        <p>The syntax of a language is how it works. How to actually write it. Learn CSS syntax…</p>
        <div class="date">6 Oct 2017</div>
        <div class="tags">
          <div class="tag">CSS</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="css-syntax">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">5</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
  
  <div class="card-grid-space">
    <div class="num">02</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Basic types of CSS tags</h1>
        <p>Learn about some of the most common CSS tags…</p>
        <div class="date">9 Oct 2017</div>
        <div class="tags">
          <div class="tag">CSS</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="css-tags">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">5</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
  
  <div class="card-grid-space">
    <div class="num">03</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Links, images and about file paths</h1>
        <p>Learn how to use links and images along with file paths…</p>
        <div class="date">14 Oct 2017</div>
        <div class="tags">
          <div class="tag">CSS</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="css-links">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">5</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
</section>



<section id="bootstrap" class="info">
  <h1>Learn BOOTSTRAP</h1>
</section>
<section class="cards-wrapper">
  <div class="card-grid-space">
    <div class="num">01</div>
    <a class="card" href="#" style="--bg-img: url(images/php2.jpg)">
      <div>
        <h1>BOOTSTRAP Syntax</h1>
        <p>The syntax of a language is how it works. How to actually write it. Learn BOOTSTRAP syntax…</p>
        <div class="date">6 Oct 2017</div>
        <div class="tags">
          <div class="tag">BOOTSTRAP</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="bootstrap-syntax">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">5</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
  
  <div class="card-grid-space">
    <div class="num">02</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Basic types of BOOTSTRAP tags</h1>
        <p>Learn about some of the most common BOOTSTRAP tags…</p>
        <div class="date">9 Oct 2017</div>
        <div class="tags">
          <div class="tag">BOOTSTRAP</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="bootstrap-tags">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">5</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
  
  <div class="card-grid-space">
    <div class="num">03</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Links, images and about file paths</h1>
        <p>Learn how to use links and images along with file paths…</p>
        <div class="date">14 Oct 2017</div>
        <div class="tags">
          <div class="tag">BOOTSTRAP</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="bootstrap-links">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">5</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
</section>

<section id="javascripts" class="info">
  <h1>Learn JAVASCRIPT</h1>
</section>
<section class="cards-wrapper">
  <div class="card-grid-space">
    <div class="num">01</div>
    <a class="card" href="#" style="--bg-img: url(images/php2.jpg)">
      <div>
        <h1>JAVASCRIPT Syntax</h1>
        <p>The syntax of a language is how it works. How to actually write it. Learn JAVASCRIPT syntax…</p>
        <div class="date">6 Oct 2017</div>
        <div class="tags">
          <div class="tag">JAVASCRIPT</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="scripts-syntax">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
  
  <div class="card-grid-space">
    <div class="num">02</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Basic types of JAVASCRIPT tags</h1>
        <p>Learn about some of the most common JAVASCRIPT tags…</p>
        <div class="date">9 Oct 2017</div>
        <div class="tags">
          <div class="tag">JAVASCRIPT</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="scripts-tags">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
  
  <div class="card-grid-space">
    <div class="num">03</div>
    <a class="card" href="#" style="--bg-img: url('images/php2.jpg')">
      <div>
        <h1>Links, images and about file paths</h1>
        <p>Learn how to use links and images along with file paths…</p>
        <div class="date">14 Oct 2017</div>
        <div class="tags">
          <div class="tag">JAVASCRIPT</div>
        </div>
      </div>
    </a>
    <div class="like-button" data-card-id="scripts-links">
      <span class="">Like</span>
      <span class="upvote" onclick="handleVote(this, 'up')">&#9650;</span>
      <span class="like-count">10</span>
      <span class="downvote" onclick="handleVote(this, 'down')">&#9660;</span>
      <span class="">Dislike</span>
    </div>
  </div>
</section>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
  
  window.addEventListener("load", function() {
    // Hide the loader after the page loads
    const loader = document.getElementById("pageLoader");
    const content = document.getElementById("content");
    loader.style.display = "none"; // Hide the loader
    content.style.display = "block"; // Show the content
});
</script>
<script>
  
  //like up,down
document.addEventListener('DOMContentLoaded', () => {
  // Load the initial state from localStorage for each like button
  document.querySelectorAll('.like-button').forEach((likeButton) => {
    const cardId = likeButton.getAttribute('data-card-id');
    const likeCountElement = likeButton.querySelector('.like-count');

    // Retrieve the saved state
    const savedState = JSON.parse(localStorage.getItem(cardId));
    if (savedState) {
      likeCountElement.textContent = formatNumber(savedState.count);
      if (savedState.status === 'upvoted') {
        likeButton.classList.add('upvoted');
      } else if (savedState.status === 'downvoted') {
        likeButton.classList.add('downvoted');
      }
    }
  });
});

function handleVote(element, type) {
  const likeButton = element.parentElement;
  const cardId = likeButton.getAttribute('data-card-id');
  const likeCountElement = likeButton.querySelector('.like-count');
  let likeCount = parseInt(likeCountElement.textContent.replace(',', ''));

  const hasUpvoted = likeButton.classList.contains('upvoted');
  const hasDownvoted = likeButton.classList.contains('downvoted');

  if (type === 'up') {
    if (!hasUpvoted) {
      likeCount++;
      likeButton.classList.add('upvoted');
      likeButton.classList.remove('downvoted');
    }
  } else if (type === 'down') {
    if (!hasDownvoted && likeCount > 0) {
      likeCount--;
      likeButton.classList.add('downvoted');
      likeButton.classList.remove('upvoted');
    }
  }

  likeCountElement.textContent = formatNumber(likeCount);

  // Save the state to localStorage
  const status = likeButton.classList.contains('upvoted')
    ? 'upvoted'
    : likeButton.classList.contains('downvoted')
    ? 'downvoted'
    : null;

  localStorage.setItem(
    cardId,
    JSON.stringify({
      count: likeCount,
      status: status,
    })
  );
}

function formatNumber(number) {
  if (number >= 1000) {
    return (number / 1000).toFixed(1) + 'K';
  }
  return number;
}

document.addEventListener('DOMContentLoaded', () => {
  // Load the initial state from localStorage for each like button
  document.querySelectorAll('.like-button').forEach((likeButton) => {
    const cardId = likeButton.getAttribute('data-card-id');
    const likeCountElement = likeButton.querySelector('.like-count');

    // Retrieve the saved state
    const savedState = JSON.parse(localStorage.getItem(cardId));
    if (savedState) {
      likeCountElement.textContent = savedState.count;
      if (savedState.status === 'upvoted') {
        likeButton.classList.add('upvoted');
      } else if (savedState.status === 'downvoted') {
        likeButton.classList.add('downvoted');
      }
    }
  });

  // Update total likes for each topic
  updateTotalLikes();
});

function handleVote(element, type) {
  const likeButton = element.parentElement;
  const cardId = likeButton.getAttribute('data-card-id');
  const likeCountElement = likeButton.querySelector('.like-count');
  let likeCount = parseInt(likeCountElement.textContent);

  const hasUpvoted = likeButton.classList.contains('upvoted');
  const hasDownvoted = likeButton.classList.contains('downvoted');

  if (type === 'up') {
    if (!hasUpvoted) {
      likeCount++;
      likeButton.classList.add('upvoted');
      likeButton.classList.remove('downvoted');
    }
  } else if (type === 'down') {
    if (!hasDownvoted && likeCount > 0) {
      likeCount--;
      likeButton.classList.add('downvoted');
      likeButton.classList.remove('upvoted');
    }
  }

  likeCountElement.textContent = likeCount;

  // Save the state to localStorage
  const status = likeButton.classList.contains('upvoted')
    ? 'upvoted'
    : likeButton.classList.contains('downvoted')
    ? 'downvoted'
    : null;

  localStorage.setItem(
    cardId,
    JSON.stringify({
      count: likeCount,
      status: status,
    })
  );

  // Update total likes after each vote
  updateTotalLikes();
}

function updateTotalLikes() {
  // Initialize counters for each topic
  let phpTotalLikes = 0;
  let pythonTotalLikes = 0;
  let htmlTotalLikes = 0;
  let javaTotalLikes = 0;

  // Iterate through all like buttons to sum up counts based on topics
  document.querySelectorAll('.like-button').forEach((likeButton) => {
    const cardId = likeButton.getAttribute('data-card-id');
    const likeCount = parseInt(likeButton.querySelector('.like-count').textContent);

    // Update the total count for each category based on the cardId
    if (cardId.includes('php')) {
      phpTotalLikes += likeCount;
    } else if (cardId.includes('python')) {
      pythonTotalLikes += likeCount;
    } else if (cardId.includes('html')) {
      htmlTotalLikes += likeCount;
    }else if (cardId.includes('java')) {
      javaTotalLikes += likeCount;
    } 
  });

  // Update the HTML elements with the totals
  document.getElementById('php-total-likes').textContent = phpTotalLikes;
  document.getElementById('python-total-likes').textContent = pythonTotalLikes;
  document.getElementById('html-total-likes').textContent = htmlTotalLikes;
  document.getElementById('java-total-likes').textContent = javaTotalLikes;
}
</script>
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
