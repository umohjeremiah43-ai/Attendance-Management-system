<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Logging Out...</title>

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:Arial, sans-serif;
    }

    body{
      width:100%;
      height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      background:#f4f7ff;
      overflow:hidden;
    }

    .logout-container{
      text-align:center;
    }

    .spinner{
      width:90px;
      height:90px;
      border:8px solid #ddd;
      border-top:8px solid #ff4d4f;
      border-radius:50%;
      animation:spin 1s linear infinite;
      margin:auto;
      margin-bottom:25px;
    }

    h2{
      color:#333;
      margin-bottom:10px;
    }

    p{
      color:#777;
    }

    @keyframes spin{
      100%{
        transform:rotate(360deg);
      }
    }

  </style>

</head>
<body>

  <div class="logout-container">

      <div class="spinner"></div>

      <h2>Logging Out...</h2>

      <p>Please wait</p>

  </div>

  <script>

    // Clear fake login session
    localStorage.removeItem("loggedIn");

    // Redirect after delay
    setTimeout(function(){

        window.location.replace("../index.php");

    }, 2500);

  </script>

</body>
</html>