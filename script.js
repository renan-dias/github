// Função para gerar número aleatório
function getRandomInt(max) {
    return Math.floor(Math.random() * max);
  }
  
  // Lista de degradês para fundo, incluindo cores escuras e claras
  const gradients = [
    "linear-gradient(135deg, #74ebd5 0%, #9face6 100%)",
    "linear-gradient(135deg, #2b5876 0%, #4e4376 100%)", // Escuro
    "linear-gradient(135deg, #141E30 0%, #243B55 100%)", // Escuro
    "linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%)",
    "linear-gradient(135deg, #333333 0%, #dd1818 100%)", // Escuro
  ];
  
  // Função para trocar o fundo com suavidade a cada 10 minutos (600 segundos)
  function changeBackground() {
    const randomGradient = gradients[getRandomInt(gradients.length)];
    document.body.style.background = randomGradient;
  }
  
  // Troca o fundo a cada 10 minutos
  setInterval(changeBackground, 600000);
  
  // Função para mudar a fonte e estilo da palavra "terceirão" ao ocorrer o glitch
  const glitchText = document.querySelector('.glitch');
  const fonts = ['Arial', 'Courier New', 'Georgia', 'Times New Roman', 'Verdana', 'Comic Sans MS'];
  const colors = ['#ff4c4c', '#4cff4c', '#ff4cff', '#4c4cff', '#ffff4c'];
  
  // Função para aplicar glitch aleatório na fonte e cor
  function applyGlitchEffect() {
    const randomFont = fonts[getRandomInt(fonts.length)];
    const randomColor = colors[getRandomInt(colors.length)];
    const randomSize = `${getRandomInt(10) + 20}px`;
  
    glitchText.style.fontFamily = randomFont;
    glitchText.style.color = randomColor;
    glitchText.style.fontSize = randomSize;
  }
  
  // Chamar a função de glitch de tempos em tempos aleatórios
  setInterval(applyGlitchEffect, 2000);
  
  // Função para redirecionar para a URL correta ao clicar no botão "Ir"
  document.getElementById("btnGo").addEventListener("click", function() {
    const selectedNumber = document.getElementById("numberSelect").value;
    
    if (selectedNumber) {
      const url = `${selectedNumber}/index.html`;
      window.location.href = url;
    } else {
      alert("Por favor, selecione um número!");
    }
  });
  
  // Função para redirecionar para um número aleatório ao clicar no botão "Estou com sorte!"
  document.getElementById("btnLucky").addEventListener("click", function() {
    const randomNumber = Math.floor(Math.random() * 17) + 1;
    const url = `${randomNumber}/index.html`;
    window.location.href = url;
  });
  