<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аудит безопасности | Администрация Кимовский район</title>
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
                <h2>Аудит <span>информационной безопасности</span></h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <a href="news.php" class="article-back">← Назад к новостям</a>
            <div class="article-layout">
                <div class="article-main">
                    <div class="article-content">
                        <h1>Аудит информационной безопасности</h1>
                        <div class="article-meta"><span>18 марта 2026</span><span>Служба ИБ</span><span>967
                                просмотров</span></div>
                        <div class="article-body">
                            <p>Проведён независимый аудит информационной безопасности системы подготовки тендеров
                                администрации Кимовского района. Проверку осуществляла аккредитованная организация,
                                имеющая лицензию ФСТЭК России.</p>

                            <h2>Результаты аудита</h2>
                            <p>В ходе аудита были проведены:</p>
                            <ul>
                                <li>Сканирование на наличие уязвимостей (Vulnerability Assessment)</li>
                                <li>Тестирование на проникновение (Penetration Testing)</li>
                                <li>Анализ защищённости каналов передачи данных</li>
                                <li>Проверка соответствия требованиям 152-ФЗ о персональных данных</li>
                            </ul>

                            <blockquote>Все выявленные уязвимости (3 среднего уровня риска) были устранены в течение 5
                                рабочих дней. Система получила сертификат соответствия требованиям информационной
                                безопасности.</blockquote>

                            <h2>Меры защиты</h2>
                            <p>На текущий момент в системе реализованы:</p>
                            <ul>
                                <li>SSL/TLS 1.3 шифрование всех соединений</li>
                                <li>Защита от DDoS-атак на уровне инфраструктуры</li>
                                <li>Ежедневное резервное копирование базы данных</li>
                                <li>Двухфакторная аутентификация для сотрудников</li>
                                <li>Журналирование всех действий пользователей</li>
                            </ul>
                        </div>
                        <div class="article-tags"><span class="news-tag tag-update">Безопасность</span></div>
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
                        <div class="sidebar-news-item"><a href="news-analytics.php">
                                <div class="sidebar-news-date">
                                    <div class="day">10</div>
                                    <div class="month">Мар</div>
                                </div>
                                <h4>Новый модуль аналитики</h4>
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