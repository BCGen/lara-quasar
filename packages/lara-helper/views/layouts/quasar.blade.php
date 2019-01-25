@app
    @section('content')
        <div id="app">
            {{ $slot }}
        </div>
    @endsection

    @push('css_cdn')
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet" type="text/css">
        <!-- Fontawesome -->
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
        <!-- Ionicons-->
        <link href="https://cdn.jsdelivr.net/npm/ionicons@^4.0.0/dist/css/ionicons.min.css" rel="stylesheet">
        <!-- MDI -->
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@^2.0.0/css/materialdesignicons.min.css" rel="stylesheet">
        <!-- Animations -->
        <link href="https://cdn.jsdelivr.net/npm/animate.css@^3.5.2/animate.min.css" rel="stylesheet">
        <!-- Quasar Css -->
        <link href="https://cdn.jsdelivr.net/npm/quasar-framework@0.17.8/dist/umd/quasar.mat.min.css" rel="stylesheet" type="text/css">
    @endpush

    @push('js_cdn')
        <!-- IE Support -->
        <script src="https://cdn.jsdelivr.net/npm/quasar-framework@0.17.8/dist/umd/quasar.ie.polyfills.umd.min.js"></script>
        <!-- Vue -->
        <script src="https://cdn.jsdelivr.net/npm/vue@latest/dist/vue.min.js"></script>
        <!-- Quasar Js -->
        <script src="https://cdn.jsdelivr.net/npm/quasar-framework@0.17.8/dist/umd/quasar.mat.umd.min.js"></script>
        <!-- I18n -->
        <script src="https://cdn.jsdelivr.net/npm/quasar-framework@0.17.8/dist/umd/i18n.pt-br.umd.min.js"></script>
        <!-- Fontawesome -->
        <script src="https://cdn.jsdelivr.net/npm/quasar-framework@0.17.8/dist/umd/icons.fontawesome.umd.min.js"></script>
    @endpush

    @section('js')
        <script src="{{ mix('js/app.js') }}"></script>
    @show
@endapp
