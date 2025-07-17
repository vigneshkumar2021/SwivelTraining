<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Swivel Training</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
    crossorigin="anonymous"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
    crossorigin="anonymous"></script>


  <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
    crossorigin="anonymous"></script>

  <style>
    /* * {
      box-sizing: border-box;
    } */

    body {
      margin: 0;
      font-family: 'Outfit', sans-serif;
      color: #333;
    }

    .navbar {
      background: #fff;
      padding: 12px 30px;
      border-bottom: 1px solid #ddd;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      position: sticky;
      top: 0;
      z-index: 999;
    }

    .title {
      font-size: 28px;
      font-weight: 800;
      color: #7e3d9c;
    }

    .buttons button {
      margin-left: 15px;
      background-color: #7e3d9c;
      color: white;
      font-weight: bold;
      border: none;
      padding: 10px 22px;
      border-radius: 25px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .buttons button:hover {
      background-color: #9b59b6;
    }

    .slide video {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
      border-radius: 0;
    }

    .content {
      display: flex;
      justify-content: center;
      gap: 10px;
      padding: 60px 0px;
    }

    .card {
      padding: 0px;
      border-radius: 12px;
      width: 600px;
      height: 300px;
      text-align: center;
    }

    .card img,
    .video-wrapper iframe {
      width: 90%;
      height: 250px;
      border-radius: 10px;
      object-fit: cover;
    }

    .card h3 {
      margin: 20px 0 15px;
      color: #7e3d9c;
      font-weight: 700;
    }

    .explore {
      background-color: #7e3d9c;
      color: white;
      padding: 12px 28px;
      font-size: 18px;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .explore:hover {
      background-color: #9b59b6;
    }

    section {
      background: #fff;
      margin: 60px 0;
      padding: 60px 20px;
      box-shadow: inset 0 10px 25px rgba(0, 0, 0, 0.02);
    }

    .about-container {
      max-width: 1100px;
      margin: auto;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      align-items: center;
      justify-content: center;
    }

    .about-image {
      flex: 1;
      min-width: 250px;
      text-align: center;
    }

    .about-image img {
      width: 150px;
      border-radius: 50%;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .about-text {
      flex: 2;
      min-width: 300px;
    }

    .about-text h2 {
      font-size: 32px;
      font-weight: 800;
      color: #7e3d9c;
      margin-bottom: 20px;
    }

    .about-text p {
      font-size: 17px;
      line-height: 1.8;
      color: #444;
    }

    .footer_detail {
      position: relative;
      top: 40px;
    }

    @media (max-width: 768px) {
      .content {
        flex-direction: column;
        align-items: center;
      }

      .about-container {
        flex-direction: column;
        text-align: center;
      }

      .card {
        width: 90%;
      }
    }
  </style>

</head>

<body>

  <div class="navbar">
    <div class="title">Swivtrek</div>
    <div class="buttons">
      <button>LOGIN</button>
      <button>SIGN UP</button>
    </div>
  </div>
  <br><br>
  <!-- Two-Column Content -->
  <div class="main-content">
    <div class="text-box">
      <h2>About This Playlist</h2>
      <p>
        This is a description of the video playlist. It appears on the left side while the video remains
        centered in the right half of the screen. The video plays in square format with autoplay and playlist
        functionality.
      </p>
    </div>

    <div class="video-box">
      <div class="video-square">
        <div id="player"></div>
      </div>
    </div>
  </div>

  <style>
    .main-content {
      display: flex;
      flex-direction: row;
      padding: 20px 0;
      /* reduce top and bottom space */
      margin: 0;
      align-items: center;
    }

    .text-box {
      width: 50%;
      padding: 0 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .text-box h2 {
      margin-bottom: 15px;
      font-size: 24px;
      color: #333;
    }

    .text-box p {
      font-size: 16px;
      color: #555;
      line-height: 1.6;
    }

    .video-box {
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .video-square {
      width: 400px;
      height: 400px;
    }

    #player {
      width: 100%;
      height: 100%;
    }

    @media (max-width: 768px) {
      .main-content {
        flex-direction: column;
        padding: 20px;
      }

      .text-box,
      .video-box {
        width: 100%;
        text-align: center;
        padding: 10px;
      }

      .video-square {
        width: 300px;
        height: 300px;
      }
    }
  </style>

  <!-- YouTube IFrame API -->
  <script src="https://www.youtube.com/iframe_api"></script>
  <script>
    const videoIds = [
      "E0aporowHtU", "XaN8AJDEYL8", "ahd6oArQwjo",
      "nAWpkBnWv7Y", "ahd6oArQwjo"
    ];

    let player, currentIndex = 0;

    function onYouTubeIframeAPIReady() {
      player = new YT.Player('player', {
        videoId: videoIds[currentIndex],
        playerVars: { autoplay: 1, mute: 1, controls: 1, rel: 0, modestbranding: 1 },
        events: {
          'onReady': e => e.target.playVideo(),
          'onStateChange': onPlayerStateChange
        }
      });
    }

    function onPlayerStateChange(e) {
      if (e.data === YT.PlayerState.ENDED) {
        currentIndex = (currentIndex + 1) % videoIds.length;
        player.loadVideoById(videoIds[currentIndex]);
      }
    }
  </script>

  <div class="content">
    <div class="card">
      <div class="video-wrapper">
        <img
          src="https://res.cloudinary.com/people-matters/image/upload/fl_immutable_cache,w_624,h_351,q_auto,f_auto/v1510654429/1510654428.jpg">
      </div>
      <h3 style="color: #7e3d9c;font-weight: bolder; ">VIDEO COURSES</h3>
      <a href="./videocatagories"><button class="explore">EXPLORE</button></a>
    </div>

    <div class="card">
      <img src="/assets/course image/ChatGPT Image Jun 20, 2025 at 03_18_26 PM.png" alt="Live Courses">
      <h3 style="color: #7e3d9c;font-weight: bolder; ">LIVE COURSES</h3>
      <a href="./livecatagories"><button class="explore">EXPLORE</button></a>
    </div>
  </div>

  <br><br>

  <!-- Unique About Us Section -->

  <section style="padding: 60px 20px;">
    <div
      style="max-width: 1100px; margin: auto; display: flex; flex-wrap: wrap; gap: 40px; align-items: center; justify-content: center;">

      <!-- Left Icon Box -->
      <div style="flex: 1; min-width: 280px; text-align: center;">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="About Icon"
          style="width: 150px; border-radius: 50%; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
      </div>

      <!-- Right Text Box -->
      <div style="flex: 2; min-width: 300px;">
        <h2
          style="font-family: 'Outfit', sans-serif; font-weight: 800; font-size: 32px; color: #7e3d9c; margin-bottom: 20px;">
          Who We Are
        </h2>
        <p style="font-size: 18px; color: #333; line-height: 1.8;">
          At <strong>Swivtrek</strong>, we ignite talent with the power of real-world training. Founded by experts, our
          platform blends practical knowledge with industry insights to shape tomorrow’s creators.
          We offer curated video lessons, immersive live courses, and structured roadmaps to guide learners from basic
          concepts to advanced mastery.
          <br><br>
          We’re not just educators—we’re mentors, partners, and dream builders. Whether you're stepping into tech for
          the first time or upskilling to scale new heights, Swivtrek is your launchpad.
          <br><br>
          Our vision is simple: Make learning effective, flexible, and inspiring—for everyone.
        </p>
      </div>
    </div>
  </section>
  <footer style="background-color: #0e1a33; color: white; padding: 60px 40px; font-family: 'Outfit', sans-serif;">
    <div
      style="max-width: 1400px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; gap: 40px;">

      <!-- Left Column -->
      <div style="flex: 1; min-width: 300px;">
        <h2 style="font-size: 30px; font-weight: 800; margin-bottom: 20px;">Let’s Talk</h2>
        <p style="font-size: 16px; line-height: 1.7; max-width: 500px;">
          Every project starts with a chat. Joven leads our client conversations and will be happy to discuss your
          project.
          He will also pull in the right people from the team when needed.
        </p>
        <br />
        <a href="#"
          style="background-color: #28a745; padding: 12px 24px; color: #fff; text-decoration: none; font-weight: bold; border-radius: 6px; display: inline-block;">
          Tell us about your project
        </a>
      </div>

      <!-- Right Column (Contact Info + Icons) -->
      <div style=" min-width: 100px;">
        <div style="display: flex; flex-direction: column; gap: 15px; font-size: 16px;">
          <div style="display: flex; align-items: center;">
            <i class="fas fa-envelope" style="color: #3fa0ff; margin-right: 10px;"></i>
            <span><a href="mailto:admin@swivel.co.in"
                style="color: #3fa0ff; text-decoration: none;">admin@swivel.co.in</a></span>
          </div>
          <div style="display: flex; align-items: center;">
            <i class="fas fa-phone" style="color: #3fa0ff; margin-right: 10px;"></i>
            <span><a href="tel:+918300504230" style="color: #3fa0ff; text-decoration: none;">+91-8300504230</a></span>
          </div>
          <div style="display: flex; align-items: flex-start; gap: 10px; line-height: 1.6; max-width: 400px;">
            <i class="fas fa-map-marker-alt" style="color: #3fa0ff; margin-top: 4px;"></i>
            <span>
              <a href="https://g.co/kgs/X4Nid87" target="_blank" style="color: #3fa0ff; text-decoration: none;">
                Mahatma Gandhi Nagar Rd, near Annai Therasa English School,
                MRR Nagar, Palani Chettipatti,<br>
                Theni, Tamil Nadu 625531
              </a>
            </span>
          </div>

        </div>

        <!-- Social Icons -->
        <div style="margin-top: 30px;" class="footer_detail">
          <a href="https://x.com/Swivel_Training" style="margin-right: 15px; color: #ccc;"><i
              class="fab fa-twitter fa-lg"></i></a>
          <a href="https://www.facebook.com/profile.php?id=61573324123476" style="margin-right: 15px; color: #ccc;"><i
              class="fab fa-facebook fa-lg"></i></a>
          <a href="https://www.instagram.com/swivel.training/?hl=en" style="margin-right: 15px; color: #ccc;"><i
              class="fab fa-instagram fa-lg"></i></a>
          <a href="https://www.linkedin.com/company/105973101/admin/dashboard/"
            style="margin-right: 15px; color: #ccc;"><i class="fab fa-linkedin fa-lg"></i></a>
          <a href="https://www.youtube.com/@Swivel-training" style="margin-right: 15px; color: #ccc;"><i
              class="fab fa-youtube fa-lg"></i></a>
        </div>
      </div>
    </div>

    <div
      style="text-align: center; margin-top: 50px; font-size: 14px; color: #bbb; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px;">
      © 2025 Swivel Training. All rights reserved.
    </div>
  </footer>


</body>

</html>