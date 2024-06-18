document.addEventListener('DOMContentLoaded', function() {
    const closeButton = document.querySelector('.close-button');
    const errorContainer = document.querySelector('.error-container');

    if (closeButton && errorContainer) {
        closeButton.addEventListener('click', function() {
            errorContainer.style.display = 'none';
        });
    }
});


