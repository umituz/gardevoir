<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ __('Panel') }} - {{ env('APP_NAME') }}</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<!-- Select 2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">

<!-- Custom Styles -->
<style>
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 48px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        background-color: #f8f9fa;
    }
    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }
    .navbar-brand {
        font-size: 24px;
        font-weight: bold;
    }
    .navbar {
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.04);
    }
    .container-fluid {
        padding-top: 56px; /* Height of the navbar */
    }
    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
@stack('styles')
