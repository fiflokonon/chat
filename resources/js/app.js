import './bootstrap';

const pseudo = document.getElementById('pseudo');
const message = document.getElementById('msg');
const submit = document.getElementById('submitButton');
const msgDiv = document.getElementById('message');

submit.addEventListener('click', () => {
    console.log('click');
    axios.post('/chat', {
        message: message.value
    });
});

window.Echo.channel('chat').listen('.chat-message', (event) => {
    console.log(event);
    msgDiv.innerHTML += `
    <div class="message">
    ${event.message}
    </div>
<br>`;
});


