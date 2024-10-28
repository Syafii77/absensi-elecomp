<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Elecomp</title>

    <!-- FontAwesome JS -->
    <script defer src="<?php echo base_url('assets/plugins/fontawesome/js/all.min.js'); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo base_url('/css/portal.css'); ?>">
      <link rel="shortcut icon" href="<?= base_url('/images/Logo1.jpeg') ?>">

    <style>
        :root {
            --body-color: #eff0f7;
            --sidebar-color: #ffffff;
            --primary-color: #130c90;
            --primary-color-light: rgba(18, 13, 144, 0.04);
            --toggle-color: var(--primary-color);
            --toggle-color-hover: var(--primary-color-light);
            --text-color: rgba(0, 0, 0, 0.74);
            --border-color: #898989;
        }

        body {
            position: relative;
        }

        .alert {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 15px 20px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size: 14px;
            line-height: 1.5;
            z-index: 999;
            width: 95%;

        }

        /* Success Alert */
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        /* Danger Alert */
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        /* Other styles... */
        .head {
            text-align: center;
            display: grid;
        }

        .title {
            font-size: 25px;
            font-weight: 700;
        }

        .subtitle {
            font-size: 15px;
            color: var(--text-color);
            margin: 0px !important;
        }

        .btn-log-in {
            background-color: #130c90;
            height: 50px;
            color: var(--sidebar-color);
            font-weight: 500;
            font-size: 14px;
            border-radius: 10px;
            border: none;
        }

        .auth-background-col {
            background-image: url('/images/hero-image2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        label {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            height: 40px;
            border-radius: 5px;
            padding: 10px 20px;
            border: 1px solid var(--border-color);
        }

        .sign-up-link {
            font-size: 14px;
            text-align: center;
            margin: 20px 0px;
        }

        .sign-up-link a {
            color: var(--primary-color);
            font-weight: 500;
            text-decoration: none;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 30px;
        }

        .password-wrapper .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .auth-background-col {
                display: none;
            }

            .auth-main-col {
                width: 100%;
                padding: 20px;
            }

            .head {
                padding-left: 0;
                padding-right: 0;
            }

            .form-group,
            .form-group input {
                width: 100%;
            }

            .sign-up-link {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body class="app app-login p-0">
    <?php if (isset($validation)): ?>
        <div class="alert alert-danger">
            <?= $validation->listErrors() ?>
        </div>
    <?php elseif (isset($eror)) : ?>
        <div class="alert alert-danger">
            <?= $eror ?>
        </div>
    <?php endif; ?>

    <div class="row g-0 app-auth-wrapper">
        <div class="col-6 col-md-7 col-lg-6 auth-main-col d-flex justify-content-center" style="padding-top:10px">
            <div>
                <div class="head" style="padding-left:175px; padding-right:175px">
                    <p class="title">Pendaftaran Absensi</p>
                    <p class="subtitle">Haiii, masukkan detail informasi dirimu.</p>
                </div>
                <div style="padding-top:20px;">
                    <form class="auth-form login-form" method="post" action="<?= base_url('signUp') ?>">
                        <?= csrf_field(); ?>
                        <div class="email mb-3">
                            <div>
                                <label class="form-label">Nama Lengkap:</label>

                            </div>
                            <div>
                                <input type="text" class="" name="Nama" value="<?= set_value('Nama') ?>" placeholder="Cth: Ronaldowati" required>
                            </div>

                        </div>
                        <div class="row g-1 ">
                            <label class="form-label">Jenis Kelamin:</label>
                            <div class="mb-2 form-check col">
                                <input type="radio" class="form-check-input px-2 py-2" id="laki-laki" name="Jenis_kelamin" value="laki-laki" <?= set_radio('Jenis_kelamin', 'laki-laki') ?>>
                                <label class="form-check-label" for="laki-laki">Laki-Laki</label>

                            </div>
                            <div class="form-check col">
                                <input type="radio" class="form-check-input px-2 py-2" id="perempuan" name="Jenis_kelamin" value="Perempuan" <?= set_radio('Jenis_kelamin', 'Perempuan') ?>>
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div><!--//form-group-->
                        <div class="row">
                            <div class="email mb-3 col-6 ">
                                <div>
                                    <label class="form-label">Asal Institusi:</label>
                                </div>
                                <div>
                                    <input type="text" class="" name="asal_institusi" value="<?= set_value('asal_institusi') ?>" placeholder="Cth: Universitas Brawijaya" required>

                                </div>

                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" placeholder="Cth: Jl. Danau Amora No.C5 E8, Sawojajar" value="<?= set_value('alamat') ?>" required>
                            </div>

                        </div>


                        <div class="row">
                            <div class="email mb-3 col-6">
                                <label class="form-label">Nomor Telepon:</label>
                                <input type="text" class="" name="Nomor_telepon" placeholder="Cth: 082272112772" value="<?= set_value('Nomor_telepon') ?>" required>

                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="" name="email" placeholder="Cth: Ronaldowati21@gmail.com" value="<?= set_value('email') ?>" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <div class=" password-wrapper">
                                <input type="password" class="" name="password" id="password" placeholder="Setidaknya 8 karakter disertai angka dan spesial karakter" value="<?= set_value('password') ?>" required>
                                <i class="fas fa-eye toggle-password"></i>
                            </div>

                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn-log-in  w-100 theme-btn mx-auto">Sign Up</button>
                        </div>
                        <div class="sign-up-link">
                            <p>Have an account? <a href="/login">Sign In</a></p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-5 col-lg-6 h-100 auth-background-col"></div>
    </div>
</body>
<script>
    const togglePassword = document.querySelector('.toggle-password');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function(e) {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>

</html>
