<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= getenv('app.name')?></title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>/public/assets/media/logos/bessy-mini-logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/public/assets/media/logos/bessy-mini-logo.png">
    <?= $this->include('partials/cssLibraries')?>
    <?= $this->renderSection('css'); ?>
</head>

<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <?= $this->include('partials/non-admin/header')?>

            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <?= $this->include('partials/non-admin/sidebar')?>

                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                    <?= $this->renderSection('content'); ?>

                    <?= $this->include('partials/footer')?>
                </div>
            </div>
        </div>
    </div>
    
    <?= $this->include('partials/jsLibraries')?>
    <?= $this->renderSection('javascript'); ?>
</body>

</html>