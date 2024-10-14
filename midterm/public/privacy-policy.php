<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Lora', serif;
            background: #F7E7CE;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.25);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 40px;
            width: 100%;
            max-width: 800px;
            text-align: left;
            position: relative;
            margin-bottom: 20px;
            color: #333;
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.4);
        }

        h2 {
            font-size: 24px;
            color: #555;
            margin-bottom: 15px;
            font-weight: bold;
        }

        p, li {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        ul {
            padding-left: 20px;
        }

        .background-circle {
            position: absolute;
            width: 180px;
            height: 180px;
            background: rgba(173, 144, 117, 0.15);
            border-radius: 50%;
            z-index: -1;
        }

        .circle-1 {
            top: -70px;
            left: -70px;
        }

        .circle-2 {
            bottom: -70px;
            right: -70px;
        }
        .loader {    
  --r1: 154%;
  --r2: 68.5%;
  width: 60px;
  aspect-ratio: 1;
  border-radius: 50%; 
  background:
    radial-gradient(var(--r1) var(--r2) at top   ,#0000 79.5%,#269af2 80%),
    radial-gradient(var(--r1) var(--r2) at bottom,#269af2 79.5%,#0000 80%),
    radial-gradient(var(--r1) var(--r2) at top   ,#0000 79.5%,#269af2 80%),
    #ccc;
  background-size: 50.5% 220%;
  background-position: -100% 0%,0% 0%,100% 0%;
  background-repeat:no-repeat;
  animation: l9 2s infinite linear;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 9999;
}
@keyframes l9 {
    33%  {background-position:    0% 33% ,100% 33% ,200% 33% }
    66%  {background-position: -100%  66%,0%   66% ,100% 66% }
    100% {background-position:    0% 100%,100% 100%,200% 100%}
}

/* Optional: Style for the content when it becomes visible */
#content {
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
        a {
            text-decoration: none;
            background-color: #8e734b;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 25px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        a:hover {
            background-color: #705c3c;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 20px;
            }

            p, li {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="loader" id="pageLoader"></div>
<div id="content" style="display: none;">
    
    <div class="container">
        <h1>Privacy Policy</h1>
        
        <section>
            <h2>Overview</h2>
            <p>This Privacy Policy describes how we gather, process, and protect your information when you use our platform to share and upload reviews on various topics.</p>
        </section>
        
        <section>
            <h2>Information We Collect</h2>
            <p>• Your name, student ID, school email address;<br>
            • Username and password; and<br>
            • Any other information you choose to provide to us.</p>
        </section>
        
        <section>
            <h2>How We Use Your Information</h2>
            <ul>
                <li>To provide and maintain our services, ensuring that only eligible students can access and upload reviewers on specific topics.</li>
                <li>To personalize your experience and improve the platform based on feedback and usage patterns.</li>
                <li>To communicate with you, respond to inquiries, and provide updates related to the program and topics available for review.</li>
            </ul>
        </section>
        
        <section>
            <h2>Sharing of Information</h2>
            <p>We, the students developing this platform, do not share your personal information with third parties, except as required by law or to protect our rights. Non-personal data may be shared with our school for security, research, or service improvement purposes.</p>
        </section>
        
        <section>
            <h2>Security</h2>
            <p>We take reasonable measures to protect your data from unauthorized access or disclosure. However, no method of transmission over the internet is completely secure, and we cannot guarantee absolute security. We recommend using strong passwords and logging out after your session to protect your account.</p>
        </section>
        
        <section>
            <h2>Your Rights</h2>
            <p>You have the right to access, update, or delete your personal information. If you have any concerns about your privacy, please contact us.</p>
        </section>
        
        <section>
            <h2>Changes to this Policy</h2>
            <p>We may update this Privacy Policy from time to time. We will notify you of any significant changes by posting the new policy on this page and updating the date below.</p>
            <p>Last updated: 10/6/24</p>
        </section><br>


        <a href="HomePage">Back</a>
        <div class="background-circle circle-1"></div>
        <div class="background-circle circle-2"></div>
    </div>
</div>
<script>
  
  window.addEventListener("load", function() {
    // Hide the loader after the page loads
    const loader = document.getElementById("pageLoader");
    const content = document.getElementById("content");
    loader.style.display = "none"; // Hide the loader
    content.style.display = "block"; // Show the content
});
</script>
</body>
</html>
