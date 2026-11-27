<?php if (!empty($alerts)): ?>
    <div class="alert-box">
        <?php foreach ($alerts as $alert): ?>
        <div class="alert <?= $alert['type']; ?>">
            <i class='bxf <?= $alert['type'] === 'success' ? 'bx-check-circle' : 'bxf bx-cross-circle'; ?>'></i>
            <span><?= $alert['message']; ?></span>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <div class="auth-modal <?= $active_form === 'register' ? 'show slide' : ($active_form === 'login' ?  'show' : ''); ?>">
        <button type="button" class="close-btn-modal"><i class="bxf bx-x"></i></button>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="auth_process.php" method="POST">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                        <i class="bxf bx-envelope-alt"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <i class="bxf bx-lock"></i>
                </div>
                <button type="submit" name="login_btn" class="btn">Se connecter</button>
                <p>Vous n'avez pas de compte ? <a href="#" class="register-link">Créer un compte</a></p>
            </form>
        </div>

        <div class="form-box register">
            <h2>S'enregistrer</h2>
            <form action="auth_process.php" method="POST">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Nom" required>
                        <i class="bxf bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                        <i class="bxf bx-envelope-alt"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <i class="bxf bx-lock"></i>
                </div>
                <button type="submit" name="register_btn" class="btn">S'enregistrer</button>
                <p>Vous avez déjà compte ? <a href="#" class="login-link">Se connecter</a></p>
            </form>
        </div>
    </div>