<!DOCTYPE html>
<html>
<head>
  <title>Vuetify Parallax Starter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <div id="app">
            <app></app>
        </div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>