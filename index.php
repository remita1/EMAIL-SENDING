<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender with File Attachment</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif !important;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: radial-gradient(circle 248px at center, #16d9e3 0%, #30c7ec 47%, #46aef7 100%);
        }

        .form-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            border: none;
            border-radius: 10px;
            background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        
        .form-container > h2 {
            font-weight: bold;
        } 

        .form-container form {
            margin-top: 20px;
            width: 450px;
        }
    </style>
</head>
<body>
    
    <div class="main">

        <div class="form-container">
            <h2>Send Email with File Attachment</h2>

            <form action="./send-email.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="email">To:</label>
                <div class="input-group is-invalid">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="form-control" name="email" id="email" required>
                </div>
            </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" required></textarea>
                </div>
                <label for="file">File:</label>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="file" name="file" required onchange="updateFileName()">
                    <label class="custom-file-label" for="file" id="file-label">Choose file...</label>
                </div>
                <button type="submit" class="btn btn-primary form-control">Send Email</button>
            </form>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function updateFileName() {
            // Get the file input
            var fileInput = document.getElementById('file');

            // Get the file label
            var fileLabel = document.getElementById('file-label');

            // Update the label text with the selected file name
            fileLabel.innerText = fileInput.files.length > 0 ? fileInput.files[0].name : 'Choose file...';
        }
    </script>
</body>
</html>