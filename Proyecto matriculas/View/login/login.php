<div class="container">
    <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="assets/imagenes/avatar_2x.png" />
                        <p id="profile-name" class="profile-name-card"></p>
            <form role="form" action="?c=login&a=logear" method="post" class="signin">
            <div class="form-group">
                <input type="text" class="form-control" id="email" placeholder="Nombre de Usuario" name="user" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" id="pwd" name="pasw">
            </div>
            <div id="remember" class="checkbox">
                <label>
                        <input type="checkbox" value="remember-me"> Recordarme
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form>
            <a href="ContactoAdmin.php" class="forgot-password">
                Olvido la contraseña?
            </a>
    </div>
</div>
