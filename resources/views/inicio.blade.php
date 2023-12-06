<!-- resources/views/persons/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Personas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 8px;
        }

        button:hover {
            background-color: #45a049;
        }

        .success-message {
            color: green;
        }

        .error-message {
            color: red;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        .delete-button {
            background-color: #ff5555;
        }

        .delete-button:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>

<div>
    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/persons" method="post">
        @csrf

        <label for="id">ID:</label>
        <input type="text" name="id" required>

        <label for="name">Nombre:</label>
        <input type="text" name="name" required>

        <label for="last_name">Apellidos:</label>
        <input type="text" name="last_name" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required>

        <label for="phone">Teléfono:</label>
        <input type="text" name="phone" required>

        <label for="message">Mensaje:</label>
        <input type="text" name="message" required>

        <button type="submit">Guardar</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo Electrónico</th>
            <th>Acciones</th>
        </tr>
        <!-- Aquí puedes iterar sobre las personas y mostrarlas en la tabla -->
    </table>
</div>

</body>
</html>
