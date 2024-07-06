let isChatOpen = false;

function toggleChat() {
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    isChatOpen = !isChatOpen;
    
    if (isChatOpen) {
        chatMessages.style.display = 'block';
        chatInput.style.display = 'block';
        if (chatMessages.children.length === 0) {
            addMessage("Welcome to DMMMSU FRTI chat! How can I assist you today?", false);
        }
    } else {
        chatMessages.style.display = 'none';
        chatInput.style.display = 'none';
    }
}

function addMessage(message, isUser) {
    const chatMessages = document.getElementById('chat-messages');
    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message');
    messageDiv.classList.add(isUser ? 'user-message' : 'bot-message');
    messageDiv.textContent = message;
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function sendMessage() {
    const userInput = document.getElementById('user-input');
    const message = userInput.value.trim();
    
    if (message !== "") {
        addMessage(message, true);
        userInput.value = "";
        
        setTimeout(() => {
            const botResponse = getBotResponse(message);
            addMessage(botResponse, false);
        }, 500);
    }
}

function getBotResponse(message) {
    const lowerMessage = message.toLowerCase();
    
    if (lowerMessage.includes("hello") || lowerMessage.includes("hi")) {
        return "Hello! How can I help you with DMMMSU FRTI information?";
    
    
    } else if (lowerMessage.includes("Product")|| lowerMessage.includes("product")){
        return "Tilapia, Asin, Sea Weeds.";
    } else if (lowerMessage.includes("contact") || lowerMessage.includes("contact")) {
        return "rogendherkeith lachica or 09692902180";
    } else if (lowerMessage.includes("location") || lowerMessage.includes("address")) {
        return "DMMMSU FRTI is located at Paraoir balaoan La Union.";
    } else {
        return "Contact us at DMMMSUFRTI@gmail.com";
    }
}

// Event listener for the Enter key in the input field
document.getElementById('user-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});
