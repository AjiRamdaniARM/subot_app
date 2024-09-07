document.getElementById('dataForm').addEventListener('submit', function(event) {
    var submitButton = document.getElementById('submit-button');
    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading...';
    submitButton.disabled = true; // Disable the button to prevent multiple submissions
});
function downloadFile(url) {
    var submitButton = document.getElementById('download');
    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading...';
    submitButton.disabled = true;
    const a = document.createElement('a');
    a.href = url;
    a.download = ''; // Biarkan kosong untuk menggunakan nama file default
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    setTimeout(function() {
        submitButton.innerHTML = 'Download Template';
        submitButton.disabled = false;
    }, 3000);

    document.getElementById('customButton').addEventListener('click', function() {
        document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', function() {
        var fileInput = document.getElementById('fileInput');
        var customButton = document.getElementById('customButton');

        if (fileInput.files.length > 0) {
            customButton.innerHTML = '<i class="fas fa-check-circle"></i>&nbsp;&nbsp;Selected File';
        } else {
            customButton.innerHTML = 'Upload File';
        }
    });

    // Handle form submission with AJAX
    document.getElementById('uploadForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        var submitButton = document.getElementById('submitBtn');
        var formData = new FormData(this);
        var fileInput = document.getElementById('fileInput');

        // Check if a file is selected
        if (fileInput.files.length === 0) {
            alert('Please select a file.');
            return;
        }

        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading...';
        submitButton.disabled = true;

        setTimeout(function() {
            submitButton.innerHTML = 'Upload File';
            submitButton.disabled = false;
        }, 3000);

        $.ajax({
            url: 'ImportTemplate',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    alert(response.message);
                    console.log(response.message);
                    document.getElementById('uploadForm').reset();
                } else {
                    console.log(response.error.message);
                    alert(response.error.message || 'Failed to import template.');
                }
            },
            error: function(error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan, silakan coba lagi nanti.');
            },
            complete: function() {
                submitButton.innerHTML = 'Submit';
                submitButton.disabled = false;
            }
        });
    });
}
