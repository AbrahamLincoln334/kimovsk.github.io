<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Модуль аналитики | Администрация Кимовский район</title>
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
                <h2>Новый <span>модуль аналитики</span></h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <a href="news.php" class="article-back">← Назад к новостям</a>
            <div class="article-layout">
                <div class="article-main">
                    <div class="article-content">
                        <h1>Новый модуль аналитики в системе подготовки тендеров</h1>
                        <div class="article-meta"><span>10 марта 2026</span><span>Отдел разработки</span><span>
                                1 089 просмотров</span></div>
                        <div class="article-body">
                            <p>В систему подготовки тендеров добавлен полнофункциональный модуль аналитики с
                                интерактивными дашбордами. Теперь руководство администрации может в реальном времени
                                отслеживать все показатели закупочной деятельности.</p>

                            <h2>Функциональность дашборда</h2>
                            <ul>
                                <li>Общая статистика по закупкам: количество, сумма, средний размер экономии</li>
                                <li>Визуализация данных в виде графиков и диаграмм</li>
                                <li>Фильтрация по отделам, типам закупок и периодам</li>
                                <li>Автоматическое формирование отчётов в форматах PDF и Excel</li>
                                <li>Прогнозирование расходов на основе исторических данных</li>
                            </ul>

                            <blockquote>Модуль аналитики позволяет принимать обоснованные управленческие решения на
                                основе данных. Мы видим полную картину закупочной деятельности муниципального
                                образования.</blockquote>

                            <p>Дашборд доступен всем сотрудникам администрации с ролью «руководитель» в личном кабинете.
                            </p>
                        </div>
                        <div class="article-tags"><span class="news-tag tag-dev">Разработка</span></div>
                    </div>
                </div>
                <aside class="article-sidebar">
                    <div class="sidebar-card">
                        <h3>Другие новости</h3>
                        <div class="sidebar-news-item"><a href="news-eis.php">
                                <div class="sidebar-news-date">
                                    <div class="day">25</div>
                                    <div class="month">Мар</div>
                                </div>
                                <h4>Завершена интеграция с ЕИС</h4>
                            </a></div>
                        <div class="sidebar-news-item"><a href="news-security.php">
                                <div class="sidebar-news-date">
                                    <div class="day">18</div>
                                    <div class="month">Мар</div>
                                </div>
                                <h4>Аудит информационной безопасности</h4>
                            </a></div>
                        <div class="sidebar-news-item"><a href="news-training.php">
                                <div class="sidebar-news-date">
                                    <div class="day">1</div>
                                    <div class="month">Апр</div>
                                </div>
                                <h4>Прошёл тренинг для сотрудников</h4>
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
                    <h4>Услуги</h4>
                    <ul>
                        <li><a href="services.php">Проектирование</a></li>
                        <li><a href="services.php">Веб-разработка</a></li>
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