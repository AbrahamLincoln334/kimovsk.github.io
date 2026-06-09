<?php
function register_user($pdo, $surname, $name, $email, $phone, $password) {
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) return ['success' => false, 'error' => 'Этот email уже зарегистрирован'];
    
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (surname, name, email, phone, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$surname, $name, $email, $phone, $hash]);
    $user_id = $pdo->lastInsertId();

    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_email'] = $email;
    $_SESSION['user_name'] = $name;
    $_SESSION['user_surname'] = $surname;
    $_SESSION['user_role'] = 'user';
    return ['success' => true];
}

function login_user($pdo, $email, $password, $remember = false) {
    $stmt = $pdo->prepare("SELECT id, surname, name, email, password, role FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    if (!$user || !password_verify($password, $user['password'])) {
        return ['success' => false, 'error' => 'Неверный email или пароль'];
    }
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['user_surname'] = $user['surname'];
    $_SESSION['user_role'] = $user['role'];
    return ['success' => true, 'user' => $user];
}

function logout_user() {
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }
    session_destroy();
}

function render_auth_nav() {
    if (is_logged_in()) {
        $user = get_user();
        echo '<a href="profile.php" class="auth-link">Профиль: ' . htmlspecialchars($user['user_name']) . '</a>';
        if (is_admin()) echo '<a href="admin.php" class="auth-link" style="background:rgba(200,164,50,0.25);">Админ-панель</a>';
        echo '<a href="logout.php" class="auth-link">Выйти</a>';
    } else {
        echo '<a href="login.php" class="auth-link">Войти</a>';
    }
}
function is_admin() {
    return is_logged_in() && isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}
?>