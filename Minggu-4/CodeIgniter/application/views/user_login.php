<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .center {
            margin: 100px auto;
            width: 50%;
            padding: 10px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 5px;
            padding: 20px;
        }

        .form-group{
            margin-bottom:1rem;
        }

        .form-data{
            display: block;
            width: 50%;
            padding: .375rem .75rem;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }

        .text-danger{
            color: red;
        }

        .text-success{
            color: green;
        }

        .mt-5{
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="card center">
        <h2>Login</h2>
        <form action="<?= base_url('auth/index'); ?>" method="post">			
		<table>
            <div class="form-group">
                <label for="username">Username :</label>
                <input name="username" id="username" type="text" class="form-data" required>
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input name="password" id="password" type="password" class="form-data" required>
            </div>
            <input type="submit" name="submit" value="Login" class="btn btn-primary mb-2"/>
		</table>
    </form>
    <div class="mt-5">
        <a href="<?php echo base_url('auth/register') ?>">Register here!</a>
    </div>
    </div>
</body>
</html>