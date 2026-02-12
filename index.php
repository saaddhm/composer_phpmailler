<!doctype html>
<html lang="en">
    <head>
        <title>Email Sender</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
        <style>
            body {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .form-container {
                background: white;
                border-radius: 10px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                padding: 40px;
                max-width: 500px;
                width: 100%;
            }
            .form-container h1 {
                margin-bottom: 30px;
                color: #333;
                text-align: center;
                font-weight: 600;
            }
            .form-group {
                margin-bottom: 20px;
            }
            .form-label {
                font-weight: 500;
                color: #555;
                margin-bottom: 8px;
            }
            .form-control {
                border-radius: 5px;
                border: 1px solid #ddd;
                padding: 10px 15px;
            }
            .form-control:focus {
                border-color: #667eea;
                box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            }
            .btn-submit {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border: none;
                padding: 12px 30px;
                font-weight: 600;
                margin-top: 20px;
                width: 100%;
            }
            .btn-submit:hover {
                opacity: 0.9;
            }
        </style>
    </head>

    <body>
        <div class="form-container">
            <h1>✉️ Send Email</h1>
            <form action="send.php" method="post">
                <div class="form-group">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" required />
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required />
                </div>

                <div class="form-group">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required />
                </div>

                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-submit">Send Email</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
