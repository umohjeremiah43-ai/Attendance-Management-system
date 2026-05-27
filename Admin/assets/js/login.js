// CHECK LOGIN STATUS WHEN PAGE LOADS

window.addEventListener("load", function(){

    // If already logged in
    if(localStorage.getItem("loggedIn") === "true"){

        // Skip login and loader
        document.getElementById("login-screen").style.display = "none";

        document.getElementById("loader").style.display = "none";

        document.getElementById("website-content").style.display = "block";

    }

});

// LOGIN BUTTON

document.getElementById("login-btn").addEventListener("click", function(){

    // Save login state
    localStorage.setItem("loggedIn", "true");

    // Hide login
    document.getElementById("login-screen").style.display = "none";

    // Show loader
    document.getElementById("loader").style.display = "flex";

    // Simulate loading
    setTimeout(function(){

        // Hide loader
        document.getElementById("loader").style.display = "none";

        // Show dashboard
        document.getElementById("website-content").style.display = "block";

    }, 3000);

});
