<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подписание контракта | Администрация Кимовский район</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-inner">
               <a href="index.php" class="logo">
    <img src="images/logo.jpg" alt="Логотип" class="header-logo-img" onerror="this.style.display='none'">
    <div class="logo-text">
        <h1>Кимовский район</h1>
        <span>Подготовка тендеров</span>
    </div>
</a>
                <div class="burger" onclick="toggleMenu()"><span></span><span></span><span></span></div>
                <nav id="nav">
                <a href="index.php">Главная</a>
                <a href="about.php">О проекте</a>
                <a href="services.php">Услуги</a>
                <a href="news.php" class="active">Новости</a>

                <?php render_auth_nav(); ?>
                    </nav>
            </div>
        </div>
    </header>
    <section class="hero compact">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">Новости</div>
                <h2>Подписание <span>контракта на разработку</span></h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <a href="news3.php" class="article-back">← Назад к новостям</a>
            <div class="article-layout">
                <div class="article-main">
                    <div class="article-content">
                        <h1>Подписание контракта на разработку сайта</h1>
                        <div class="article-meta"><span>15 октября 2025</span><span>Администрация</span><span>
                                1 567 просмотров</span></div>
                        <div class="article-body">
                            <p>Официально заключён договор с подрядчиком на создание сайта подготовки тендеров
                                администрации муниципального образования Кимовский район.</p>

                            <h2>Параметры контракта</h2>
                            <ul>
                                <li>Сумма контракта: 8,5 млн рублей</li>
                                <li>Срок реализации: 6 месяцев</li>
                                <li>Гарантийный период: 12 месяцев после ввода в эксплуатацию</li>
                            </ul>

                            <p>Этот контракт положил начало масштабному проекту по цифровизации закупочной деятельности
                                муниципального образования.</p>
                        </div>
                        <div class="article-tags"><span class="news-tag tag-law">Документы</span></div>
                    </div>
                </div>
                <aside class="article-sidebar">
                    <div class="sidebar-card">
                        <h3>Другие новости</h3>
                        <div class="sidebar-news-item"><a href="news-requirements.php">
                                <div class="sidebar-news-date">
                                    <div class="day">1</div>
                                    <div class="month">Ноя</div>
                                </div>
                                <h4>Сбор требований от заказчиков</h4>
                            </a></div>
                        <div class="sidebar-news-item"><a href="news-plan-2026.php">
                                <div class="sidebar-news-date">
                                    <div class="day">15</div>
                                    <div class="month">Ноя</div>
                                </div>
                                <h4>План закупок на 2026</h4>
                            </a></div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3>Кимовский район</h3>
                    <p>Проектирование и разработка веб-сайта подготовки тендеров.</p>
                </div>
                <div class="footer-col">
                    <h4>Навигация</h4>
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="about.php">О проекте</a></li>
                        <li><a href="services.php">Услуги</a></li>
                        <li><a href="news.php">Новости</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Контакты</h4>
                    <ul>
                        <li><a>г. Кимовск</a></li>
                        <li><a>+7 (48735) 5-12-34</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script>function toggleMenu() { document.getElementById('nav').classList.toggle('open'); document.querySelector('.burger').classList.toggle('open'); } document.addEventListener('click', function (e) { const n = document.getElementById('nav'), b = document.querySelector('.burger'); if (n.classList.contains('open') && !n.contains(e.target) && !b.contains(e.target)) { n.classList.remove('open'); b.classList.remove('open'); } });</script>
</body>

</html>