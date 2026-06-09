<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги | Администрация Кимовский район</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header><div class="container"><div class="header-inner">
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
        <a href="services.php" class="active">Услуги</a>
        <a href="news.php">Новости</a>
        <?php render_auth_nav(); ?>
    </nav>
</div></div></header>

<section class="hero compact">
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">Услуги - Страница 1</div><h2>Что мы <span>предлагаем</span></h2><p>Полный спектр услуг по проектированию, разработке и сопровождению</p></div></div></section>

<section class="section"><div class="container">
    <div class="services-grid">
        <div class="service-card">
            <div class="card-screenshot">
    <img src="images/serv1.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div><h3>Проектирование системы</h3>
            <p>Разработка архитектуры и технического проекта информационной системы.</p><ul><li>Анализ бизнес-процессов</li><li>Техническое задание</li><li>Прототипирование интерфейсов</li></ul>
            <div class="service-card-footer"><a href="service-design.php" class="service-btn details">Подробнее</a><?php if (is_logged_in()): ?><form method="POST" action="order_handler.php" style="display:inline;">
                <input type="hidden" name="service_name" value="Проектирование системы"><input type="hidden" name="message" value="Заказ в один клик">
                <button type="submit" class="service-btn order">Заказать</button>
            </form><?php else: ?><a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a><?php endif; ?></div>
            </div>
        <div class="service-card">
            <div class="card-screenshot">
    <img src="images/serv2.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div><h3>Веб-разработка</h3>
            <p>Создание полнофункционального веб-приложения для подготовки тендеров.</p><ul><li>Frontend и Backend</li><li>Адаптивный дизайн</li><li>Интеграция с ЕИС</li></ul>
            <div class="service-card-footer"><a href="service-webdev.php" class="service-btn details">Подробнее</a><?php if (is_logged_in()): ?><form method="POST" action="order_handler.php" style="display:inline;">
                <input type="hidden" name="service_name" value="Веб-разработка"><input type="hidden" name="message" value="Заказ в один клик"><button type="submit" class="service-btn order">Заказать</button>
            </form><?php else: ?><a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a><?php endif; ?></div>
            </div>
        <div class="service-card">
           <div class="card-screenshot">
    <img src="images/serv3.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div><h3>Подготовка документации</h3>
            <p>Формирование тендерной документации в соответствии с требованиями 44-ФЗ.</p><ul><li>Извещения о закупках</li><li>Технические задания</li><li>Проектные контракты</li></ul>
            <div class="service-card-footer"><a href="service-docs.php" class="service-btn details">Подробнее</a><?php if (is_logged_in()): ?><form method="POST" action="order_handler.php" style="display:inline;">
                <input type="hidden" name="service_name" value="Подготовка документации"><input type="hidden" name="message" value="Заказ в один клик"><button type="submit" class="service-btn order">Заказать</button>
            </form><?php else: ?><a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a><?php endif; ?></div>
            </div>
        <div class="service-card">
            <div class="card-screenshot">
    <img src="images/serv4.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div><h3>Интеграция с ЕИС</h3>
            <p>Подключение к Единой информационной системе в сфере закупок.</p><ul><li>API-интеграция</li><li>Автоматическая публикация</li><li>Синхронизация данных</li></ul>
            <div class="service-card-footer"><a href="service-eis.php" class="service-btn details">Подробнее</a><?php if (is_logged_in()): ?><form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Интеграция с ЕИС"><input type="hidden" name="message" value="Заказ в один клик"><button type="submit" class="service-btn order">Заказать</button>
            </form><?php else: ?><a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a><?php endif; ?></div>
            </div>
        <div class="service-card">
            <div class="card-screenshot">
    <img src="images/serv5.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div><h3>Информационная безопасность</h3>
            <p>Обеспечение защиты данных и соответствие требованиям регуляторов.</p><ul><li>SSL/TLS шифрование</li><li>Защита от DDoS</li><li>Аудит безопасности</li></ul>
            <div class="service-card-footer"><a href="service-security.php" class="service-btn details">Подробнее</a><?php if (is_logged_in()): ?><form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Информационная безопасность"><input type="hidden" name="message" value="Заказ в один клик"><button type="submit" class="service-btn order">Заказать</button>
            </form><?php else: ?><a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a><?php endif; ?></div>
            </div>
        <div class="service-card"><div class="card-screenshot">
    <img src="images/serv6.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div><h3>Обучение и поддержка</h3>
            <p>Обучение сотрудников и техническое сопровождение системы.</p><ul><li>Тренинги для персонала</li><li>Руководства пользователя</li><li>Техподдержка 24/7</li></ul>
            <div class="service-card-footer"><a href="service-training.php" class="service-btn details">Подробнее</a><?php if (is_logged_in()): ?><form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Обучение и поддержка"><input type="hidden" name="message" value="Заказ в один клик"><button type="submit" class="service-btn order">Заказать</button>
            </form><?php else: ?><a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a><?php endif; ?></div>
            </div>
    </div>

    <div class="pagination" style="margin-top: 40px;">
        <a href="services.php" class="active">1</a>
        <a href="services2.php">2</a>
        <a href="services3.php">3</a>
    </div>
</div></section>

<footer><div class="container"><div class="footer-grid">
    <div class="footer-about"><h3>Кимовский район</h3><p>Проектирование и разработка веб-сайта подготовки тендеров.</p></div>
    <div class="footer-col"><h4>Навигация</h4><ul><li><a href="index.php">Главная</a></li><li><a href="about.php">О проекте</a></li><li><a href="services.php">Услуги</a></li><li><a href="news.php">Новости</a></li></ul></div>
    <div class="footer-col"><h4>Контакты</h4><ul><li><a>Адрес: г. Кимовск, Тульская обл.</a></li><li><a>Тел: +7 (48735) 5-12-34</a></li></ul></div>
</div></div></footer>

<script>
function toggleMenu(){document.getElementById('nav').classList.toggle('open');document.querySelector('.burger').classList.toggle('open');}
document.addEventListener('click',function(e){const n=document.getElementById('nav'),b=document.querySelector('.burger');if(n.classList.contains('open')&&!n.contains(e.target)&&!b.contains(e.target)){n.classList.remove('open');b.classList.remove('open');}});
</script>
</body>
</html>