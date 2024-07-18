<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const submitButton = form.querySelector('button[type="submit"]');
        const loadingIndicator = document.getElementById('loading');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting immediately
            submitButton.disabled = true;
            loadingIndicator.classList.remove('hidden'); // Show the loading indicator

            setTimeout(function() {
                form.submit(); // Submit the form after the delay
            }, 4000); // Delay in milliseconds
        });
    });
</script>
