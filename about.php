<?php
$pageTitle = "TouristInsight";
$currentPage = "about";
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
    width:70px;
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

/* ================= PAGE HEADER ================= */
.page-header{
    background:
        linear-gradient(
            rgba(0, 40, 80, 0.55),
            rgba(0, 40, 80, 0.65)
        ),
        url("assets/img/langkawi.jpg");

    background-size:cover;
    background-position:center 25%;
    background-repeat:no-repeat;

    filter: brightness(1.15) contrast(1.05);

    color:#fff;
    padding:170px 10% 110px;
}

.page-header h1{
    font-size:40px;
    margin-bottom:14px;
}

.page-header p{
    max-width:900px;
    font-size:16px;
    line-height:1.8;
}

/* ================= CONTENT ================= */
.content{
    padding:80px 10%;
}

.info-card{
    background:#fff;
    padding:40px;
    margin-bottom:40px;
    border-radius:18px;
    box-shadow:0 6px 20px rgba(0,0,0,0.08);
}

.info-card h2{
    font-size:26px;
    color:#003366;
    margin-bottom:15px;
}

.info-card p{
    font-size:15px;
    line-height:1.9;
    color:#555;
}

.info-card ul{
    margin-top:15px;
    padding-left:20px;
}

.info-card ul li{
    font-size:15px;
    line-height:1.8;
    margin-bottom:8px;
}

/* ================= FOOTER ================= */
footer{
    background:#003366;
    color:#fff;
    text-align:center;
    padding:25px;
    font-size:14px;
}

footer span{
    color:#ffcc00;
}

/* ================= MOBILE ================= */
@media(max-width:768px){
    .page-header{
        padding:140px 6% 90px;
        background-position:center top;
    }

    .page-header h1{
        font-size:30px;
    }

    .page-header p{
        font-size:15px;
    }

    .content{
        padding:60px 6%;
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
    <h1>About Tourism Malaysia</h1>
    <p>
        This page provides an overview of Tourism Malaysia, highlighting the role and
        importance of the tourism sector in Malaysia, its contribution to the economy,
        and its relevance as the domain context of this research.
    </p>
</section>

<!-- ================= CONTENT ================= -->
<section class="content">

    <div class="info-card">
        <h2><i class="fas fa-globe-asia"></i> Overview of Tourism Malaysia</h2>
        <p>
            Tourism Malaysia represents a major pillar of the national economy and plays
            a crucial role in positioning Malaysia as a competitive global tourism destination.
        </p>
        <p>
            Through strategic promotion, destination development, and policy support,
            the tourism sector contributes significantly to economic growth and international visibility.
        </p>
    </div>

    <div class="info-card">
        <h2><i class="fas fa-chart-line"></i> Role and Importance of Tourism in Malaysia</h2>
        <p>
            Tourism is a key driver of Malaysia’s economic development and supports
            multiple related industries such as transportation, accommodation, food and beverage,
            retail, and cultural services.
        </p>
        <p>
            The sector also creates employment opportunities and stimulates regional development,
            particularly in popular destinations such as Langkawi, Kuala Lumpur, and Sabah.
        </p>
    </div>

    <div class="info-card">
        <h2><i class="fas fa-database"></i> Tourism Malaysia as a Data Context</h2>
        <p>
            Tourism-related data in Malaysia is published by authoritative agencies such as
            the Department of Statistics Malaysia (DOSM) and Tourism Malaysia.
        </p>
        <p>
            These datasets include information on visitor arrivals, country of origin,
            travel patterns, and length of stay, forming a valuable foundation for tourism analytics.
        </p>
    </div>

    <!-- 🔹 TAMBAHAN BARU -->
    <div class="info-card">
        <h2><i class="fas fa-users"></i> Foreigner Arrivals and Tourism Trends</h2>
        <p>
            Foreigner arrivals represent an important indicator of tourism performance
            and reflect the effectiveness of tourism policies, global travel conditions,
            and destination attractiveness.
        </p>
        <p>
            Analysing arrival trends enables stakeholders to understand fluctuations across years,
            identify key source markets, and evaluate the impact of external factors such as
            global events and economic changes.
        </p>
    </div>

    <div class="info-card">
        <h2><i class="fas fa-lightbulb"></i> Relevance to This Research</h2>
        <p>
            This Final Year Project focuses on analysing foreigner arrivals in Malaysia
            using big data analytics and interactive dashboards.
        </p>
        <p>
            By transforming raw tourism data into visual insights, this research supports
            evidence-based decision-making and contributes to a deeper understanding
            of Malaysia’s tourism dynamics.
        </p>
    </div>

</section>

<!-- ================= FOOTER ================= -->
<footer>
    © <?php echo $year; ?> | Final Year Project |
    <span>Foreigner Arrivals in Malaysia</span>
</footer>

</body>
</html>
