<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости — Стр. 1 | Администрация Кимовский район</title>
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
                <h2>Последние <span>новости</span> проекта</h2>
                <p>Актуальная информация о ходе разработки и изменениях в системе</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Главные новости</h2>
                <div class="accent-line"></div>
            </div>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">15 апреля 2026</div>
                        <h3>Запуск бета-версии системы подготовки тендеров</h3>
                        <p>Команда разработки объявляет о запуске бета-версии веб-сайта подготовки тендеров для
                            администрации Кимовского района. В тестировании участвуют 12 сотрудников.</p>
                        <span class="news-tag tag-dev">Разработка</span>
                        <span class="news-tag tag-update">Обновление</span>
                        <div class="news-card-footer"><a href="news-beta-launch.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">8 апреля 2026</div>
                        <h3>Изменения в 44-ФЗ: что нужно знать</h3>
                        <p>Вступили в силу изменения в Федеральный закон № 44-ФЗ. Система уже адаптирована под новые
                            требования.</p>
                        <span class="news-tag tag-law">Законодательство</span>
                        <div class="news-card-footer"><a href="news-law-44.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">1 апреля 2026</div>
                        <h3>Прошёл тренинг для сотрудников</h3>
                        <p>Обучено 25 сотрудников работе с новым модулем подготовки тендерной документации.</p>
                        <span class="news-tag tag-event">Мероприятие</span>
                        <div class="news-card-footer"><a href="news-training.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
            </div>

            <div class="section-title" style="margin-top: 60px;">
                <h2>Все новости</h2>
                <div class="accent-line"></div>
            </div>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">25 марта 2026</div>
                        <h3>Завершена интеграция с ЕИС</h3>
                        <p>Настроена автоматическая публикация извещений через API.</p><span
                            class="news-tag tag-dev">Разработка</span>
                        <div class="news-card-footer"><a href="news-eis.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">18 марта 2026</div>
                        <h3>Аудит информационной безопасности</h3>
                        <p>Проведён независимый аудит. Все уязвимости устранены.</p><span
                            class="news-tag tag-update">Безопасность</span>
                        <div class="news-card-footer"><a href="news-security.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">10 марта 2026</div>
                        <h3>Новый модуль аналитики</h3>
                        <p>Добавлен дашборд с визуализацией данных по закупкам.</p><span
                            class="news-tag tag-dev">Разработка</span>
                        <div class="news-card-footer"><a href="news-analytics.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <a class="active" href="news.php">1</a>
                <a href="news2.php">2</a>
                <a href="news3.php">3</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3>Кимовский район</h3>
                    <p>Проектирование и разработка веб-сайта подготовки тендеров администрации муниципального
                        образования Кимовский район.</p>
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
                        <li><a href="services.php">Интеграция с ЕИС</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Контакты</h4>
                    <ul>
                        <li><a>г. Кимовск</a></li>
                        <li><a>+7 (48735) 5-12-34</a></li>
                        <li><a>tender@kimrayon.ru</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleMenu() { document.getElementById('nav').classList.toggle('open'); document.querySelector('.burger').classList.toggle('open'); }
        document.addEventListener('click', function (e) { const n = document.getElementById('nav'), b = document.querySelector('.burger'); if (n.classList.contains('open') && !n.contains(e.target) && !b.contains(e.target)) { n.classList.remove('open'); b.classList.remove('open'); } });
    </script>
</body>

</html>