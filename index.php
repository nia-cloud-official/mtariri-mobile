<?php 
require("config.php");
   $userProfName = $_SESSION['email'];
   if (empty($userProfName)){
       if($_SESSION['auth'] = true) { 
           echo "Welcome back to the dashboard";
       }else{ 
           echo "";
       }
   } else { 
    if($_SESSION['auth'] = true) { 
      echo "Welcome back to the dashboard";
    } else { 
      echo "";
    }
    echo "Welcome back " . " ".  $_SESSION['user_name'];
   }
?>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Mtariri App">
   <meta name="author" content="Milton Vafana">
 <title>My Mtariri</title>
</head>
<body>
  <screen>
    <div class="nav row">
      <div>
        <p>35 minutes left in,</p>
        <h5>Algebra II</h5>
      </div>
      <button class="secondary circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
        </svg></button>
    </div>
    <div class="column">
      <glob id="glob-2"></glob>
      <div class="row">
        <div class="widget secondary split home-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
          </svg>
          </svg>
          <h5>Work</h5>
          <p class="muted">9 items due</p>
        </div>
        <div class="widget secondary split home-item">
          <notification>
            <p>2</p>
          </notification>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z" />
          </svg>
          <h5>Chats</h5>
          <p class="muted">2 new pings</p>
        </div>
      </div>
      <div class="row">
        <div class="widget secondary split home-item">
          <notification>
            <p>1</p>
          </notification>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
          </svg>
          <h5>Grades</h5>
          <p class="muted">1 new grade</p>
        </div>
        <div class="widget primary split home-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
          <h5>More</h5>
          <p class="muted">More stuff</p>
        </div>
      </div>
    </div>
    <div class="column">
      <div>
        <h5>Feed</h5>
        <p class="muted">Nothing to see here</p>
      </div>
      <div class="widget secondary">
        <h5>New Invite</h5>
        <small class="muted">You've been invited to <span> super cool ppl chat</span> by <span> Jimmothy IIV</span></small>
      </div>
      <div class="widget secondary">
        <h5>David, Johnson</h5>
        <small>IB Life Studies</small>
        <br>
        <p class="muted">We're moving classes to A1436 bc the wall has gone missing. Idek where it went tbh</p>
        <br>
        <small>Jan 2, 2024 at 5:23pm</small>
      </div>
      <div class="widget secondary">
        <h5>May, James</h5>
        <small>AP Drag Racing</small>
        <br>
        <p class="muted">Uhhh sooo, I may have wrecked the car we were just given <span>💀</span><span>💀</span><span>💀</span>
        </p>
        <br>
        <small>Jan 1, 2024 at 2:56am</small>
      </div>
      <small class="center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
          <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
        </svg></small>
    </div>

    <div class="widget secondary">
      <h5>Patch Notes</h5>
      <br>
      <p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <br>
      <div class="row">
        <small>Learn more</small>
        <small>v1.2.1</small>
      </div>
    </div>

    <!--<div class="widget-wrapper">
      <div>
        <glob id="glob-2"></glob>
        <h4>Assignments</h4>
        <p class="muted">You have 4 assignments due</p>
      </div>
      <div class="column">
        <div class="widget secondary book-marked" id="1">
            <path
              d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z" />
          </svg>
          <h5>Unit 5 Essay Analysis</h5>
          <small>Due Monday, Apirl 7th at 9:00am</small>
          <small class="muted">Go to assignment -></small>
        </div>
        <div class="widget secondary" id="1">
          <notification>
            <p>1</p>
          </notification>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z" />
          </svg>
          <h5>Biology Quiz</h5>
          <small>Due Monday, Apirl 7th at 9:00am</small>
          <small class="muted">Go to assignment -></small>
        </div>
        <div class="widget secondary" id="1">
          <h5>More Quadratics Homework</h5>
          <small>Due Monday, Apirl 7th at 9:00am</small>
          <small class="muted">Go to assignment -></small>
        </div>
        <div class="widget secondary" id="1">
          <h5>Unit 9 Test!</h5>
          <small>Due Monday, Apirl 7th at 9:00am</small>
          <small class="muted">Go to assignment -></small>
        </div>
        <small class="muted">Load more</small>
      </div>
    </div>-->

    <!--  <div class="nav row">
      <a>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path
            d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
        </svg>
      </a>
      <a>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path
            d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
        </svg>
      </a>
      <a>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path
            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
        </svg>
      </a>
      <a>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path
            d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
        </svg>
      </a>
      <a>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path
            d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
        </svg>
      </a>
    </div>-->
  </screen>
  <style>
   @import url("https://fonts.googleapis.com/css?family=Figtree:800|DM+Sans:400");

