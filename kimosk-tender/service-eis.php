<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интеграция с ЕИС | Администрация Кимовский район</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-inner"><a href="index.php" class="logo">
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
                <a href="services.php" class="active">Услуги</a>
                <a href="news.php">Новости</a>

                <?php render_auth_nav(); ?>
                    </nav>
            </div>
        </div>
    </header>
    <section class="hero compact">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">Услуга</div>
                <h2>Интеграция с <span>ЕИС </span></h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container"><a href="services.php" class="article-back">← Назад к услугам</a>
            <div class="article-layout">
                <div class="article-main">
    <div class="article-screenshot">
        <img src="images/serv4.jpg" alt="Скриншот">
        <span class="placeholder">Место для скриншота</span>
    </div>
    <div class="article-content">
                        <h1>Двусторонний обмен данными с ЕИС</h1>
                        <div class="article-meta"><span>Протокол: TLS 1.3 + ЭЦП</span><span>Настройка: 2
                                недели</span></div>
                        <div class="article-body">
                            <p>Настройка защищённого API-взаимодействия между локальной системой администрации и
                                федеральной ЕИС. Исключает двойной ввод данных и гарантирует синхронность информации.
                            </p>
                            <h2>Функции интеграции</h2>
                            <ul>
                                <li>Автоматическая публикация извещений и протоколов</li>
                                <li>Получение реестровых записей в реальном времени</li>
                                <li>Контроль дедлайнов с авто-уведомлениями</li>
                                <li>Журналирование всех транзакций для аудита</li>
                            </ul>
                            <p>Интеграция сертифицирована по требованиям Минцифры и полностью соответствует регламенту
                                работы ЕИС.</p>
                        </div>
                        <div class="article-tags"><span class="news-tag tag-update">Интеграция</span><span
                                class="news-tag tag-dev">API</span></div>
                    </div>
                </div>
                <aside class="article-sidebar">
                    <div class="sidebar-card">
                        <h3>Другие услуги</h3>
                        <div class="sidebar-news-item"><a href="service-docs.php">
                                <div class="sidebar-news-date">
                                    <div class="day"></div>
                                </div>
                                <h4>Подготовка документации</h4>
                            </a></div>
                        <div class="sidebar-news-item"><a href="service-security.php">
                                <div class="sidebar-news-date">
                                    <div class="day"></div>
                                </div>
                                <h4>Информационная безопасность</h4>
                            </a></div>
                    </div>
                    <div class="sidebar-card">
    <h3>Заказать услугу</h3>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="margin-top: 12px;">
            <input type="hidden" name="service_name" value="Интеграция с ЕИС">
            <input type="hidden" name="message" value="Заказ со страницы услуги">
            <button type="submit" class="btn btn-secondary w-100" style="padding: 10px;">Заказать услугу</button>
        </form>
        <p style="font-size: 0.75rem…; margin-top: 8px; text-align: center;">Заявка создастся мгновенно</p>
    <?php else: ?>
        <p style="font-size: 0.9rem; margin: 12px 0; color: var(--gray-600);">Для заказа необходимо авторизоваться</p>
        <a href="login.php" class="btn btn-outline w-100" style="padding: 10px; text-align: center; border-color: var(--gray-300); color: var(--gray-600); cursor: not-allowed;" onclick="event.preventDefault(); window.location.href='login.php';">Войти в систему</a>
    <?php endif; ?>
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