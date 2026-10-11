<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
           
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">

                <h3>Listado de Productos</h3>
                <br><br>
                <table border="1" >
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Precio</th>
                    </tr>
                    
                        @if (count($productos) < 1 )
                        <tr>
                            <td colspan="6">No existen productos registrados</td>
                        </tr>
                        @elseif (count($productos) >= 1 )
                            @foreach ($productos as $i => $producto)
                            <tr>
                              <td>{{ $producto->id }}</td>
                              <td>{{ $producto->name }}</td>
                              <td>{{ $producto->description }}</td>
                              <td>{{ $producto->brand }}</td>
                              <td>{{ $producto->category }}</td>
                              <td>{{ $producto->price }}</td>
                            </tr>

                            @endforeach
                        @endif
                       
                        

                </table>


                <br><br>
                <h2>Adicionar Producto</h2>
                  <form action="{{ url('/producto') }}" method="POST">
                    @csrf

                    <label for="name">Nombre del producto:</label>
                    <input type="text" name="name" id="name" required>
                     <br><br>
                    <label for="description">descripcion del producto:</label>
                    <input type="text" name="description" id="description" required>
                     <br><br>
                    <label for="category">Categoria del producto:</label>
                    <input type="text" name="category" id="category" required>
                     <br><br>
                    <label for="brand">Marca del producto:</label>
                    <input type="text" name="brand" id="brand" required>

                    <br><br>

                    <label for="price">Precio:</label>
                    <input type="number" name="price" id="price" step="0.01" required>

                    <br><br>

                    <button type="submit">Guardar producto</button>
                </form>

            </main>
        </div>

    </body>
</html>
