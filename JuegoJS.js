const canvas = document.getElementById("gameCanvas");
    const ctx = canvas.getContext("2d");
    
    const snakeSize = 20;
    let snake = [{ x: 10, y: 10 }];
    
    let food = { x: 15, y: 15 };
    
    function inicio() {
      mover();
      Colision();
      Comer();
      Marco();
      
      setTimeout(inicio, 100); 
    }
    
    window.addEventListener("keydown", function(event) {
      const direction = event.key;
      Direccion(direction);
    });
    
    let dx = 1;
    let dy = 0;
    function Direccion(direction) {
      switch (direction) {
        case "ArrowUp":
          dx = 0;
          dy = -1;
          break;
        case "ArrowDown":
          dx = 0;
          dy = 1;
          break;
        case "ArrowLeft":
          dx = -1;
          dy = 0;
          break;
        case "ArrowRight":
          dx = 1;
          dy = 0;
          break;
      }
    }
    
    function mover() {
      const Cabeza = { x: snake[0].x + dx, y: snake[0].y + dy };
      snake.unshift(Cabeza);
      if (!ComerComida) {
        snake.pop();
      } else {
        ComerComida = false;
        GenerarComida();
      }
    }
    
    function Colision() {
      if (
        snake[0].x < 0 ||
        snake[0].x >= canvas.width / snakeSize ||
        snake[0].y < 0 ||
        snake[0].y >= canvas.height / snakeSize
      ) {
        alert("Perdiste");
        document.location.reload();
      }
      
      for (let i = 1; i < snake.length; i++) {
        if (snake[i].x === snake[0].x && snake[i].y === snake[0].y) {
          alert("Perdiste");
          document.location.reload();
        }
      }
    }
    
    let ComerComida = false;
    function GenerarComida() {
      const maxX = canvas.width / snakeSize;
      const maxY = canvas.height / snakeSize;
      food = {
        x: Math.floor(Math.random() * maxX),
        y: Math.floor(Math.random() * maxY)
      };
    }
    
    function Comer() {
      if (snake[0].x === food.x && snake[0].y === food.y) {
        ComerComida = true;
      }
    }
    
    function Marco() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      
      snake.forEach(segment => {
        ctx.fillStyle = "green";
        ctx.fillRect(segment.x * snakeSize, segment.y * snakeSize, snakeSize, snakeSize);
      });
      
      ctx.fillStyle = "red";
      ctx.fillRect(food.x * snakeSize, food.y * snakeSize, snakeSize, snakeSize);
    }
    
    GenerarComida();
    inicio();