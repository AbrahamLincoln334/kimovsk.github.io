<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тренинг для сотрудников | Администрация Кимовский район</title>
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
                <h2>Прошёл <span>тренинг</span> для сотрудников</h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <a href="news.php" class="article-back">← Назад к новостям</a>
            <div class="article-layout">
                <div class="article-main">
                    <div class="article-content">
                        <h1>Прошёл тренинг для сотрудников администрации</h1>
                        <div class="article-meta"><span>1 апреля 2026</span><span>Отдел обучения</span><span>
                                856 просмотров</span></div>
                        <div class="article-body">
                            <p>1 апреля 2026 года в конференц-зале администрации Кимовского района состоялся обучающий
                                семинар для сотрудников контрактной службы. Мероприятие было посвящено работе с новым
                                модулем подготовки тендерной документации.</p>

                            <h2>Программа тренинга</h2>
                            <p>В рамках обучения сотрудники освоили следующие практические навыки:</p>
                            <ul>
                                <li>Создание и редактирование извещений о закупках в электронной форме</li>
                                <li>Формирование технического задания с использованием шаблонов системы</li>
                                <li>Проверка участников закупок через автоматизированные реестры</li>
                                <li>Работа с планом-графиком закупок муниципального образования</li>
                                <li>Публикация документов в ЕИС через интеграционный модуль</li>
                            </ul>

                            <blockquote>«Обучение прошло продуктивно. Сотрудники получили практические навыки работы с
                                системой и задали множество вопросов, которые помогли выявить дополнительные точки для
                                улучшения интерфейса.» — Организатор тренинга</blockquote>

                            <h2>Результаты</h2>
                            <p>В мероприятии приняли участие 25 сотрудников из 8 отделов администрации. По итогам
                                тренинга все участники сдали практический тест на уровне «удовлетворительно» и выше.
                                Следующий этап обучения запланирован на июнь 2026 года.</p>
                        </div>
                        <div class="article-tags"><span class="news-tag tag-event">Мероприятие</span></div>
                    </div>
                </div>
                <aside class="article-sidebar">
                    <div class="sidebar-card">
                        <h3>Другие новости</h3>
                        <div class="sidebar-news-item"><a href="news-beta-launch.php">
                                <div class="sidebar-news-date">
                                    <div class="day">15</div>
                                    <div class="month">Апр</div>
                                </div>
                                <h4>Запуск бета-версии системы</h4>
                            </a></div>
                        <div class="sidebar-news-item"><a href="news-law-44.php">
                                <div class="sidebar-news-date">
                                    <div class="day">8</div>
                                    <div class="month">Апр</div>
                                </div>
                                <h4>Изменения в 44-ФЗ</h4>
                            </a></div>
                        <div class="sidebar-news-item"><a href="news-eis.php">
                                <div class="sidebar-news-date">
                                    <div class="day">25</div>
                                    <div class="month">Мар</div>
                                </div>
                                <h4>Завершена интеграция с ЕИС</h4>
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