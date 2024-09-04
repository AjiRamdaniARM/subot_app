document.getElementById('dataForm').addEventListener('submit', function(event) {
    var submitButton = document.getElementById('submit-button');
    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading...';
    submitButton.disabled = true; // Disable the button to prevent multiple submissions
});
