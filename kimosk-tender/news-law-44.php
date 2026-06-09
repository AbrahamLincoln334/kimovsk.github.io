<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменения в 44-ФЗ | Администрация Кимовский район</title>
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
                <h2>Изменения в <span>44-ФЗ</span>: что нужно знать</h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <a href="news.php" class="article-back">← Назад к новостям</a>
            <div class="article-layout">
                <div class="article-main">
                    <div class="article-content">
                        <h1>Изменения в 44-ФЗ: что нужно знать</h1>
                        <div class="article-meta"><span>8 апреля 2026</span><span>Юридический
                                отдел</span><span>2 134 просмотров</span></div>
                        <div class="article-body">
                            <p>8 апреля 2026 года вступили в силу изменения в Федеральный закон от 05.04.2013 № 44-ФЗ «О
                                контрактной системе в сфере закупок товаров, работ, услуг для обеспечения
                                государственных и муниципальных нужд».</p>

                            <h2>Основные изменения</h2>
                            <p>Нововведения затрагивают порядок проведения электронных процедур закупок, в частности:
                            </p>
                            <ul>
                                <li>Сокращены сроки подачи заявок для электронных аукционов до 5 рабочих дней</li>
                                <li>Введена обязательная электронная документация для всех видов конкурентных закупок
                                </li>
                                <li>Расширены основания для проведения закупки у единственного поставщика</li>
                                <li>Ужесточены требования к описанию объекта закупки в техническом задании</li>
                            </ul>

                            <blockquote>Наша система уже адаптирована под все новые требования 44-ФЗ. Шаблоны
                                технической документации и извещений обновлены автоматически.</blockquote>

                            <h2>Адаптация системы</h2>
                            <p>Команда разработчиков оперативно обновила все модули системы подготовки тендеров:</p>
                            <ul>
                                <li>Обновлены шаблоны извещений и документации</li>
                                <li>Модифицированы алгоритмы проверки участников</li>
                                <li>Обновлён модуль обоснования начальной максимальной цены контракта (НМЦК)</li>
                            </ul>
                            <p>Сотрудникам администрации не требуется выполнять дополнительные настройки — все изменения
                                применены на уровне платформы.</p>
                        </div>
                        <div class="article-tags"><span class="news-tag tag-law">Законодательство</span></div>
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
                        <div class="sidebar-news-item"><a href="news-training.php">
                                <div class="sidebar-news-date">
                                    <div class="day">1</div>
                                    <div class="month">Апр</div>
                                </div>
                                <h4>Прошёл тренинг для сотрудников</h4>
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
            <div class="footer-bottom">© 2026 Администрация Кимовский район. Все права защищены.</div>
        </div>
    </footer>
    <script>function toggleMenu() { document.getElementById('nav').classList.toggle('open'); document.querySelector('.burger').classList.toggle('open'); } document.addEventListener('click', function (e) { const n = document.getElementById('nav'), b = document.querySelector('.burger'); if (n.classList.contains('open') && !n.contains(e.target) && !b.contains(e.target)) { n.classList.remove('open'); b.classList.remove('open'); } });</script>
</body>

</html>