<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sijaga | Halaman Login</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('sigali/') ?>assets\images\login.png" />
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
            height: 300px;
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
        
        #kembali {
            display: block;
            background: #fc0341;
            width:294px;
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

        #kembali:hover {
            background: #9e0229
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

        .alert-success {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
</head>

<body>
    <h2>Masuk Sebagai Administrator</h2><br>
    <div>
        <?php
        //pesan validasi error
        $errors = session()->getFlashdata('errors');
        if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php } ?>
        <?php
        if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?>
    </div>
    <div class="form">
        <?php echo form_open('auth/cek_login') ?>
        <input type="text" name="nama_admin" placeholder="Nama Administrator" />
        <input type="password" name="password" placeholder="Kata Sandi" />
        <br>
        <input type="submit" value="Login" />
        <br>
        <a href="<?= base_url('Home') ?>" id="kembali">Bukan Administrator</a>
        <?php echo form_close(); ?>
    </div>
</body>

</html>