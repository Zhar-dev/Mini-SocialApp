<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$profileUserId = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Homepage</title>
    <link rel="icon" href="Pictures/home.svg" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700;900&family=Stardos+Stencil:wght@700&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
          font-family: "Poppins";
          background-color: #F6F1EE;
          color: #4F4A45;
      }

      header {
          text-align: center;
      }

      .name {
          color: #112D4E;

          text-align: center;
          text-shadow: 2px 2px 2px #7b7b7b;
      }

      .course {
          color: #ED7D31;

          text-align: center;
          text-shadow: 0px 0px 4px #7b7b7b;

          margin-top: 0px;
          margin-bottom: 0px;
      }

      .block {
          color: #ED7D31;

          text-align: center;
          text-shadow: 0px 0px 4px #7b7b7b;

          margin-top: 0px;
      }

      .img {
          width: 100%;
          height: 300px;

          cursor: pointer;

          border-radius: 10px 10px 0px 0px;

          transition: opacity 0.4s;
      }

      .img-mid {
          width: 100%;
          height: 340px;

          cursor: pointer;

          border-radius: 10px 10px 0px 0px;
      }

      .cont {
          display: inline-block;

          margin-top: 20px;
          margin-left: 30px;

          align-items: center;
          justify-content: center;

          width: 460px;

          border-radius: 10px;

          background-color: #ED7D31;

          transition: opacity 0.4s, box-shadow 0.4s;
      }

      .cont:hover {
          box-shadow: 6px 6px 16px #4F4A45;
      }

      .cont:active {
          opacity: 0.6;
      }

      h4 {
          text-align: center;

          margin-top: 12px;
          margin-bottom: 18px;

          color: white;

          font-family: Poppins;
          font-size: 24px;

          cursor: pointer;

          text-shadow: 0px 0px 2px #000000;
      }

      a {
        text-decoration: none;

        color: black;

        font-weight: bold;
        font-size: 18px;
      }

      .links {
          text-align: end;

          margin-right: 50px;
          margin-top: 80px;

          font-weight: bolder;
          font-size: 18px;
      }

      .red {
        color: red;
      }
    </style>
  </head>

  <body>

    <header>
        <h1>Welcome, <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>!</h1>
      </header>

    <div class="cont">
      <a href="profile.php?user_id=<?php echo $profileUserId; ?>">
        <img class="img" src="Pictures/cute.jpg" alt="Profile" />
      </a>
      <a href="profile.php?user_id=<?php echo $profileUserId; ?>">
        <h4 class="label">PROFILE</h4>
      </a>
    </div>

    <div class="cont">
      <a href="gallery.php?user_id=<?php echo $profileUserId; ?>">
        <img class="img-mid" src="Pictures/nature.jpg" alt="Profile" />
      </a>
      <a href="gallery.php?user_id=<?php echo $profileUserId; ?>">
        <h4 class="label">GALLERY</h4>
      </a>
    </div>

    <div class="cont">
      <a href="contact.php?user_id=<?php echo $profileUserId; ?>">
        <img class="img" src="Pictures/Type.jpg" alt="Profile" />
      </a>
      <a href="contact.php?user_id=<?php echo $profileUserId; ?>">
        <h4 class="label">CONTACT</h4>
      </a>
    </div>

    <p class="links">
      <a href="profile.php?user_id=<?php echo $profileUserId; ?>">PROFILE &#x7c;</a>
      <a href="gallery.php?user_id=<?php echo $profileUserId; ?>">GALLERY &#x7c;</a>
      <a href="contact.php?user_id=<?php echo $profileUserId; ?>">CONTACT &#x7c;</a>
      <a href="logout.php"><span class="red">LOG OUT</span></a>
    </p>
  </body>
</html>