:root {
  --text: hsla(247, 57%, 91%, 1);
  --text_light: hsla(247, 57%, 91%, 0.9);
  --text_dark: hsla(247, 57%, 91%, 0.5);
  --background: rgb(20, 21, 20);
  --background_dark: rgb(16, 16, 15);
  --primary: hsla(241, 25%, 50%, 1);
  --secondary: hsla(247, 8%, 25%, 0.5);
  --accent: rgb(100, 35, 251);
  --outline: hsla(247, 5%, 36%, 1);
  --alert: hsla(360, 60%, 55%, 1);
}

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

h1,
h2,
h3,
h4,
h5 {
  font-family: "Figtree";
  font-weight: 800;
  line-height: 1;
  color: var(--text);
}

html {
  font-size: 100%;
}

/* 16px */

h1 {
  font-size: 8rem;
}

h2 {
  font-size: 3.158rem;
}

h3 {
  font-size: 2.369rem;
}

h4 {
  font-size: 1.777rem;
}

h5 {
  font-size: 1.333rem;
  color: var(--text_light);
  line-height: 1.5rem;
}

p {
  font-size: 0.9rem;
}

span {
  color: var(--text);
}

small {
  font-size: 0.75rem;
  color: var(--text);
}

body {
  height: 100%;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  align-items: center;
  overflow-x: hidden;
  padding: 1rem 1rem 2rem 1rem;
  font-family: "DM Sans";
  font-weight: 400;
  color: var(--text);
  background: linear-gradient(11deg, var(--background_dark), var(--background));
}

screen {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

svg {
  fill: var(--text_dark);
  height: 1lh;
  width: 1lh;
  cursor: pointer;
}

notification {
  position: absolute;
  top: -5%;
  right: -5%;
  width: 2rem;
  height: 2rem;
  border-radius: 50%;
  background: var(--accent);
}

notification p {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
}

button {
  color: var(--text);
  padding: 0.9rem 1rem 0.9rem 1rem;
  border-radius: 0.5rem;
  border: none;
  font-size: 1rem;
}

.primary {
  background: linear-gradient(114deg, var(--primary), var(--accent));
}

.secondary {
  background: var(--secondary);
}

.circle {
  position: relative;
  padding: 0;
  border-radius: 100%;
  height: 3rem;
  width: 3rem;
}

.circle svg {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
}

.muted {
  color: var(--text_dark);
}

.bold {
  font-weight: 700;
}

.underline {
  text-decoration: underline;
}

.alert {
  color: var(--alert);
}

.active {
  color: var(--primary);
}

.split {
  width: 50%;
}

.center {
  align-items: center;
  align-self: center;
}

.column {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.row {
  display: flex;
  flex-direction: row;
  gap: 1rem;
}

.home-item {
  cursor: pointer;
  text-wrap: nowrap;
}

.widget {
  display: flex;
  flex-direction: column;
  position: relative;
  padding: 2rem;
  border-radius: 1rem;
  width: 100%;
  /*gap: 1rem;*/
}

.widget-wrapper {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 1rem;
  width: 100%;
}

div.column:nth-child(2) {
  margin-top: 0rem;
}

glob {
  opacity: 30%;
  position: absolute;
  width: 20rem;
  height: 20rem;
  border-radius: 100%;
  filter: blur(100px);
  background: var(--primary);
  pointer-events: none;
}

#glob-1 {
  background: var(--text_light);
  right: 0;
  top: 0;
}

#glob-2 {
  right: 50;
}

.nav {
  display: flex;
  padding: 1rem 0rem 1rem 0rem;
  bottom: 0;
  position: sticky;
  justify-content: space-evenly;
  align-items: center;
  background: var(--primary);
  margin: 0 -1rem 0 -1rem;
  z-index: 10;
  top: 0;
  backdrop-filter: blur(10px);
}

.nav:nth-child(1) {
  top: 0;
  justify-content: space-between;
  padding: 1rem 1rem 0rem 1rem;
  background: none;
  position: relative;
}

::-webkit-scrollbar {
  display: none;
}

@media only screen and (min-width: 800px) {
  screen {
    max-width: 21rem;
  }
}

  </style>
</body>