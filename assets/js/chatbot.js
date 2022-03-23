// chatbot remider

$('document').ready(function(){
    setTimeout( ()=>{
        loadingChatRemind();
    }, 8000); 

    setTimeout( ()=>{
    loadingChatRemindClose();
    }, 9900); 
    
    setTimeout( ()=>{
    loadingChatRemindMessage();
    }, 10100);
    
    setTimeout( ()=>{
    var remindMessage = document.getElementById('remindMessage');
    remindMessage.style.display='none';
    }, 40000); 


    // second message
    setTimeout( ()=>{
        loadingChatRemind();
    }, 60000); 

    setTimeout( ()=>{
        loadingChatRemindClose();
    }, 61900); 

    setTimeout( ()=>{
        var remindMessage2 = document.getElementById('remindMessage2');
        remindMessage2.style.display='inline';
    }, 62100); 
    setTimeout( ()=>{
        remindMessage2.style.display='none';
    }, 92000); 
});

var remindClose = document.getElementById('remindX');
var remindCloseMessage = document.getElementById('remindMessage');

var remindClose2 = document.getElementById('remindX2');
var remindCloseMessage2 = document.getElementById('remindMessage2');

remindClose.addEventListener('click', function(){
    remindCloseMessage.style.display = 'none';
})
remindClose2.addEventListener('click', function(){
    remindCloseMessage2.style.display = 'none';
})

function loadingChatRemind(){
    var remindDiv = document.getElementById('remindDiv');
    remindDiv.style.display='inline';
}
function loadingChatRemindClose(){
    var remindDiv = document.getElementById('remindDiv');
    remindDiv.style.display='none';
}
function loadingChatRemindMessage(){
    var remindMessage = document.getElementById('remindMessage');
    remindMessage.style.display='inline';
}



// open the chatbox content
var btnhid = document.querySelectorAll(".collapsible");
btnhid.forEach(function(el) {
  el.addEventListener('click',function(){
      setTimeout( ()=>{
        $(".content").addClass('max-height-chat');
      }, 400);

      // prevent message to be visible when opening chatbot
      remindCloseMessage.style.display = 'none';
      remindDiv.style.display='none';
      remindMessage2.style.display='none';

  });
})

//open close chatbox animation
var btnIcon = document.getElementById("btn-icon");
btnIcon.addEventListener("click",function(){
    btnIcon.style.cssText="transform: translateY(1000px); transition: 1s";
    document.getElementById("textInput").focus();
})

var xTop = document.getElementById("x-chat");
xTop.addEventListener("click",function(){
    setTimeout(function(){
        btnIcon.style.cssText="transform: translateY(0px); transition: 0.3s";
    },300);

    setTimeout(function(){
        btnIcon.style.cssText="transform: translateY(0px); transition: 0s";
      
    },900);
    
    $(".content").removeClass('max-height-chat');


    // prevent message to be visible when closing chatbot
    remindCloseMessage.style.display = 'none';
    remindDiv.style.display='none';
    remindMessage2.style.display='none';
});

$(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27 && $(".content").hasClass("max-height-chat")) {
        setTimeout(function(){
            btnIcon.style.cssText="transform: translateY(0px); transition: 0.3s";
        },300);

        setTimeout(function(){
            btnIcon.style.cssText="transition: 0s";
        },900);
            
        $(".content").removeClass('max-height-chat');


        // prevent message to be visible when closing chatbot
        remindCloseMessage.style.display = 'none';
        remindDiv.style.display='none';
    }
});
// end


