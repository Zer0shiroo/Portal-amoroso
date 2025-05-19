<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal de quejas amoroso</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #ffe6f0, #fff0f5);
      font-family: 'Comic Sans MS', cursive, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      position: relative;
      overflow: hidden;
    }

    form {
      background-color: white;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      padding: 30px;
      border-radius: 15px;
      z-index: 10;
    }

    h2 {
      color: #d6336c;
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #d6336c;
    }

    input, textarea, select {
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
      margin-top: 5px;
      font-size: 16px;
      box-sizing: border-box;
    }

    button {
      margin-top: 20px;
      width: 100%;
      background-color: #d6336c;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 10px;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #c2185b;
    }

    /* Corazones animados */
    .heart {
      position: absolute;
      color: #ff6b81;
      font-size: 20px;
      animation: float 10s linear infinite;
      opacity: 0.7;
    }

    @keyframes float {
      0% {
        transform: translateY(100vh) translateX(0);
        opacity: 0;
      }
      10% {
        opacity: 0.7;
      }
      100% {
        transform: translateY(-10vh) translateX(20px);
        opacity: 0;
      }
    }

    /* Genera corazones flotantes */
    body::before {
      content: "❤️ 💕 💖 💘 💗";
      position: absolute;
      top: -50px;
      left: 0;
      right: 0;
      font-size: 24px;
      text-align: center;
      animation: float 12s linear infinite;
      opacity: 0.3;
      z-index: 1;
    }
  </style>
</head>
<body>

<form action="/submit-grievance" method="POST">
  @csrf

  <h2>💖 Portal de Quejas Amoroso 💖</h2>

  <label for="titulo">Título</label>
  <input type="text" id="titulo" name="titulo" required placeholder="Hoy estoy un poco triste">

  <label for="bother">¿Que es lo que te ha molestado mi niño?</label>
  <textarea id="bother" name="bother" rows="4" required placeholder="Cuéntame qué te molesta..."></textarea>

  <label for="mood">Mood</label>
  <select id="mood" name="mood" required>
    <option value="" disabled selected>Escoge un emoji</option>
    <option value="😊">😊 Feliz</option>
    <option value="😢">😢 Triste</option>
    <option value="😡">😡 Enfadado</option>
    <option value="😰">😰 Inseguro</option>
    <option value="😴">😴 Cansado</option>
    <option value="😍">😍 Enamorado</option>
  </select>

  <label for="severity">Severidad</label>
  <select id="severity" name="severity" required>
    <option value="" disabled selected>¿Qué tan grave es?</option>
    <option value="Bajo">Bajo</option>
    <option value="Medio">Medio</option>
    <option value="Alto">Alto</option>
  </select>

  <button type="submit">Enviar con amor 💌</button>
</form>

</body>
</html>
