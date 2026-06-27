<?php
$pageTitle = "TouristInsight";
$currentPage = "home";
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $pageTitle; ?></title>
<link rel="icon" type="image/svg+xml" href="assets/img/logo-fyp.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{background:#f4f6f9;color:#001F3F;}

/* ================= NAVBAR ================= */
nav{
position:fixed;top:0;left:0;width:100%;z-index:999;
padding:15px 10%;display:flex;justify-content:space-between;align-items:center;
background:rgba(0,51,102,.25);backdrop-filter:blur(6px);transition:.2s;
}
nav.scrolled{background:#003366;box-shadow:0 4px 15px rgba(0,0,0,.25);}
.nav-brand{display:flex;align-items:center;gap:12px;}
.nav-brand img{width:80px;}
.nav-brand h2{color:#fff;font-size:20px;font-weight:600;}
nav ul{list-style:none;display:flex;gap:25px;}
nav ul li a{color:#fff;text-decoration:none;font-size:14px;}
nav ul li a:hover,
nav ul li a.active{color:#ffcc00;border-bottom:2px solid #ffcc00;}

/* ================= HERO (VIDEO) ================= */
header{
position:relative;min-height:120vh;overflow:hidden;
padding:160px 10% 140px;color:#fff;text-align:center;
display:flex;flex-direction:column;justify-content:center;
}
header video{
position:absolute;top:0;left:0;width:100%;height:100%;
object-fit:cover;z-index:-2;
}
header::after{
content:"";position:absolute;inset:0;
background:linear-gradient(
to bottom,
rgba(0,40,80,.25),
rgba(0,40,80,.45)
);
z-index:-1;
}
header h1{
font-size:48px;font-weight:700;margin-bottom:20px;
text-shadow:0 4px 14px rgba(0,0,0,.4);
}
header p{
font-size:18px;max-width:900px;margin:0 auto 30px;
line-height:1.8;text-shadow:0 4px 14px rgba(0,0,0,.4);
}
.hero-hint{margin-top:20px;font-size:14px;}
.highlight{color:#f2fe74ff;font-size:18px;font-weight:600;}

.btn-group{margin-top:35px;}
.btn{
display:inline-block;padding:14px 32px;margin:10px;
background:#fff;color:#003366;border-radius:30px;
text-decoration:none;font-weight:600;transition:.3s;
}
.btn:hover{background:#ffcc00;transform:translateY(-3px);}

.video-credit{
    position: absolute;
    bottom: 20px;          /* naikkan sikit */
    right: 24px;
    font-size: 14px;       /* dari 12px → 14px */
    font-weight: 500;      /* bagi sedikit tebal */
    color: rgba(255,255,255,0.9);
    letter-spacing: 0.3px; /* nampak lebih kemas */
}

.video-credit a{
    color: #ffcc00;
    text-decoration: none;
    font-weight: 600;      /* highlight nama channel */
}


/* ================= STATS ================= */
.stats{
display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:25px;padding:60px 10%;background:#fff;
}
.stat-box{
background:#DCE8F3;padding:30px;border-radius:15px;text-align:center;
box-shadow:0 4px 15px rgba(0,0,0,.05);
}
.stat-box i{font-size:40px;color:#005fa3;margin-bottom:15px;}
.stat-box h2{font-size:28px;color:#003366;}
.stat-box p{font-size:14px;color:#666;}

/* ================= ABOUT ================= */
.about{padding:70px 10%;text-align:center;}
.about h2{font-size:32px;margin-bottom:20px;color:#003366;}
.about p{max-width:900px;margin:auto;line-height:1.8;color:#555;}

/* ================= WHY ================= */
.why-section{padding:80px 8%;background:#DCE8F3;text-align:center;}
.section-title{font-size:36px;font-weight:700;color:#0f3d63;}
.section-subtitle{font-size:16px;color:#6c7a89;max-width:700px;margin:0 auto 50px;}
.why-cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;}
.why-card{
background:#fff;padding:40px 30px;border-radius:18px;
box-shadow:0 10px 30px rgba(0,0,0,.08);
}
.icon-circle{
width:70px;height:70px;border-radius:50%;
background:linear-gradient(135deg,#0f3d63,#1f6fb2);
display:flex;align-items:center;justify-content:center;
margin:0 auto 25px;color:#fff;font-size:28px;
}

/* ================= MISSION ================= */
.mission-split{
display:grid;grid-template-columns:1fr 2fr;
gap:40px;padding:80px 10%;background:#F4F6F9;align-items:center;
}
.mission-left h2{font-size:36px;color:#0f3d63;}
.mission-right p{font-size:17px;color:#4f5f73;line-height:1.7;}

/* ================= PROFILE ================= */
.profile-section{padding:90px 10%;background:#fff;}
.profile-section .section-title{text-align:center;}
.profile-card{
max-width:1000px;margin:auto;background:#f4f6f9;
border-radius:22px;padding:50px;
display:grid;grid-template-columns:220px 1fr;
gap:40px;align-items:center;
box-shadow:0 10px 30px rgba(0,0,0,.1);
}
.profile-card img{
width:200px;height:200px;object-fit:cover;
border-radius:50%;border:6px solid #003366;
}
.profile-info h2{font-size:28px;color:#003366;}
.profile-info h4{font-size:16px;color:#005fa3;margin-bottom:15px;}
.profile-info p{font-size:15px;line-height:1.8;color:#555;}
.profile-contact{margin-top:22px;display:flex;gap:22px;flex-wrap:wrap;}
.profile-contact a{
font-size:14px;color:#003366;text-decoration:none;
display:flex;align-items:center;gap:8px;
}

/* ================= FEATURES ================= */
.features{
padding:60px 10%;background:#DCE8F3;
display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:30px;
}
.feature{
background:#f4f6f9;padding:35px;border-radius:18px;
text-align:center;transition:.3s;
}
.feature:hover{transform:translateY(-8px);box-shadow:0 10px 25px rgba(0,0,0,.1);}
.feature i{font-size:45px;color:#005fa3;margin-bottom:15px;}
.feature h3{font-size:20px;margin-bottom:10px;color:#003366;}
.feature p{font-size:14px;color:#555;}

/* ================= FOOTER ================= */
footer{background:#003366;color:#fff;text-align:center;padding:25px;font-size:14px;}
footer span{color:#ffcc00;}

/* ================= MOBILE ================= */
@media(max-width:768px){
header{padding:140px 6% 80px;min-height:85vh;}
header h1{font-size:32px;}
header p{font-size:15px;}
.nav-brand img{width:34px;}
.nav-brand h2{font-size:16px;}
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

<!-- ===== HERO ===== -->
<header>
<video autoplay muted loop playsinline>
<source src="assets/video/malaysia_truly_asia.mp4" type="video/mp4">
</video>

    <h1>Exploring Foreigner Arrivals in Malaysia</h1>
    <p>
        <strong>Analysing Foreigner Arrivals in Malaysia Using 
        Interactive Dashboards and Big Data Analytics. </strong> 

        <strong> Through data-driven visual exploration, this study highlights key arrival patterns and trends
        to support deeper understanding of Malaysia’s tourism landscape. </strong>
        <br>
    </p>

    <p class="hero-hint">
    <span class="highlight">
        <strong>Scroll down to explore further insights and research details below.</strong>
    </span>
    </p>

    <div class="btn-group">
        <p> Let's dive into the dashboard for more details by click the button below! </p>
        <a href="dashboard.php" class="btn"><i class="fas fa-chart-line"></i> View Dashboard</a>
    </div>

<div class="video-credit">
Video credit:
<a href="https://www.youtube.com/@MalaysiaTrulyAsia" target="_blank">@MalaysiaTrulyAsia</a>
</div>

</header>

<!-- ===== STATS ===== -->
<section class="stats">
    <div class="stat-box">
        <i class="fas fa-plane-arrival"></i>
        <h2>Millions</h2>
        <p>Total Foreigner Arrivals</p>
    </div>
    <div class="stat-box">
        <i class="fas fa-globe-asia"></i>
        <h2>Top Countries</h2>
        <p>Singapore, Thailand, Indonesia</p>
    </div>
    <div class="stat-box">
        <i class="fas fa-calendar-alt"></i>
        <h2>2020–2024</h2>
        <p>Data Coverage Period</p>
    </div>
    <div class="stat-box">
        <i class="fas fa-chart-pie"></i>
        <h2>Interactive</h2>
        <p>Visual Analytics</p>
    </div>
</section>

<!-- ===== ABOUT ===== -->
<section class="about">
    <h2>Research Overview</h2>
    <p>
        This research explores patterns and trends of foreigner arrivals in Malaysia using interactive 
        dashboards and big data analytics to support data-driven insights.
    </p>
</section>

<!-- WHY THIS RESEARCH MATTERS -->
<section class="why-section">
    <h2 class="section-title">Why This Research Matters</h2>
    <p class="section-subtitle">
        Key motivations behind analysing foreigner arrivals using big data analytics.
    </p>

    <div class="why-cards">
        <div class="why-card">
            <div class="icon-circle">
                <i class="fas fa-database"></i>
            </div>
            <h3>Complex Tourism Data</h3><br>
            <p>
                Tourism arrival data in Malaysia is high-volume, complex, and fragmented across multiple sources, making analysis difficult without proper structuring.
            </p>
        </div>

        <div class="why-card">
            <div class="icon-circle">
                <i class="fas fa-eye-slash"></i>
            </div>
            <h3>Limited Insights</h3><br>
            <p>
                Conventional reporting methods are insufficient to reveal meaningful patterns and trends hidden within large-scale tourism datasets.
            </p>
        </div>

        <div class="why-card">
            <div class="icon-circle">
                <i class="fas fa-chart-line"></i>
            </div>
            <h3>Data-Driven Solution</h3><br>
            <p>
                This research transforms raw tourism data into interactive dashboards that enable structured analysis and informed decision-making.
            </p>
        </div>
    </div>
</section>

<!-- OUR MISSION -->
<section class="mission-split">
    <div class="mission-left">
        <h2>Mission</h2>
    </div>
    <div class="mission-right">
        <p>
            This research aims to bridge the gap between raw tourism data and meaningful analysis
            by leveraging big data processing and interactive dashboards to reveal patterns,
            trends, and insights on foreigner arrivals in Malaysia.
        </p>
    </div>
</section>

<!-- PROFILE -->
<section class="profile-section">
    <h2 class="section-title">The researchers of this study</h2>
    <div class="profile-card">
        <img src="assets/img/profile.jpg">
    <div class="profile-info">
    <h2>Yahya Naim</h2>
    <h4>Researcher</h4>
        <p>My name is Yahya Naim bin Md Rofiee, a final-year student at Universiti Teknologi MARA (UiTM) Arau, Perlis, currently pursuing 
            a Bachelor’s Degree in Information Technology (Hons.). My Final Year Project research focuses on tourist insight in Malaysia.</p>
    <div class="profile-contact">
            <a href="#"><i class="fas fa-phone"></i> +60 17-410 2466</a>
            <a href="#"><i class="fas fa-envelope"></i> assignment.yahya@gmail.com</a>
            <a href="https://www.linkedin.com/in/yahya-naim-0353b3229/"><i class="fab fa-linkedin"></i> LinkedIn</a>
    </div>
    </div>
    </div>
</section>

<!-- ===== FEATURES ===== -->
<section class="features">
    <div class="feature">
        <i class="fas fa-database"></i>
        <h3>Big Data Processing</h3>
        <p>Apache Hive is used to clean, transform, and manage large-scale tourism datasets efficiently.</p>
    </div>
    <div class="feature">
        <i class="fas fa-chart-bar"></i>
        <h3>Power BI Dashboard</h3>
        <p>Interactive dashboards allow users to explore trends by year, country, and arrival type.</p>
    </div>
    <div class="feature">
        <i class="fas fa-lightbulb"></i>
        <h3>Insight Generation</h3>
        <p>Visual storytelling helps uncover patterns and insights from complex tourism data.</p>
    </div>
</section>

<footer>
    © <?php echo date("Y"); ?> | Final Year Project |
    <span>Foreigner Arrivals in Malaysia</span>
</footer>

<script>
    window.addEventListener("scroll", function () {
        const nav = document.querySelector("nav");
        nav.classList.toggle("scrolled", window.scrollY > 50);

        const header = document.querySelector("header");
        header.style.backgroundPosition = "center " + (window.scrollY * 0.3) + "px";
    });
</script>

</body>
</html>
