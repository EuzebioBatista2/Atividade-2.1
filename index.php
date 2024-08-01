<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de números romanos</title>

  <!-- CSS -->
  <link rel="stylesheet" href="styles/styles.css">

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
  <main>
    <div class="card">
      <h1 class="title">Conversor</br> Romando ⇄ Real</h1>

      <p>Selecione a opção e converta para seu número (0 até 3000)!</p>
      <div class="buttons">
        <button class="btn activated-btn" id="realBtn" onclick="setConversionType('int')">Real</button>
        <button class="btn" id="romanBtn" onclick="setConversionType('roman')">Romano</button>
      </div>
      <div class="inputs">
        <label for="">Valor</label>
        <input type="number" id="inputValue" class="dataInput" oninput="handleOnValueChange()">
      </div>
      <div class="calcResult">
        <p>Resultado:</p>
        <span id="result"></span>
      </div>
    </div>
  </main>

  <script src="scripts/chart.js"></script>
</body>

</html>