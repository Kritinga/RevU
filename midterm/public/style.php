<style>
/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
@import url('https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700');

:root {
  --color: #3c3163;
  --transition-time: 0.5s;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  font-family: 'Open Sans';
  background: #fafafa;

}

a {
  color: inherit;
}
.new-post-container {
            width: 70%;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            margin-left: 15%;
        }

        .new-post-container h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        .upload-icons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .upload-icons label {
            cursor: pointer;
        }

        .upload-icons input[type="file"] {
            display: none;
        }

        .submit-buttons {
            display: flex;
            justify-content: space-between;
        }

        .submit-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        .submit-buttons .cancel-btn {
            background-color: #ccc;
        }

        .submit-buttons .post-btn {
            background-color: #5865f2;
            color: white;
        }
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background: black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background: #F7E7CE;
}
.home-grid {
    width: 80%;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
}

.heading {
    text-align: left;
    font-size: 1.8rem;
    margin-bottom: 20px;
    color: #333;
}

/* Box Container Styles */
.box-container {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: space-between;
}

.box {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    flex: 1;
    min-width: 250px;
    max-width: 32%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.title {
    font-size: 1.3rem;
    margin-bottom: 15px;
    color: #333;
    font-weight: bold;
}

.likes, .tutor {
    font-size: 0.9rem;
    margin: 10px 0;
    color: #666;
}

.inline-btn {
    display: inline-block;
    padding: 8px 15px;
    background: #F7E7CE;
    color: black;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    margin-top: 10px;
    transition: background 0.3s;
}

.inline-btn:hover {
    background: #fff;
}

/* Flex links in the popular topics section */
.flex {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 10px;
}

.flex a {
    display: flex;
    align-items: center;
    background: #f0f0f0;
    padding: 8px 12px;
    border-radius: 5px;
    color: #333;
    text-decoration: none;
    font-size: 0.8rem;
    transition: background 0.3s;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.flex a:hover {
    background: #e0e0e0;
}

.flex i {
    margin-right: 5px;
    font-size: 1rem;
}
.cards-wrapper {
  display: grid;
  justify-content: center;
  align-items: center;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 4rem;
  padding: 4rem;
  margin: 0 auto;
  width: max-content;
}

.card {
  font-family: 'Heebo';
  --bg-filter-opacity: 0.5;
  background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
  height: 20em;
  width: 15em;
  font-size: 1.5em;
  color: white;
  border-radius: 1em;
  padding: 1em;
  /*margin: 2em;*/
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  box-shadow: 0 0 5em -1em black;
  transition: all, var(--transition-time);
  position: relative;
  overflow: hidden;
  border: 10px solid #ccc;
  text-decoration: none;
}

.card:hover {
  transform: rotate(0);
}

.card h1 {
  margin: 0;
  font-size: 1.5em;
  line-height: 1.2em;
}

.card p {
  font-size: 0.75em;
  font-family: 'Open Sans';
  margin-top: 0.5em;
  line-height: 2em;
}

.card .tags {
  display: flex;
}

.card .tags .tag {
  font-size: 0.75em;
  background: rgba(255,255,255,0.5);
  border-radius: 0.3rem;
  padding: 0 0.5em;
  margin-right: 0.5em;
  line-height: 1.5em;
  transition: all, var(--transition-time);
}

.card:hover .tags .tag {
  background: var(--color);
  color: white;
}

.card .date {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 0.75em;
  padding: 1em;
  line-height: 1em;
  opacity: .8;
}

.card:before, .card:after {
  content: '';
  transform: scale(0);
  transform-origin: top left;
  border-radius: 50%;
  position: absolute;
  left: -50%;
  top: -50%;
  z-index: -5;
  transition: all, var(--transition-time);
  transition-timing-function: ease-in-out;
}

.card:before {
  background: #ddd;
  width: 250%;
  height: 250%;
}

.card:after {
  background: #F7E7CE;
  width: 200%;
  height: 200%;
}

.card:hover {
  color: var(--color);
}

.card:hover:before, .card:hover:after {
  transform: scale(1);
}

.card-grid-space .num {
  font-size: 3em;
  margin-bottom: 1.2rem;
  margin-left: 1rem;
}

.info {
  font-size: 1.2em;
  display: flex;
  padding: 1em 3em;
  height: 3em;
}

.info img {
  height: 3em;
  margin-right: 0.5em;
}

.info h1 {
  font-size: 1em;
  font-weight: normal;
}

/* MEDIA QUERIES */
@media screen and (max-width: 1285px) {
  .cards-wrapper {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 900px) {
  .cards-wrapper {
    grid-template-columns: 1fr;
  }
  .info {
    justify-content: center;
  }
  .card-grid-space .num {
    /margin-left: 0;
    /text-align: center;
  }
}

@media screen and (max-width: 500px) {
  .cards-wrapper {
    padding: 4rem 2rem;
  }
  .card {
    max-width: calc(100vw - 4rem);
  }
}

@media screen and (max-width: 450px) {
  .info {
    display: block;
    text-align: center;
  }
  .info h1 {
    margin: 0;
  }
}
html, body {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    color: #333;
    background: #fff;
    line-height: 1.6;
    height: 100%;
}

/* Smooth Scroll */
html {
    scroll-behavior: smooth;
}

/* Header */
header {
    width: 100%;
    padding: 1.0rem 2rem;
    background: #F7E7CE;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}
.logo-container {
    display: flex;
    align-items: center;
    margin-left: 25px;

}

.logo-container img {
    height: 70px; /* Adjust as needed */
    margin-right: 10px;
}
span {
    color: red;
}
nav ul li .dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 2;
    top: 63%; /* Position below the parent item */
    left: 60%;
}

nav ul li .dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 0.9em;
    transition: background-color 0.3s ease;
}

nav ul li .dropdown-content a:hover {
    background-color: gold;
    color: #333;
}

/* Show the dropdown menu on hover */
nav ul li:hover .dropdown-content {
    display: block;
}
.navbar {

    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.8rem;
    font-weight: 600;
    color: #333;
}

.nav-links {
    list-style: none;
}

.nav-links li {
    display: inline-block;
    margin-left: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #007BFF;
}

.footer {
    background-color: #f4f4f4;
    padding: 20px 0;
    text-align: center;
    margin-top: 10px;
}

.social-icons {
    margin-bottom: 10px;
}

.social-icons a {
    text-decoration: none;
    color: #555;
    margin: 0 10px;
    font-size: 24px;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: #000;
}

.footer p {
    margin-top: 10px;
    font-size: 14px;
    color: #888;
}

.footer a {
    text-decoration: none;
    color: #000;
}

.footer a:hover {
    text-decoration: underline;
}
</style>