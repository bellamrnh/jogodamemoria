<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogo da Memoria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('capa.jpg') no-repeat center center/cover;
      background-attachment: fixed;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
    }

    .signup-card {
      background: rgba(50, 50, 50, 0.8);
      padding: 40px;
      border-radius: 15px;
      width: 100%;
      max-width: 450px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.6);
      text-align: center;
    }

    .signup-card h2 {
      margin-bottom: 20px;
      font-weight: 600;
    }

    .form-control {
      background-color: rgba(255,255,255,0.1);
      border: none;
      color: #fff;
    }

    .form-control:focus {
      background-color: rgba(255,255,255,0.2);
      color: #fff;
      box-shadow: none;
    }

    .btn-signup {
      background-color: #28a745;
      border: none;
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      color: #fff;
      font-weight: 600;
      margin-top: 10px;
      transition: background 0.3s;
    }

    .btn-signup:hover {
      background-color: #1e7e34;
    }

    .login-link {
      margin-top: 20px;
      display: block;
      color: #ccc;
    }

    .login-link:hover {
      color: #fff;
      text-decoration: underline;
    }
	nav a:hover { border-bottom: 2px solid #0d6efd; }
  </style>
</head>
<body>

  <div class="signup-card">
    <h2>Crie sua Conta</h2>
    <form action= "proc.php" method="POST">
      <div class="form-row">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome" required>
        <input type="hidden" class="form-control" id="id" name="id">
      </div>
      <div class="form-row">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" placeholder="seuemail@exemplo.com" required name="email">
      </div>
      <div class="form-row">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Crie uma senha" required name="senha">
      </div>
      <button type="submit" class="btn-signup">Cadastrar</button>
    </form>

    <a href="index.php" class="login-link">Já tem uma conta? Entrar</a>
  </div>

</body>
</html>
