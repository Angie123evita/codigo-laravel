
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #fff;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-around;
        }
        .navbar div {
            flex: 1;
            text-align: center;
        }
        .navbar a {
            color: blue;
            text-decoration: none;
            padding: 10px;
            display: block;
            border:1px solid black;
            margin-bottom: 30px;
        }
        .navbar .activo a {
            color: red;
            text-decoration: underline;
        }
        .navbar a:hover {
            color: darkblue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="{{ setActivo('home') }}"><a href="{{ route('home') }}">Home</a></div>
        <div class="{{ setActivo('nosotros') }}"><a href="{{ route('nosotros') }}">Nosotros</a></div>
        <div class="{{ setActivo('servicios') }}"><a href="{{ route('servicios') }}">Servicios</a></div>
        <div class="{{ setActivo('contacto') }}"><a href="{{ route('contacto') }}">Contacto</a></div>
    </div>

</body>

