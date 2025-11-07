<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="reset.css">
<title>Jogo da Memória</title>

   <style>
   body {
  background: url('capa.jpg') no-repeat center center / cover;
  background-attachment: fixed;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Segoe UI', sans-serif;
  color: #fff;
  margin: 0;
}

.login-card {
  background: rgba(40, 40, 40, 0.85); /* tom mais suave e elegante */
  padding: 40px;
  border-radius: 15px;
  width: 90%;
  max-width: 400px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.7);
  text-align: center;
  backdrop-filter: blur(6px);
}

.login-card h2 {
  margin-bottom: 25px;
  font-weight: 600;
  font-size: 1.6rem;
}

.form-row {
  margin-bottom: 20px;
  text-align: left;
}

.form-label {
  display: block;
  margin-bottom: 6px;
  font-weight: 500;
  color: #ddd;
}

.form-control {
  width: 100%;
  padding: 10px 12px;
  border-radius: 8px;
  background-color: rgba(255, 255, 255, 0.12);
  border: 1px solid transparent;
  color: #fff;
  font-size: 1rem;
  transition: all 0.3s;
}

.form-control:focus {
  background-color: rgba(255, 255, 255, 0.18);
  border-color: #007bff;
  outline: none;
}

.btn-login {
  background-color: #007bff;
  border: none;
  width: 100%;
  padding: 12px;
  border-radius: 8px;
  color: #fff;
  font-weight: 600;
  font-size: 1rem;
  margin-top: 10px;
  cursor: pointer;
  transition: background 0.3s, transform 0.1s;
}

.btn-login:hover {
  background-color: #0056b3;
}

.btn-login:active {
  transform: scale(0.98);
}

.signup-link {
  margin-top: 20px;
  display: block;
  color: #bbb;
  font-size: 0.95rem;
  transition: color 0.3s;
}

.signup-link:hover {
  color: #fff;
  text-decoration: underline;
}

/* link do nav (se usar menu) */
nav a:hover {
  border-bottom: 2px solid #0d6efd;
}

/* melhora visual em telas menores */
@media (max-width: 480px) {
  .login-card {
    padding: 30px 20px;
  }

  .login-card h2 {
    font-size: 1.4rem;
  }
}

  </style>
</head>
<body>

<div class="login-card">
    <h2>Login</h2>
    <form action= "proclogin.php" method="POST">
      <div class="form-row">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@exemplo.com" required>
        <input type="hidden" class="form-control" id="id" name="id">
      </div>
      <div class="form-row">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" required>
      </div>
      <button type="submit" class="btn-login">Entrar</button>
    </form>

    <a href="cadastro.php" class="signup-link">Não tem uma conta? Cadastre-se</a>
  </div>


</body>
</html>