<?php
$pageTitle = "TouristInsight";
$currentPage = "dashboard";
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $pageTitle; ?></title>
<link rel="icon" type="image/png" href="assets/img/logo-fyp.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f4f6f9;
    color:#001F3F;
}

/* ================= NAVBAR ================= */
nav{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    z-index:999;
    padding:15px 10%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#003366;
}

.nav-brand{
    display:flex;
    align-items:center;
    gap:12px;
}

.nav-brand img{
    width:80px;
}

.nav-brand h2{
    color:#fff;
    font-size:20px;
    font-weight:600;
}

nav ul{
    list-style:none;
    display:flex;
    gap:25px;
}

nav ul li a{
    color:#fff;
    text-decoration:none;
    font-size:14px;
    transition:0.3s;
}

nav ul li a:hover,
nav ul li a.active{
    color:#ffcc00;
    border-bottom:2px solid #ffcc00;
}

/* ================= PAGE HEADER (WITH POWER BI BACKGROUND) ================= */
.page-header{
    background:
        linear-gradient(
            rgba(0, 40, 80, 0.55),
            rgba(0, 40, 80, 0.65)
        ),
        url("assets/img/powerbi.jpg");

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    filter: brightness(1.15) contrast(1.05);

    color:#fff;
    padding:160px 10% 100px;
}

.page-header h1{
    font-size:38px;
    margin-bottom:12px;
}

.page-header p{
    max-width:900px;
    font-size:16px;
    line-height:1.7;
}

/* ================= CONTENT ================= */
.content{
    padding:70px 10%;
}

/* ================= DASHBOARD CARD ================= */
.dashboard-card{
    background:#DCE8F3;
    padding:35px;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,0.1);
}

.dashboard-card h2{
    font-size:26px;
    color:#003366;
    margin-bottom:15px;
}

.dashboard-card p{
    font-size:15px;
    line-height:1.8;
    color:#555;
    margin-bottom:25px;
}

/* ================= IFRAME ================= */
.dashboard-frame{
    width:100%;
    height:600px;
    border:none;
    border-radius:16px;
    box-shadow:0 6px 20px rgba(0,0,0,0.15);
}

/* ================= FOOTER ================= */
footer{
    background:#003366;
    color:#fff;
    text-align:center;
    padding:25px;
    font-size:14px;
    margin-top:80px;
}

footer span{
    color:#ffcc00;
}

/* ================= MOBILE ================= */
@media(max-width:768px){
    .page-header{
        padding:140px 6% 90px;
    }

    .page-header h1{
        font-size:30px;
    }

    .page-header p{
        font-size:15px;
    }

    .dashboard-frame{
        height:450px;
    }

    .nav-brand img{
        width:34px;
    }
}
</style>
</head>

<body>

<!-- ================= NAVBAR ================= -->
<nav>
    <div class="nav-brand">
        <img src="assets/img/logo-fyp.png" alt="FYP Logo">
        <h2>TouristInsight</h2>
    </div>
    <ul>
        <li><a href="index.php" class="<?php if($currentPage=='home') echo 'active'; ?>">Home</a></li>
        <li><a href="about.php" class="<?php if($currentPage=='about') echo 'active'; ?>">About</a></li>
        <li><a href="dashboard.php" class="<?php if($currentPage=='dashboard') echo 'active'; ?>">Dashboard</a></li>
        <li><a href="insights.php" class="<?php if($currentPage=='insights') echo 'active'; ?>">Insights</a></li>
    </ul>
</nav>

<!-- ================= PAGE HEADER ================= -->
<section class="page-header">
    <h1>Power BI Dashboard</h1>
    <p>
        Interactive visualisation and analysis of foreigner arrivals in Malaysia
        developed using Microsoft Power BI.
    </p>
</section>

<!-- ================= CONTENT ================= -->
<section class="content">

    <div class="dashboard-card">
        <h2><i class="fas fa-chart-line"></i> Interactive Tourism Dashboard</h2>
        <p>
            This dashboard presents key insights on foreigner arrivals in Malaysia,
            including trends over time, top countries of origin, state-level entry
            patterns, and arrival types. Users can interact with filters and visuals
            to explore the data dynamically.
            <br><br>
            <strong>Tip:</strong> Best viewed in full screen.
        </p>

        <iframe
            class="dashboard-frame"
            src="https://app.powerbi.com/view?r=eyJrIjoiMjI1MmEwMDUtNWQ4Yi00ZWMyLWFjYzItNWYyZjc1MjNlOWNkIiwidCI6ImNkY2JiMGUyLTlmZWEtNGY1NC04NjcwLTY3MjcwNzc5N2FkYSIsImMiOjEwfQ%3D%3D&pageName=4cf22e55b3ac2c32842c"
            allowfullscreen>
        </iframe>
    </div>

</section>

<!-- ================= FOOTER ================= -->
<footer>
    © <?php echo $year; ?> | Final Year Project |
    <span>Foreigner Arrivals in Malaysia</span>
</footer>

</body>
</html>
