<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background: white;
        }

        h2 {
            color: grey;
            text-align: center;
            font-family: Arial;
            font-weight: normal;
            margin: 2em auto 0px;
        }

        .inner-screen {
            width: 100%;
            height: 100%;
            background: white;
            margin: 0px auto;
            padding-top: 80px;
        }

        .form {
            width: 400px;
            height: 230px;
            background: #edeff1;
            margin: 0px auto;
            padding-top: 20px;
            border-radius: 10px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
        }

        input[type="text"] {
            display: block;
            width: 309px;
            height: 35px;
            margin: 15px auto;
            background: #fff;
            border: 0px;
            padding: 5px;
            font-size: 16px;
            border: 2px solid #fff;
            transition: all 0.3s ease;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
        }

        input[type="password"] {
            display: block;
            width: 309px;
            height: 35px;
            margin: 15px auto;
            background: #fff;
            border: 0px;
            padding: 5px;
            font-size: 16px;
            border: 2px solid #fff;
            transition: all 0.3s ease;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
        }

        input[type="text"]:focus {
            border: 2px solid #1abc9d
        }

        input[type="submit"] {
            display: block;
            background: #025464;
            width: 314px;
            padding: 12px;
            cursor: pointer;
            color: #fff;
            border: 0px;
            margin: auto;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            font-size: 17px;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #E57C23
        }

        a {
            text-align: center;
            font-family: Arial;
            color: gray;
            display: block;
            margin: 15px auto;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 12px;
        }

        a:hover {
            color: #1abc9d;
        }


        ::-webkit-input-placeholder {
            color: gray;
        }

        :-moz-placeholder {
            /* Firefox 18- */
            color: gray;
        }

        ::-moz-placeholder {
            /* Firefox 19+ */
            color: gray;
        }

        :-ms-input-placeholder {
            color: gray;
        }

        .alert {
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
</head>

<body>
    <h2>Masuk Sebagai Administrator</h2><br>
    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="form">
        <?php echo form_open('auth/cek_login') ?>
        <input type="text" name="nama_admin" placeholder="Adminname" />
        <input type="password" name="password" placeholder="Password" />
        <br>
        <input type="submit" value="Login" />
        <?php echo form_close(); ?>
    </div>
</body>

</html>