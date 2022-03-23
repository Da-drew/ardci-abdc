

<!-- chatbot outside message -->

<!-- loader -->
<div id="remindDiv" class="chat-remind" style="display: none;">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto;display: block;width: 48%;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
<circle cx="27.5" cy="57.5" r="5" fill="#4cea65">
  <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="57.5;42.5;57.5;57.5" keyTimes="0;0.3;0.6;1" dur="1s" begin="-0.6s"></animate>
</circle> <circle cx="42.5" cy="57.5" r="5" fill="#2354c3">
  <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="57.5;42.5;57.5;57.5" keyTimes="0;0.3;0.6;1" dur="1s" begin="-0.44999999999999996s"></animate>
</circle> <circle cx="57.5" cy="57.5" r="5" fill="#4cea65">
  <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="57.5;42.5;57.5;57.5" keyTimes="0;0.3;0.6;1" dur="1s" begin="-0.3s"></animate>
</circle> <circle cx="72.5" cy="57.5" r="5" fill="#2354c3">
  <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="57.5;42.5;57.5;57.5" keyTimes="0;0.3;0.6;1" dur="1s" begin="-0.15s"></animate>
</circle>
</svg>
</div>

<!-- message -->
<div class="remind-message" id="remindMessage" style="display:none;">
    <div class="remind-x-div"><span id="remindX" class="remind-x-span"><img class="remind-x-img" src="assets/image/close.png" alt=""></span></div>
    <p>👋 Hi I'm a Bot! Looking for FAQs <br> open me.</p> 
</div>

<!-- second message -->
<div class="remind-message2" id="remindMessage2" style="display:none;">
    <div class="remind-x-div"><span id="remindX2" class="remind-x-span"><img class="remind-x-img" src="assets/image/close.png" alt=""></span></div>
    <p>👋 Hi, Cannot find contact form? Look above and <br> look for <strong> Request for Quotation</strong> button</p> 
</div>
<!-- end -->

<!-- CHAT BOT-->
<div class="chat-bar-collapsible" id="chat-bar-collapsible">
    <button id="btn-icon" type="button" class="collapsible">
        <img id="chat-bot-image" src="assets/image/chatbot-img1-t.png" alt="">
    </button>

    <div class="content">
        <div class="chat-bot-header">
            <div class="chat-avatar">
                <img id="chat-logo-header" src="assets/image/chatbot-img.jpg" alt="chatbot avatar">
            </div>
            <div class="chat-name">
                <h4>Chat with us!</h4>
                <span>ARDCI Business and Development Corporation</span>
            </div>

            <div id="x-chat" class="x-chat">
                <img src="assets/image/close.png" alt="">
            </div>
        </div>
        <div class="full-chat-block">
            <!-- Message Container -->
            <div class="outer-container">
                <div class="chat-container">
                    <!-- Messages -->
                    <div id="chatbox">
                        <h5 id="chat-timestamp"></h5>
                        <p class="chatbot-avatar-p"><img class="chatbot-avatar" src="assets/image/chatbot-img.jpg" alt="chatbot avatar">ChatBot</p>
                        <p id="botStarterMessage" class="botText"><span class="first-loader"><img class="typing" src="assets/image/typing.gif" alt="Loading..."></span></p>
                        <p id="botStarterMessage2" class="botText"><span class="first-loader"><img class="typing" src="assets/image/typing.gif" alt="Loading..."></span></p>
                        <div class="row topic-div" id="botStarterMessage3">
                        </div>
                    </div>
                </div>
                <div class="chat-input-div">
                 <!-- User input box -->
                <div class="chat-bar-input-block">
                    <div id="userInput">
                        <p class="input-warning">*This field is temporary disabled.</p>
                        <input id="textInput" class="input-box" type="text" name="msg"
                            placeholder="Please choose from the questions above." disabled>
                        <p></p>
                    </div>

                    <div class="chat-bar-icons">
                        <img id="chat-icon" src="assets/image/send.png" alt=""  onclick="sendButton()">
                    </div>
                </div>
                <div id="chat-bar-bottom" class="chat-footer-div">
                    <p>Copyright ABDC © <?php echo date("Y"); ?> | All Rights Reserved</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
