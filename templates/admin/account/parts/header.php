<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>formr admin | <?= $title ?: 'Welcome' ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
    foreach ($css as $id => $files) {
        print_stylesheets($files, $id);
    }
    ?>

    <script>
        window.formr = <?php echo !empty($jsConfig) ? json_encode($jsConfig) : '{}' ?>;
    </script>

    <?php
    foreach ($js as $id => $files) {
        print_scripts($files, $id);
    }
    ?>
</head>

<body class="hold-transition skin-black">
    <div class="wrapper">
        <div class="content-wrapper">

            <section id="fmr-hero" data-next="yes">
                <div class="fmr-overlay"></div>
                <div class="container">
                    <div class="fmr-intro">
                        <div class="row">
                            <div class="fmr-intro-text">
                                <div class="login-form">
                                    <span class="close"><a href="<?= site_url() ?>">&times;</a></span>
                                    <div>
                                        <a href="<?= site_url() ?>" class="login-form-logo"><?= Config::get('brand') ?></a>
                                    </div>