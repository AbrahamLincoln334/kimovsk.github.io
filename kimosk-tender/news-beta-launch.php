<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запуск бета-версии системы | Администрация Кимовский район</title>
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
                <h2>Запуск <span>бета-версии</span> системы подготовки тендеров</h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <a href="news.php" class="article-back">← Назад к новостям</a>
            <div class="article-layout">
                <div class="article-main">
                    <div class="article-content">
                        <h1>Запуск бета-версии системы подготовки тендеров</h1>
                        <div class="article-meta">
                            <span>15 апреля 2026</span>
                            <span>Отдел разработки</span>
                            <span>1 247 просмотров</span>
                        </div>
                        <div class="article-body">
                            <p>Команда разработки с гордостью объявляет о запуске бета-версии веб-сайта подготовки
                                тендеров для администрации муниципального образования Кимовский район Тульской области.
                                Это знаковое событие в рамках проекта по цифровизации закупочной деятельности.</p>

                            <h2>Что включено в бета-версию</h2>
                            <p>Бета-версия системы содержит следующие ключевые модули:</p>
                            <ul>
                                <li>Модуль формирования тендерной документации с использованием утверждённых шаблонов
                                </li>
                                <li>Система автоматической проверки участников по реестрам РНП и ФНС</li>
                                <li>Интеграция с Единой информационной системой (ЕИС) в сфере закупок</li>
                                <li>Личный кабинет заказчика с управлением планами-графиками</li>
                                <li>Дашборд аналитики с визуализацией данных по закупкам</li>
                            </ul>

                            <blockquote>«Запуск бета-версии — это важный шаг к полной автоматизации тендерных процессов.
                                Мы получили рабочий инструмент, который уже на первом этапе значительно сократит время
                                подготовки документации.» — Руководитель проекта</blockquote>

                            <h2>Этап бета-тестирования</h2>
                            <p>В бета-тестировании принимают участие 12 сотрудников контрактной службы администрации.
                                Тестирование продлится до 30 мая 2026 года. В этот период будут собраны отзывы, выявлены
                                ошибки и доработан пользовательский интерфейс.</p>

                            <p>По итогам бета-тестирования планируется полноценный запуск системы для всех сотрудников
                                администрации, а также открытие доступа для потенциальных поставщиков.</p>

                            <h2>Следующие шаги</h2>
                            <p>В рамках следующего этапа разработки запланированы:</p>
                            <ul>
                                <li>Подключение модуля электронной подписи (КриптоПро CSP)</li>
                                <li>Интеграция с порталом Госуслуг (ЕСИА)</li>
                                <li>Мобильная версия для сотрудников</li>
                                <li>Расширенная система уведомлений и оповещений</li>
                            </ul>
                        </div>
                        <div class="article-tags">
                            <span class="news-tag tag-dev">Разработка</span>
                            <span class="news-tag tag-update">Обновление</span>
                        </div>
                    </div>
                </div>

                <aside class="article-sidebar">
                    <div class="sidebar-card">
                        <h3>Другие новости</h3>
                        <div class="sidebar-news-item"><a href="news-law-44.php">
                                <div class="sidebar-news-date">
                                    <div class="day">8</div>
                                    <div class="month">Апр</div>
                                </div>
                                <h4>Изменения в 44-ФЗ: что нужно знать</h4>
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
                        <div class="sidebar-news-item"><a href="news-security.php">
                                <div class="sidebar-news-date">
                                    <div class="day">18</div>
                                    <div class="month">Мар</div>
                                </div>
                                <h4>Аудит информационной безопасности</h4>
                            </a></div>
                        <div class="sidebar-news-item"><a href="news-analytics.php">
                                <div class="sidebar-news-date">
                                    <div class="day">10</div>
                                    <div class="month">Мар</div>
                                </div>
                                <h4>Новый модуль аналитики</h4>
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