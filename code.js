function trocaCor() {
    var elementos = document.getElementsByClassName('Cor'); // Encontra todos os elementos com a classe 'Cor'
  
    for (var i = 0; i < elementos.length; i++) {
      if (elementos[i].style.color === 'black' || elementos[i].style.color === '') {
        elementos[i].style.color = 'white'; // Altera a cor dos elementos para branco se a cor atual for preta ou indefinida
      } else {
        elementos[i].style.color = 'black'; // Altera a cor dos elementos para preto
      }
    }
  }

  const login = document.querySelector(".login");
  const loginForm = login.querySelector(".login__form");
  const loginInput = login.querySelector(".login__input");
  
  const chat = document.querySelector(".chat");
  const chatForm = document.querySelector(".chat__form");
  const chatInput = document.querySelector(".chat__input");
  const chatMessages = document.querySelector(".chat__massages");

  
  const container = document.querySelector(".container");
  
  const colors = [
    "cadetblue",
    "darkgoldenrod",
    "cornflowerblue",
    "gold",
    "hotpink",
    "darkkhaki"
  ];
  
  const user = { id: "", name: "", color: "" };
  let websocket;
  
  const createMessageSelfElement = (content) => {
    const div = document.createElement("div");
    div.classList.add("message--self");
    div.innerHTML = content;
    return div;
  };
  
  const getRandomColor = () => {
    const randomIndex = Math.floor(Math.random() * colors.length);
    return colors[randomIndex];
  };
  
  const processMessage = ({ data }) => {
    const { userId, userName, userColor, content } = JSON.parse(data);
    const element = createMessageSelfElement(content);
    chatMessages.appendChild(element);
  };
  
  const handleLogin = (event) => {
    event.preventDefault();
    user.id = crypto.randomUUID();
    user.name = loginInput.value;
    user.color = getRandomColor();
  
    login.style.display = "none";
    chat.style.display = "flex";
    chatForm.style.display = "flex";
    container.style.display = 'none';
  
    websocket = new WebSocket("ws://localhost:8080");
  
    websocket.onmessage = processMessage;
  };
  
  const sendMessage = (event) => {
    event.preventDefault();
  
    const message = {
      userId: user.id,
      userName: user.name,
      userColor: user.color,
      content: chatInput.value
    };
  
    websocket.send(JSON.stringify(message));
    chatInput.value = "";
    const element = createMessageSelfElement(message.content);
    chatMessages.appendChild(element);te
  };
  
  loginForm.addEventListener("submit", handleLogin);
  chatForm.addEventListener("submit", sendMessage);
  