<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О проекте — Подготовка тендеров | Администрация Кимовский район</title>
    <link rel="stylesheet" href="style.css" />
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
            <div class="burger" onclick="toggleMenu()">
                <span></span><span></span><span></span>
            </div>
            <nav id="nav">
                <a href="index.php">Главная</a>
                <a href="about.php" class="active">О проекте</a>
                <a href="services.php">Услуги</a>
                <a href="news.php">Новости</a>

                <?php render_auth_nav(); ?>
            </nav>
        </div>
    </div>
</header>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">О проекте</div>
            <h2>Проектирование и разработка <span>веб-сайта подготовки тендеров</span></h2>
            <p>Информационная система для администрации муниципального образования Кимовский район Тульской области</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <div class="big-icon"></div>
                <h3>Кимовский район</h3>
                <p>Администрация муниципального образования Кимовский район — орган местного самоуправления, обеспечивающий решение вопросов местного значения в соответствии с действующим законодательством Российской Федерации.</p>
                <br>
                <p>Проект направлен на цифровизацию закупочной деятельности и повышение прозрачности расходования бюджетных средств.</p>
            </div>
            <div class="about-content">
                <h2>О нашем проекте</h2>
                <p>Данный проект представляет собой комплексное решение по проектированию и разработке специализированного веб-сайта для подготовки тендерной документации администрацией муниципального образования Кимовский район.</p>
                <p>Система обеспечивает полный цикл работы с закупками — от формирования потребности до заключения контракта.</p>
                <ul class="feature-list">
                    <li>
                        <div class="feature-text">
                            <h4>Формирование документации</h4>
                            <p>Автоматическое создание тендерной документации по шаблонам, утверждённым нормативными актами</p>
                        </div>
                    </li>
                    <li>
                        <div class="feature-text">
                            <h4>Проверка участников</h4>
                            <p>Автоматическая верификация поставщиков по данным РНП, ФНС и другим реестрам</p>
                        </div>
                    </li>
                    <li>
                        <div class="feature-text">
                            <h4>Мониторинг рынка</h4>
                            <p>Анализ цен и мониторинг рынка для обоснования начальной максимальной цены контракта</p>
                        </div>
                    </li>
                    <li>
                        <div class="feature-text">
                            <h4>Календарный план</h4>
                            <p>Формирование и контроль плана-графика закупок муниципального образования</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-gray">
    <div class="container">
        <div class="section-title">
            <h2>Цели и задачи проекта</h2>
            <p>Основные направления деятельности по созданию системы</p>
            <div class="accent-line"></div>
        </div>
        <div class="services-grid">
            <div class="service-card">
                
                <h3>Цифровизация закупок</h3>
                <p>Перевод процессов подготовки тендерной документации в электронный формат для повышения эффективности и скорости работы.</p>
            </div>
            <div class="service-card">
                
                <h3>Повышение конкуренции</h3>
                <p>Обеспечение равного доступа всех потенциальных поставщиков к информации о закупках муниципального образования.</p>
            </div>
            <div class="service-card">    
                <h3>Экономия бюджета</h3>
                <p>Снижение расходов на проведение закупочных процедур за счёт автоматизации и оптимизации процессов.</p>
            </div>
            <div class="service-card">    
                <h3>Соответствие 44-ФЗ</h3>
                <p>Обеспечение полного соответствия всех процессов требованиям Федерального закона о контрактной системе.</p>
            </div>
            <div class="service-card">
                <h3>Защита данных</h3>
                <p>Реализация современных механизмов защиты информации и персональных данных участников закупочных процедур.</p>
            </div>
            <div class="service-card">
                <h3>Аналитика и контроль</h3>
                <p>Создание инструментов аналитики для контроля эффективности расходования бюджетных средств.</p>
            </div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <h2>Интересен проект?</h2>
        <p>Ознакомьтесь с нашими услугами или свяжитесь для обсуждения деталей</p>
        <a class="btn btn-primary" href="services.php">Наши услуги →</a>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <h3>Кимовский район</h3>
                <p>Проектирование и разработка веб-сайта подготовки тендеров администрации муниципального образования Кимовский район Тульской области. Автоматизация закупочной деятельности в соответствии с 44-ФЗ.</p>
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
                    <li><a href="services.php">Поддержка</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Контакты</h4>
                <ul>
                    <li><a>г. Кимовск, Тульская обл.</a></li>
                    <li><a>+7 (48735) 5-12-34</a></li>
                    <li><a>tender@kimrayon.ru</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
function toggleMenu() {
    document.getElementById('nav').classList.toggle('open');
    document.querySelector('.burger').classList.toggle('open');
}
document.addEventListener('click', function(e) {
    var nav = document.getElementById('nav');
    var burger = document.querySelector('.burger');
    if (nav.classList.contains('open') && !nav.contains(e.target) && !burger.contains(e.target)) {
        nav.classList.remove('open');
        burger.classList.remove('open');
    }
});
</script>
</body>
</html>