function getTime() {
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if (hours < 10) {
        hours = "0" + hours;
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    let time = hours + ":" + minutes;
    return time;
}


// Fot the topics button
$("#btn-icon").one("click", function(){
    function firstBotMessage() {
        setTimeout(function(){
            let firstMessage = "👋 Hi! Thank you for contacting us. Kindly send us any question you may have."
            document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage + '</span></p>';
        },900);
    
        let time = getTime();
    
        $("#chat-timestamp").append(time);
        document.getElementById("userInput").scrollIntoView(false);
    }
    firstBotMessage();
    
    function SecondBotMessage() {
        setTimeout(function(){
            let SecondMessage = "Choose from the questions below or type it in the textbox."
            document.getElementById("botStarterMessage2").innerHTML = '<p class="botText"><span>' + SecondMessage + '</span></p>';
        },1500);
    }
    SecondBotMessage();

    function ThirdBotMessage() {
        setTimeout(function(){
            let ThirdMessage = "<div class='col-md-12'><button class='topic-btn' onclick='topic1()'>Is there any available space for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic2()'>How do I apply for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic3()'>What are the entry requirements?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic4()'>What is ARDCI Business Center's business hours schedule?</button></div><div class='col-md-12'><button class='topic-btn' onclick='topic5()'>Who is the contact person?</button></div><div class='col-md-12'><button id='tmLast' class='topic-btn' onclick='topic6()'>Where is ARDCI Business Center located?</button></div>"
            document.getElementById("botStarterMessage3").innerHTML = ThirdMessage;

            lastTopic = document.getElementById('tmLast');
            lastTopic.scrollIntoView(true);
        },2300);
    }
    ThirdBotMessage();

});

// Retrieves the response
function getHardResponse(userText) {
    let botResponse = getBotResponse(userText);
    let botHtml = '<p class="chatbot-avatar-p"><img class="chatbot-avatar" src="assets/image/chatbot-img.jpg" alt="chatbot avatar"> ChatBot</p><p class="botText"><span>' + botResponse + '</span></p>';
    $("#chatbox").append(botHtml);

    var items = document.querySelectorAll(".botText");
    var lastchild = items[items.length-1];

    lastchild.scrollIntoView(true);
}


//for button topic
function topic1() {
    userText = "topic1";
    forTopic();
}
function topic2() {
    userText = "topic2";
    forTopic();
}
function topic3() {
    userText = "topic3";
    forTopic();
}  
function topic4() {
    userText = "topic4";
    forTopic();
}  
function topic5() {
    userText = "topic5";
    forTopic();
}  
function topic6() {
    userText = "topic6";
    forTopic();
}  

function forTopic(){

    if (userText == "topic1") {
        userText = "Is there any available space for lease?";
    }
    else if (userText == "topic2") {
        userText = "How do I apply for lease?";
    }
    else if (userText == "topic3") {
        userText = "What are the entry requirements?";
    }
    else if (userText == "topic4") {
        userText = "What is ARDCI Business Center's business hours schedule?";
    }
    else if (userText == "topic5") {
        userText = "Who is the contact person?";
    }
    else if (userText == "topic6") {
        userText = "Where is ARDCI Business Center located?";
    }
    
    let userHtml = '<p class="usertext-label">You</p><p class="userText"><span>' + userText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    var items = document.querySelectorAll(".userText");
    var lastchild = items[items.length-1];

    lastchild.scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)
}
//end button topic


//Gets the text text from the input box and processes it
function getResponse() {
    let userText = $("#textInput").val();

    if (userText !== "") {
        let userHtml = '<p class="usertext-label">You</p><p class="userText"><span>' + userText + '</span></p>';

        $("#textInput").val("");
        $("#chatbox").append(userHtml);
        var items = document.querySelectorAll(".userText");
        var lastchild = items[items.length-1];

        lastchild.scrollIntoView(true);

        setTimeout(() => {
            getHardResponse(userText);
        }, 1000)
    }
}

function sendButton() {
    getResponse();
}

// Press enter to send a message
$("#textInput").keypress(function (e) {
    if (e.which == 13) {
        getResponse();
    }
});


