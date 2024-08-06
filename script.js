document.getElementById('chatbox-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const message = document.getElementById('chatbox-input').value;
    if (message.trim()) {
        const whatsappURL = `https://wa.me/0785354935?text=${encodeURIComponent(message)}`;
        window.open(whatsappURL, '_blank');
        document.getElementById('chatbox-input').value = '';
        document.getElementById('chatbox-messages').innerHTML += `<div>${message}</div>`;
    }
});
