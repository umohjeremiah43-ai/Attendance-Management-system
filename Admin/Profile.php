<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Profile</title>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:Arial, sans-serif;
    }

    body{
      background:#f4f7ff;
      padding:30px;
    }

    .profile-container{
      max-width:1100px;
      margin:auto;
    }

    /* TOP BAR */

    .top-bar{
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:30px;
    }

    .top-bar h1{
      font-size:32px;
      color:#222;
    }

    .back-btn{
      padding:12px 18px;
      border:none;
      background:#4B49AC;
      color:white;
      border-radius:10px;
      cursor:pointer;
      font-size:15px;
      transition:0.3s;
    }

    .back-btn:hover{
      background:#3d3aa0;
    }

    /* PROFILE CARD */

    .profile-card{
      background:white;
      border-radius:20px;
      padding:40px;
      box-shadow:0 10px 25px rgba(0,0,0,0.08);
    }

    .profile-header{
      display:flex;
      gap:30px;
      align-items:center;
      flex-wrap:wrap;
      margin-bottom:40px;
    }

    .profile-image{
      position:relative;
    }

    .profile-image img{
      width:140px;
      height:140px;
      border-radius:50%;
      object-fit:cover;
      border:5px solid #4B49AC;
    }

    .camera-btn{
      position:absolute;
      bottom:5px;
      right:5px;
      width:40px;
      height:40px;
      background:#4B49AC;
      border-radius:50%;
      display:flex;
      justify-content:center;
      align-items:center;
      color:white;
      cursor:pointer;
      border:3px solid white;
    }

    .profile-info h2{
      font-size:32px;
      margin-bottom:10px;
      color:#222;
    }

    .profile-info p{
      color:#777;
      margin-bottom:8px;
      font-size:16px;
    }

    .status{
      display:inline-block;
      padding:8px 15px;
      background:#d4f8d4;
      color:green;
      border-radius:30px;
      font-size:14px;
      margin-top:10px;
    }

    /* FORM SECTION */

    .profile-form{
      display:grid;
      grid-template-columns:repeat(auto-fit, minmax(300px,1fr));
      gap:25px;
    }

    .input-group{
      display:flex;
      flex-direction:column;
    }

    .input-group label{
      margin-bottom:8px;
      font-weight:600;
      color:#333;
    }

    .input-group input,
    .input-group textarea,
    .input-group select{
      padding:14px;
      border:1px solid #ddd;
      border-radius:12px;
      outline:none;
      font-size:15px;
      transition:0.3s;
    }

    .input-group input:focus,
    .input-group textarea:focus,
    .input-group select:focus{
      border-color:#4B49AC;
      box-shadow:0 0 5px rgba(75,73,172,0.2);
    }

    textarea{
      resize:none;
      height:120px;
    }

    /* BUTTONS */

    .button-group{
      margin-top:35px;
      display:flex;
      gap:15px;
      flex-wrap:wrap;
    }

    .save-btn,
    .edit-btn{
      padding:14px 25px;
      border:none;
      border-radius:12px;
      cursor:pointer;
      font-size:15px;
      transition:0.3s;
    }

    .save-btn{
      background:#4B49AC;
      color:white;
    }

    .save-btn:hover{
      background:#3d3aa0;
    }

    .edit-btn{
      background:#eef1ff;
      color:#4B49AC;
    }

    .edit-btn:hover{
      background:#dfe5ff;
    }

    /* STATS */

    .profile-stats{
      margin-top:40px;
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
      gap:20px;
    }

    .stat-card{
      background:white;
      padding:25px;
      border-radius:18px;
      box-shadow:0 5px 20px rgba(0,0,0,0.05);
    }

    .stat-card i{
      font-size:35px;
      color:#4B49AC;
      margin-bottom:15px;
    }

    .stat-card h3{
      font-size:28px;
      margin-bottom:8px;
      color:#222;
    }

    .stat-card p{
      color:#777;
    }

    @media(max-width:768px){

      .profile-header{
        flex-direction:column;
        text-align:center;
      }

      .button-group{
        flex-direction:column;
      }

      .save-btn,
      .edit-btn{
        width:100%;
      }

    }

  </style>
</head>
<body>

  <div class="profile-container">

    <!-- TOP BAR -->

    <div class="top-bar">

      <h1>Admin Profile</h1>

      <button class="back-btn" onclick="goBack()">
        <i class="bi bi-arrow-left"></i>
        Go Back
      </button>

    </div>

    <!-- PROFILE CARD -->

    <div class="profile-card">

      <!-- PROFILE HEADER -->

      <div class="profile-header">

        <div class="profile-image">

          <img src="https://i.pravatar.cc/300" alt="Profile">

          <div class="camera-btn">
            <i class="bi bi-camera-fill"></i>
          </div>

        </div>

        <div class="profile-info">

          <h2>Jeremiah Umoh</h2>

          <p><i class="bi bi-envelope"></i> admin@gmail.com</p>

          <p><i class="bi bi-telephone"></i> +234 812 345 6789</p>

          <p><i class="bi bi-geo-alt"></i> Lagos, Nigeria</p>

          <span class="status">
            Active Administrator
          </span>

        </div>

      </div>

      <!-- PROFILE FORM -->

      <div class="profile-form">

        <div class="input-group">
          <label>Full Name</label>
          <input type="text" value="Jeremiah Umoh">
        </div>

        <div class="input-group">
          <label>Email Address</label>
          <input type="email" value="admin@gmail.com">
        </div>

        <div class="input-group">
          <label>Phone Number</label>
          <input type="text" value="+234 812 345 6789">
        </div>

        <div class="input-group">
          <label>Role</label>
          <select>
            <option>Administrator</option>
            <option>Teacher</option>
            <option>Staff</option>
          </select>
        </div>

        <div class="input-group" style="grid-column:1/-1;">
          <label>About</label>

          <textarea>
Passionate administrator managing the school attendance system dashboard and records.
          </textarea>

        </div>

      </div>

      <!-- BUTTONS -->

      <div class="button-group">

        <button class="save-btn">
          <i class="bi bi-check-circle"></i>
          Save Changes
        </button>

        <button class="edit-btn">
          <i class="bi bi-pencil-square"></i>
          Edit Profile
        </button>

      </div>

    </div>

    <!-- STATS -->

    <div class="profile-stats">

      <div class="stat-card">

        <i class="bi bi-people-fill"></i>

        <h3>1,250</h3>

        <p>Total Students</p>

      </div>

      <div class="stat-card">

        <i class="bi bi-building"></i>

        <h3>25</h3>

        <p>Total Classes</p>

      </div>

      <div class="stat-card">

        <i class="bi bi-person-check-fill"></i>

        <h3>96%</h3>

        <p>Attendance Rate</p>

      </div>

    </div>

  </div>

  <script>

    function goBack(){

      window.location.href = "../index.php";

      // Change to your dashboard page name

    }

  </script>

</body>
</html>