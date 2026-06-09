<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подготовка тендеров — Администрация Кимовский район</title>
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
                <a href="index.php" class="active">Главная</a>
                <a href="about.php">О проекте</a>
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
            <div class="hero-badge">Муниципальный проект</div>
            <h2>Проектирование и разработка сайта <span>подготовки тендеров</span> администрации</h2>
            <p>Создание единой цифровой платформы для автоматизации процессов подготовки, проведения и сопровождения конкурентных закупок администрации муниципального образования Кимовский район Тульской области.</p>
            <div class="hero-buttons">
                <a class="btn btn-primary" href="services.php">Наши услуги →</a>
                <a class="btn btn-outline" href="about.php">Узнать больше</a>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="stats">
        <div class="stat-card">
            <div class="stat-number">150+</div>
            <div class="stat-label">Тендеров подготовлено</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">44-ФЗ</div>
            <div class="stat-label">Полное соответствие</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">98%</div>
            <div class="stat-label">Успешных процедур</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">24/7</div>
            <div class="stat-label">Поддержка системы</div>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Почему выбирают нас</h2>
            <p>Профессиональный подход к каждому этапу подготовки тендерной документации</p>
            <div class="accent-line"></div>
        </div>
        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon"></div>
                <h3>Соответствие законодательству</h3>
                <p>Все процессы соответствуют 44-ФЗ, 223-ФЗ и нормативным актам муниципального образования</p>
            </div>
            <div class="advantage-card">
                <div class="advantage-icon"></div>
                <h3>Безопасность данных</h3>
                <p>Шифрование данных, электронная подпись и защищённые каналы передачи информации</p>
            </div>
            <div class="advantage-card">
                <div class="advantage-icon"></div>
                <h3>Автоматизация процессов</h3>
                <p>Автоматическое формирование документации, проверка участников и контроль сроков</p>
            </div>
            <div class="advantage-card">
                <div class="advantage-icon"></div>
                <h3>Аналитика и отчётность</h3>
                <p>Детальная статистика по закупкам, аналитические дашборды и выгрузка отчётов</p>
            </div>
            <div class="advantage-card">
                <div class="advantage-icon"></div>
                <h3>Прозрачность процедур</h3>
                <p>Открытость всех этапов закупочных процедур для участников и контролирующих органов</p>
            </div>
            <div class="advantage-card">
                <div class="advantage-icon"></div>
                <h3>Обучение персонала</h3>
                <p>Проведение тренингов и обучение сотрудников администрации работе с системой</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-gray">
    <div class="container">
        <div class="section-title">
            <h2>Этапы разработки</h2>
            <p>Пошаговый процесс создания сайта подготовки тендеров</p>
            <div class="accent-line"></div>
        </div>
        <div class="steps">
            <div class="step-card">
                <h3>Анализ требований</h3>
                <p>Изучение нормативной базы, анализ текущих процессов и формирование технического задания</p>
            </div>
            <div class="step-card">
                <h3>Проектирование</h3>
                <p>Разработка архитектуры системы, проектирование интерфейсов и базы данных</p>
            </div>
            <div class="step-card">
                <h3>Разработка</h3>
                <p>Программирование модулей, интеграция с ЕИС и системами электронной подписи</p>
            </div>
            <div class="step-card">
                <h3>Запуск и поддержка</h3>
                <p>Тестирование, развёртывание, обучение пользователей и техническое сопровождение</p>
            </div>
        </div>
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