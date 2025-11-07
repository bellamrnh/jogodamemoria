<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogo - Tela Inicial</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
      background: rgba(40, 40, 40, 0.85);
      padding: 40px;
      border-radius: 15px;
      width: 90%;
      max-width: 450px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.7);
      text-align: center;
      backdrop-filter: blur(6px);
    }

    .login-card h2 {
      margin-bottom: 25px;
      font-weight: 600;
      font-size: 1.6rem;
    }

    .icon-container {
      display: flex;
      justify-content: space-around;
      margin-top: 30px;
    }

    .game-icon {
      font-size: 3.5rem;
      color: #007bff;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 50%;
      width: 90px;
      height: 90px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    }

    .game-icon:hover {
      color: #fff;
      background: #007bff;
      transform: scale(1.1);
    }

    .icon-label {
      margin-top: 10px;
      font-size: 1rem;
      color: #ccc;
    }

    .icon-box {
      text-align: center;
      transition: transform 0.3s;
    }

    .icon-box:hover {
      transform: translateY(-5px);
    }

    footer {
      margin-top: 30px;
      color: #bbb;
      font-size: 0.9rem;
    }

    @media (max-width: 480px) {
      .login-card {
        padding: 30px 20px;
      }

      .login-card h2 {
        font-size: 1.4rem;
      }

      .game-icon {
        width: 70px;
        height: 70px;
        font-size: 2.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h2>Bem Vindo</h2>
    <h2> Escolha o Nível do Jogo</h2>

    <div class="icon-container">
      <a href="../nivel1/jogo/nivel1.php" class="icon-box">
        <i class="fa-solid fa-leaf game-icon"></i>
        <div class="icon-label">Fácil</div>
      </a>

      <a href="../nivel2/jogo/nivel2.php" class="icon-box">
        <i class="fa-solid fa-gear game-icon"></i>
        <div class="icon-label">Médio</div>
      </a>

      <a href="../nivel3/jogo/nivel3.php" class="icon-box">
        <i class="fa-solid fa-fire game-icon"></i>
        <div class="icon-label">Difícil</div>
      </a>
    </div>

    <footer>Desenvolvido por Isabella 💻</footer>
  </div>

 
</body>
</html>
