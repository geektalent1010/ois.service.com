<div class="modal chatbot-modal">
    <div class="modal-section">
        <div class="modal-header">
            <div class="close-but">
                <a class="d-flex align-items-center" onclick="toggleChatbotModal()">
                    <img class="close-icon" src="{{ asset('images/Logo/IconCLOSE.svg') }}" alt="" />
                </a>
            </div>
            <img class="chatbot-logo" alt="" src="{{ asset('images/Logo/IconCHATBOT1.svg') }}" />
            <span>Ai Chatbot</span>
        </div>
        <div class="modal-content">
            <div class="chat-group">
                <img src="{{ asset('images/Logo/IconCHATBOT3.svg') }}" alt="" />
                <div>
                    <div class="chat-title">Hello, how can i help you?</div>
                    <div class="chat-description">
                        <div>- Visa application</div>
                        <div>- Passport application</div>
                        <div>- BVN application</div>
                        <div>- General information</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="chat-input-section">
                <textarea placeholder="Type here"></textarea>
            </div>
            <img src="{{ asset('images/Logo/SendChat.svg') }}" class="send-icon" alt=""/>
        </div>
    </div>
</div>
