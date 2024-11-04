// Simple form submission alert
document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Thank you for contacting us! We’ll get back to you soon.");
});
