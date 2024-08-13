document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const textarea = form.querySelector("textarea[name='message']");
    
    form.onsubmit = function(event) {
        const forbiddenWords = ["amınakoyim", "oç", "piç", "yavşak", "aq", "amk"];
        const message = textarea.value.toLowerCase();

        for (let word of forbiddenWords) {
            if (message.includes(word)) {
                alert(`Mesajınızda uygunsuz kelimeler bulunuyor: ${word}`);
                event.preventDefault();  
                return false;
            }
        }
        
        alert("Mesajınız gönderilmiştir."); 
        return true;
    };
});