// responses
function getBotResponse(input) {    
    if (input == "hello" || input == "Hello" || input == "Hi" || input == "hi" || input == "HI") {
        return "Hello there!";
    } else if (input == "goodbye" || input == "bye" ) {
        return "Talk to you later!";    
    } else if (input == "Send icon clicked!") {
        return "Please choose topic or write something before clicking the send button or hitting enter key. Thanks!";
    } else if (input == "Is there any available space for lease?") {
        return "Hi! We have available for lease. Feel free to contact us at <a href='tel:0961-571-4273'>0961-571-4273</a> or e-mail us at <a href='mailto:ardci.bdc@gmail.com'>ardci.bdc@gmail.com</a> for more information. You may also visit our office at 2/F ARDCI Business Center, Moonwalk Road, Calatagan Proper, Virac, Catanduanes. </span><span style='margin-top: 10px;'>Choose another question.</span><div class='response-topic response-visible'> <div class='col-md-12'><button class='topic-btn' onclick='topic2()'>How do I apply for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic3()'>What are the entry requirements?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic4()'>What is ARDCI Business Center's business hours schedule?</button></div><div class='col-md-12'><button class='topic-btn' onclick='topic5()'>Who is the contact person?</button></div><div class='col-md-12'><button id='tmLast' class='topic-btn' onclick='topic6()'>Where is ARDCI Business Center located?</button></div> </div>";
    } else if (input == "How do I apply for lease?" ) {
        return "You may send your letter of inetent at <a href='mailto: ardci.bdc@gmail.com'>ardci.bdc@gmail.com</a> addressed to: </span> <span style='margin-top: 1rem'> <strong> MA. GERLENE D. RODULFO </strong> <br> Leasing Marketing Officer<br> ARDCI BUSINESS AND DEVELOPMENT CORPORATION <br><br> 2/F ARDCI Business Center <br> Moonwalk Road, Calatagan Proper <br> Virac, Catanduanes</span><span style='margin-top: 1rem;'> You may also visit our office located at 2/F ARDCI Business Center, Moonwalk Road, Calatagan Proper, Virac, Catanduanes and fill out the Tenant Application Form. Please look for Ms. Gerlene. </span><span style='margin-top: 10px;'>Choose another question.</span><div class='response-topic response-visible'> <div class='col-md-12'><button class='topic-btn' onclick='topic1()'>Is there any available space for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic3()'>What are the entry requirements?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic4()'>What is ARDCI Business Center's business hours schedule?</button></div><div class='col-md-12'><button class='topic-btn' onclick='topic5()'>Who is the contact person?</button></div><div class='col-md-12'><button id='tmLast' class='topic-btn' onclick='topic6()'>Where is ARDCI Business Center located?</button></div> </div>";
    } else if (input == "What are the entry requirements?" ) {
        return "Enrty requirements are as follows: <br> - Letter of Intent <br> - Accomplished Tenant Application Form <br> - Accomplished Google Online Questionnaire </span><span style='margin-top: 10px;'>Choose another question.</span><div class='response-topic response-visible'> <div class='col-md-12'><button class='topic-btn' onclick='topic1()'>Is there any available space for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic2()'>How do I apply for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic4()'>What is ARDCI Business Center's business hours schedule?</button></div><div class='col-md-12'><button class='topic-btn' onclick='topic5()'>Who is the contact person?</button></div><div class='col-md-12'><button id='tmLast' class='topic-btn' onclick='topic6()'>Where is ARDCI Business Center located?</button></div> </div>";
    } else if (input == "What is ARDCI Business Center's business hours schedule?" ) {
        return "Business hours is from 7:00 a.m. until 7:00 p.m. daily. </span><span style='margin-top: 10px;'>Choose another question.</span><div class='response-topic response-visible'> <div class='col-md-12'><button class='topic-btn' onclick='topic1()'>Is there any available space for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic2()'>How do I apply for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic3()'>What are the entry requirements?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic5()'>Who is the contact person?</button></div><div class='col-md-12'><button id='tmLast' class='topic-btn' onclick='topic6()'>Where is ARDCI Business Center located?</button></div></div>";
    } else if (input == "Who is the contact person?" ) {
        return "Hi! You may reach out to our Lease Marketing Officer, Ms. Gerlene, or contact us at 0961-571-4273 or e-mail us at ardci.bdc@gmail.com for more information. You may also visit our office at 2/F ARDCI Business Center, Moonwalk Road, Calatagan Proper, Virac, Catanduanes. </span><span style='margin-top: 10px;'>Choose another question.</span><div class='response-topic response-visible'>  <div class='col-md-12'><button class='topic-btn' onclick='topic1()'>Is there any available space for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic2()'>How do I apply for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic3()'>What are the entry requirements?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic4()'>What is ARDCI Business Center's business hours schedule?</button></div><div class='col-md-12'><button id='tmLast' class='topic-btn' onclick='topic6()'>Where is ARDCI Business Center located?</button></div> </div>";
    } else if (input == "Where is ARDCI Business Center located?") {
        return "Hi! You may visit us at 2/F ARDCI Business Center, Moonwalk Road, Calatagan Proper, Virac, Catanduanes. </span><span style='margin-top: 10px;'>Choose another question.</span><div class='response-topic response-visible'>  <div class='col-md-12'><button class='topic-btn' onclick='topic1()'>Is there any available space for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic2()'>How do I apply for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic3()'>What are the entry requirements?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic4()'>What is ARDCI Business Center's business hours schedule?</button></div><div class='col-md-12'><button class='topic-btn' onclick='topic5()'>Who is the contact person?</button></div> </div>";
    } else if (input == "contact" || input == "contact us" || input == "Contact Us" || input == "Contact" || input == "email" || input == "Email" || input == "Request") {
        return "Press the button to redirect to contact page <br><br><button class='topic-btn' data-bs-toggle='modal' data-bs-target='#request-for-quotation'> Contact </button>";
    } else if (input == "👋") {
        return "👋";
    } else if (input == "What is your name?" || input == "what is your name?" || input == "what is your name"|| input == "whats your name") {
        return "You can call me Alex";
    } else if (input == "Hi alex" || input == "Hi Alex" || input == "hi alex") {
        return "Hello Stranger";
    } else {
        return "I'm a bot programmed to answer only some of the frequent questions. Here's the topic I can help you with:</span> <div class='response-topic response-visible'> <div class='col-md-12'><button class='topic-btn' onclick='topic1()'>Is there any available space for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic2()'>How do I apply for lease?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic3()'>What are the entry requirements?</button></div> <div class='col-md-12'><button class='topic-btn' onclick='topic4()'>What is ARDCI Business Center's business hours schedule?</button></div><div class='col-md-12'><button class='topic-btn' onclick='topic5()'>Who is the contact person?</button></div><div class='col-md-12'><button id='tmLast' class='topic-btn' onclick='topic6()'>Where is ARDCI Business Center located?</button></div> </div>";
    }
}


//disable image draging
document.getElementById('chat-bot-image').ondragstart = function() { return false; };
document.getElementById('chat-icon').ondragstart = function() { return false; };
document.getElementById('main-head-logo').ondragstart = function() { return false; }; //main-header section
document.getElementById("chat-logo-header").ondragstart = function(){ return false; };


// prevent Chatbot btn to move when modal open & close
var myModalEl = document.getElementById('request-for-quotation');

// opening modal
myModalEl.addEventListener('show.bs.modal', function () {
    $('#btn-icon').toggleClass('right-39');
    $('#chat-bar-collapsible').toggleClass('right-34');
    $('#navbar').addClass('plus17');
})

// when completely close modal
myModalEl.addEventListener('hidden.bs.modal', function () {
    $('#btn-icon').toggleClass('right-39');
    $('#chat-bar-collapsible').toggleClass('right-34');
    $('#navbar').removeClass('plus17');
})