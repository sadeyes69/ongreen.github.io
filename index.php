<?php
include 'header.php';
$matches = [
    ["team1" => "NAVI", "team2" => "Spirit", "time" => "16:00", "k1" => "1.32", "k2" => "3.20", "k3" => "1.45"],
    ["team1" => "NAVI", "team2" => "Spirit", "time" => "18:00", "k1" => "1.37", "k2" => "3.24", "k3" => "1.45"],
    ["team1" => "NAVI", "team2" => "Spirit", "time" => "19:30", "k1" => "1.30", "k2" => "3.10", "k3" => "1.50"],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="container">
<section class="banner">
    Киберспорт в реальном времени: матчи, команды и последние новости!
</section>

<section class="live">
    <h2>LIVE события</h2>
    <div class="cards">
        <div class="card">
            <div class="text">
            <h3>Counter-Strike</h3>

            <p>IEM Cologne Major 2026 ESL Pro</p></div>
            <div class="logo"><img src="navi.png" alt="" style="width: 76px">
                <p>1:0</p>
                <img src="ts.png" alt="" style="width: 76px">
            </div>
            <div class="odds-row">
                <div class="odd-item"><span>W1</span><div class="odd-val">1.32</div></div>
                <div class="odd-item"><span>X</span><div class="odd-val">3.78</div></div>
                <div class="odd-item"><span>W2</span><div class="odd-val">1.45</div></div>
            </div>

        </div>

        <div class="card">
            <div class="text">
                <h3>Counter-Strike</h3>

                <p>IEM Cologne Major 2026 ESL Pro</p></div>
            <div class="logo"><img src="navi.png" alt="" style="width: 76px">
                <p>1:0</p>
                <img src="ts.png" alt="" style="width: 76px">
            </div>
            <div class="odds-row">
                <div class="odd-item"><span>W1</span><div class="odd-val">1.32</div></div>
                <div class="odd-item"><span>X</span><div class="odd-val">3.78</div></div>
                <div class="odd-item"><span>W2</span><div class="odd-val">1.45</div></div>
            </div>

        </div>
    </div>
</section>


<h2 class="section-title">Ближайшие события</h2>
<div class="main-layout">
    <div class="events-list">
        <div class="event_row">
            <div class="event-info">
                <div class="event-team"><img class="icon-mini navi" src="navi.png"></img> Natus Vinteres</div>
                <div class="event-team"><img class="icon-mini spirit" src="ts.png"></img> Team Spirit</div>
            </div>
            <div class="event-meta">
                <div>Counter-Strike. IEM Cologne Major 2026 ESL Pro</div>
                <div class="time-small">Завтра. 18:00</div>
            </div>
            <div class="event-odds">
                <div class="odd-box">1.32</div>
                <div class="odd-box">3.78</div>
                <div class="odd-box">1.45</div>
            </div>
        </div>

        <div class="event_row">
            <div class="event-info">
                <div class="event-team"><img class="icon-mini navi" src="navi.png"></img> Natus Vinteres</div>
                <div class="event-team"><img class="icon-mini spirit" src="ts.png"></img> Team Spirit</div>
            </div>
            <div class="event-meta">
                <div>Counter-Strike. IEM Cologne Major 2026 ESL Pro</div>
                <div class="time-small">Завтра. 18:00</div>
            </div>
            <div class="event-odds">
                <div class="odd-box">1.32</div>
                <div class="odd-box">3.78</div>
                <div class="odd-box">1.45</div>
            </div>
        </div>

        <div class="event_row">...</div>
        <div class="event_row">...</div>

        <button class="load-more">Загрузить больше</button>
    </div>

    <aside class="sidebar">
        <div class="side-item active">cs go</div>
        <div class="side-item">dota</div>
        <div class="side-item">LoL</div>
        <div class="side-item">valorant</div>
        <div class="side-item">ml</div>
        <div class="side-item">overwatch</div>
    </aside>
</div>


<div class="social-circles">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
</div>

<?php
include 'footer.php';
?>
</div>
</body>
</html>