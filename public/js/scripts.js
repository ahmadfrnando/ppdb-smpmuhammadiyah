document.querySelectorAll('.read-more-btn').forEach(button => {
    button.addEventListener('click', function() {
        const fullDescription = this.previousElementSibling;
        if (fullDescription.style.display === 'none') {
            fullDescription.style.display = 'block';
            this.textContent = 'Read Less';
        } else {
            fullDescription.style.display = 'none';
            this.textContent = 'Read More';
        }
    });
});