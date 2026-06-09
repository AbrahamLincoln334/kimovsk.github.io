<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вебинар для поставщиков | Администрация Кимовский район</title>
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
                <h2>Вебинар для <span>поставщиков</span></h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <a href="news2.php" class="article-back">← Назад к новостям</a>
            <div class="article-layout">
                <div class="article-main">
                    <div class="article-content">
                        <h1>Вебинар для потенциальных поставщиков</h1>
                        <div class="article-meta"><span>1 марта 2026</span><span>Отдел закупок</span><span>1
                                456 просмотров</span></div>
                        <div class="article-body">
                            <p>Проведён онлайн-семинар о правилах участия в муниципальных закупках Кимовского района. В
                                мероприятии приняли участие представители более 40 организаций.</p>

                            <h2>Темы вебинара</h2>
                            <ul>
                                <li>Порядок подачи заявок через систему подготовки тендеров</li>
                                <li>Требования к участникам муниципальных закупок</li>
                                <li>Электронное обеспечение заявки и контракта</li>
                                <li>Порядок обжалования действий заказчика</li>
                                <li>Ответы на вопросы участников</li>
                            </ul>

                            <p>Следующий вебинар запланирован на
                                май 2026 года.</p>
                        </div>
                        <div class="article-tags"><span class="news-tag tag-event">Мероприятие</span></div>
                    </div>
                </div>
                <aside class="article-sidebar">
                    <div class="sidebar-card">
                        <h3>Другие новости</h3>
                        <div class="sidebar-news-item"><a href="news-templates.php">
                                <div class="sidebar-news-date">
                                    <div class="day">28</div>
                                    <div class="month">Фев</div>
                                </div>
                                <h4>Обновлены шаблоны документации</h4>
                            </a></div>
                        <div class="sidebar-news-item"><a href="news-gosuslugi.php">
                                <div class="sidebar-news-date">
                                    <div class="day">15</div>
                                    <div class="month">Фев</div>
                                </div>
                                <h4>Интеграция с Госуслугами</h4>
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