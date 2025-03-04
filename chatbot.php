<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rule-Based Chatbot</title>
    <style>
        #chatIcon {
            position: fixed;
            bottom: 30px;
            right: 40px;
            width: 100px;
            cursor: pointer;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
            z-index: 9999;
        }
        #chatIcon:hover {
            transform: scale(1.1);
        }
        #chatContainer {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 350px;
            height: 450px;
            border: 1px solid #d5b083;
            border-radius: 15px;
            background-color: #fff8e1;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            font-family: Arial, sans-serif;
            z-index: 9999;
        }
        #chatHeader {
            background-color: #d5b083;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        #chatBody {
            padding: 15px;
            height: 320px;
            overflow-y: auto;
            background-color: #fff;
            border-bottom: 1px solid #d5b083;
        }
        #chatInputContainer {
            display: flex;
            padding: 10px;
            background-color: #fff8e1;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }
        #chatInput {
            flex: 1;
            padding: 8px;
            border: 1px solid #d5b083;
            border-radius: 10px;
            outline: none;
        }
        #sendBtn {
            margin-left: 5px;
            padding: 8px 15px;
            background-color: #d5b083;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #sendBtn:hover {
            background-color: #b68b5c;
        }
        .chat-message {
            margin: 5px 0;
            padding: 10px;
            border-radius: 10px;
            background-color: #f5e2b6;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .chat-message.bot {
            background-color: #fff8e1;
            color: #5a4e3c;
        }
        .chat-message.user {
            background-color: #d5b083;
            color: #fff;
            align-self: flex-end;
        }
    </style>
</head>
<body>
    <img id="chatIcon" src="images/Tanya_Aku.png" alt="Ask Me" onclick="toggleChat()">

    <div id="chatContainer">
        <div id="chatHeader">Chatbot</div>
        <div id="chatBody"></div>
        <div id="chatInputContainer">
            <input type="text" id="chatInput" placeholder="Ask a question..." onkeypress="handleKeyPress(event)">
            <button id="sendBtn" onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        let responses = {};

        // Load JSON dari file eksternal
        fetch("responses.json")
            .then(response => response.json())
            .then(data => {
                responses = data;
            })
            .catch(error => console.error("Gagal memuat JSON:", error));
        // Fungsi untuk menampilkan atau menyembunyikan chat
        function toggleChat() {
            const chatContainer = document.getElementById('chatContainer');
            chatContainer.style.display = chatContainer.style.display === 'none' || chatContainer.style.display === '' ? 'block' : 'none';
        }

        // Menutup chat jika klik di luar `#chatContainer`
        document.addEventListener("click", function(event) {
            const chatContainer = document.getElementById('chatContainer');
            const chatIcon = document.getElementById('chatIcon');

            // Jika yang diklik bukan `chatContainer` atau `chatIcon`, sembunyikan chat
            if (chatContainer.style.display === "block" && !chatContainer.contains(event.target) && event.target !== chatIcon) {
                chatContainer.style.display = "none";
            }
        });

        function sendMessage() {
            const input = chatInput.value.trim();
            if (input === "") return;

            addMessageToChat("User", input, "user");
            respondToMessage(input);
            chatInput.value = "";
        }

        function respondToMessage(message) {
            message = message.toLowerCase(); // Normalisasi input

            for (const key in responses) {
                if (responses[key].keywords.some(keyword => message.includes(keyword))) {
                    const responseText = responses[key].text;
                    const audioSrc = responses[key].audio;
                    addMessageToChat("Bot", responseText, "bot");
                    playAudioResponse(audioSrc);
                    return;
                }
            }

            // Jika tidak ditemukan dalam JSON
            const defaultResponse = "Maaf, saya tidak mengerti. Coba tanyakan hal lain.";
            addMessageToChat("Bot", defaultResponse, "bot");
        }

        function playAudioResponse(audioSrc) {
            if (!audioSrc) return;
            const audio = new Audio(audioSrc);
            audio.play().catch(error => console.error("Audio tidak dapat diputar:", error));
        }

        function addMessageToChat(sender, text, className) {
            const messageElement = document.createElement("div");
            messageElement.classList.add("chat-message", className);
            messageElement.textContent = text;
            chatBody.appendChild(messageElement);
            chatBody.scrollTop = chatBody.scrollHeight;
        }

        function handleKeyPress(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                sendMessage();
            }
        }
    </script>
</body>
</html>
