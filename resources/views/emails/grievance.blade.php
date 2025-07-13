<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mensaje Amoroso</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #fff0f5; color: #333; padding: 20px;">
    <h2 style="color: #d6336c;">💖 Nuevo mensaje de [Pon nombre aqui] del Portal de Quejas 💖</h2>

    <p><strong>📌 Título:</strong> {{ $data['titulo'] }}</p>

    <p><strong>🧠 ¿Qué me molesta?</strong><br>
    {{ $data['bother'] }}</p>

    <p><strong>😶‍🌫️ Mood:</strong> {{ $data['mood'] }}</p>
    <p><strong>🔥 Severidad:</strong> {{ $data['severity'] }}</p>

    <hr>
    <p style="font-size: 14px; color: #888;">Enviado con amor desde tu Grievance Portal 💌</p>
</body>
</html>
