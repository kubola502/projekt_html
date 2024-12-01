<?php include 'header.php'; ?>
<head>
    <title>Oferta</title>
    <link rel="stylesheet" href="offer_style.css">
</head>
<body>
   

    <div class="banner">
        <h1>Nasza Oferta</h1>
        <p>Sprawdź, co możemy Ci zaoferować</p>
    </div>

    <div class="oferta-container">
        <section class="oferta-item">
            <img src="foto/meganka.jpg" alt="Usługa 1">
            <div class="oferta-content">
            <h2>Renault Megan</h2>
                <ul class="car-details">
                    <li>Rok produkcji: 2021</li>
                    <li>Przebieg: 15,000 km</li>
                    <li>Moc: 450 KM</li>
                    <li>Cena: 200,000 PLN</li>
                </ul>
                <a href="reservation.php?car=megan" class="reserve-button">Zarezerwuj</a>
            </div>
        </section>

        <section class="oferta-item">
            <img src="foto/kia.jpg" alt="Usługa 2">
            <div class="oferta-content">
            <h2>KIA</h2>
                <ul class="car-details">
                    <li>Rok produkcji: 2020</li>
                    <li>Przebieg: 30,000 km</li>
                    <li>Moc: 510 KM</li>
                    <li>Cena: 280,000 PLN</li>
                </ul>
                <a href="reservation.php?car=kia" class="reserve-button">Zarezerwuj</a>
            </div>
        </section>

        <section class="oferta-item">
            <img src="foto/hyundai.jpg" alt="Usługa 3">
            <div class="oferta-content">
            <h2>Hyundai</h2>
                <ul class="car-details">
                    <li>Rok produkcji: 2022</li>
                    <li>Przebieg: 10,000 km</li>
                    <li>Moc: 600 KM</li>
                    <li>Cena: 400,000 PLN</li>
                </ul>
                <a href="reservation.php?car=hyundai" class="reserve-button">Zarezerwuj</a>
            </div>
        </section>
    </div>

    
</body>
