<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шаблоны документации | Администрация Кимовский район</title>
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
                <h2>Обновлены <span>шаблоны документации</span></h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <a href="news2.php" class="article-back">← Назад к новостям</a>
            <div class="article-layout">
                <div class="article-main">
                    <div class="article-content">
                        <h1>Обновлены шаблоны тендерной документации</h1>
                        <div class="article-meta"><span>28 февраля 2026</span><span>Юридический
                                отдел</span><span>1 345 просмотров</span></div>
                        <div class="article-body">
                            <p>В систему добавлены обновлённые макеты технических заданий и проектов контрактов,
                                соответствующие последним поправкам к 44-ФЗ и нормативным актам Кимовского района.</p>

                            <h2>Что обновлено</h2>
                            <ul>
                                <li>Шаблоны технических заданий для 15 категорий закупок</li>
                                <li>Формы проектов муниципальных контрактов</li>
                                <li>Документация для электронных аукционов и конкурсов</li>
                                <li>Формы обоснования начальной максимальной цены контракта</li>
                            </ul>

                            <p>Все шаблоны доступны в разделе «Документация» личного кабинета. Пользователи могут
                                создавать документы на основе шаблонов, заполняя только специфические параметры закупки.
                            </p>
                        </div>
                        <div class="article-tags"><span class="news-tag tag-dev">Разработка</span></div>
                    </div>
                </div>
                <aside class="article-sidebar">
                    <div class="sidebar-card">
                        <h3>Другие новости</h3>
                        <div class="sidebar-news-item"><a href="news-gosuslugi.php">
                                <div class="sidebar-news-date">
                                    <div class="day">15</div>
                                    <div class="month">Фев</div>
                                </div>
                                <h4>Интеграция с Госуслугами</h4>
                            </a></div>
                        <div class="sidebar-news-item"><a href="news-webinar.php">
                                <div class="sidebar-news-date">
                                    <div class="day">1</div>
                                    <div class="month">Мар</div>
                                </div>
                                <h4>Вебинар для поставщиков</h4>
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