<?php
$pageTitle = "TouristInsight";
$currentPage = "insights";
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

/* ================= PAGE HEADER (WITH INSIGHTS BACKGROUND) ================= */
.page-header{
    background:
        linear-gradient(
            rgba(0, 40, 80, 0.55),
            rgba(0, 40, 80, 0.65)
        ),
        url("assets/img/insights.jpg");

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
    line-height:1.8;
}

/* ================= CONTENT ================= */
.content{
    padding:70px 10%;
}

.insight-card{
    background:#fff;
    padding:40px;
    margin-bottom:40px;
    border-radius:18px;
    box-shadow:0 6px 20px rgba(0,0,0,0.08);
}

.insight-card h2{
    font-size:26px;
    color:#003366;
    margin-bottom:18px;
}

/* ================= INSIGHT LAYOUT ================= */
.insight-layout{
    display:grid;
    grid-template-columns:1fr 0.9fr;
    gap:16px;
    align-items:flex-start;
}

.insight-layout img{
    width:100%;
    max-width:450px;
    border-radius:12px;
    box-shadow:0 6px 18px rgba(0,0,0,0.12);
}

.insight-text{
    padding-right:8px;
}

.insight-text h3{
    font-size:22px;
    margin-bottom:10px;
    color:#003366;
}

.insight-card p{
    font-size:17px;
    line-height:2;
    color:#444;
}

.insight-source{
    margin-top:15px;
    font-size:13px;
    color:#666;
}

.insight-source a{
    color:#005fa3;
    text-decoration:none;
    font-weight:500;
}

.insight-source a:hover{
    text-decoration:underline;
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
    }

    .page-header h1{
        font-size:30px;
    }

    .page-header p{
        font-size:15px;
    }

    .insight-layout{
        grid-template-columns:1fr;
    }

    .nav-brand img{
        width:34px;
    }

    .nav-brand h2{
        font-size:16px;
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
    <h1>Insights & Findings</h1>
    <p>
        This section presents analytical insights derived from the visual exploration of
        foreigner arrivals in Malaysia using Power BI and Apache Hive.
    </p>
</section>

<!-- ================= CONTENT ================= -->
<section class="content">

    <div class="insight-card">
        <h2><i class="fas fa-chart-bar"></i> Domestic Tourism Malaysia – Main Indicators (2021)</h2>

        <div class="insight-layout">
            <div class="insight-text">
                <p>
                    Based on the Domestic Tourism Survey published by the Department of Statistics
                    Malaysia (DOSM), domestic tourism activities in Malaysia experienced a significant
                    decline in 2021 compared to 2020 due to the impact of the COVID-19 pandemic.
                </p>
                <p>
                    Key indicators such as the number of domestic visitors, number of trips, and total
                    tourism expenditure recorded decreases of more than 49%, reflecting restricted
                    mobility, travel limitations, and reduced tourism-related activities.
                </p>
                <p>
                    Shopping remained the main purpose of domestic trips, followed by visiting relatives
                    and leisure activities.
                </p>

                <div class="insight-source">
                    <strong>Source:</strong> Department of Statistics Malaysia (DOSM),
                    Domestic Tourism Survey 2021<br>
                    <a href="https://www.dosm.gov.my/portal-main/release-content/domestic-tourism-survey-2021" target="_blank">
                        https://www.dosm.gov.my/portal-main/release-content/domestic-tourism-survey-2021
                    </a>
                </div>
            </div>

            <img src="assets/img/dosm-domestic-tourism-2021.png" alt="Domestic Tourism Malaysia 2021">
        </div>
    </div>

    <div class="insight-card">
        <h2><i class="fas fa-chart-bar"></i> Domestic Tourism Performance by State (2022)</h2>

        <div class="insight-layout">
            <img src="assets/img/dosm-domestic-tourism-2022.jpg" alt="Domestic Tourism Performance by State 2022">

            <div class="insight-text">
                <h3>Post-Pandemic Tourism Recovery</h3>
                <p>
                    In 2022, all states in Malaysia recorded positive growth in visitor numbers and
                    tourism receipts following the COVID-19 pandemic.
                </p>
                <p>
                    Selangor achieved the highest domestic tourism receipts, followed by Kuala Lumpur,
                    Sarawak, and Pahang, reflecting strong domestic travel demand.
                </p>
                <p>
                    Shopping continued to be the largest contributor to tourism receipts across states.
                </p>

                <div class="insight-source">
                    <strong>Source:</strong> Department of Statistics Malaysia (DOSM),
                    Domestic Tourism Survey 2022<br>
                    <a href="https://www.dosm.gov.my" target="_blank">
                        https://www.dosm.gov.my
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ================= FOOTER ================= -->
<footer>
    © <?php echo $year; ?> | Final Year Project |
    <span>Foreigner Arrivals in Malaysia</span>
</footer>

</body>
</html>
