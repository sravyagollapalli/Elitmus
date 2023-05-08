<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <!-- Include SweetAlert CSS and JavaScript files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
</head>
<body>
   
    
    <!-- Check if login was unsuccessful and show a popup message -->
   
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Not correct ',
                text: 'Please try again.'
            }).then((result) => {
                // Redirect to the login page after the popup is closed
                window.location.href = 'Sceclue.html';
            });
        </script>
 
</body>
</html>