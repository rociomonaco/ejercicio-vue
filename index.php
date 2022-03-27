<?php
    require("funciones.php");

    $productos = get_productos();
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>Self Service Order</title>
    </head>

    <body>
        
        <main id="app">
            
            <section class="items">
                <h4>Pick your items</h4>

                <!-- productos -->
                <div 
                    class="product" 
                    v-for="p, i in productos"
                    @click="activar_producto(i)"
                    :class="activar_clase_activa(i)"
                >
                    <div class="photo">
                        <img :src="p.imagen">
                    </div>
                    <div class="description">
                        <span class="name">{{ p.nombre }}</span>
                        <span class="price">{{ '$ ' + p.valor }}</span>
                        <div class="quantity-area" v-if="p.activo">
                            <button @click.stop="p.cantidad--" :disabled="p.cantidad <= 1">-</button>
                            <span class="quantity">{{ p.cantidad }}</span>
                            <button @click.stop="p.cantidad++">+</button>
                        </div>
                    </div>
                </div>
                <!-- /productos -->

            </section>

            <section class="summary" v-if="total() > 0">
                <strong>Order Details</strong>
                <table>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="p in productos">
                            <template v-if="p.activo">
                                <td>{{ p.cantidad + 'x ' + p.nombre }}</td>
                                <td>{{ '$ ' + (p.valor * p.cantidad).toFixed(2) }}</td>
                            </template>
                        </tr>
                        
                        <tr>
                            <th>Total</th>
                            <th>{{ '$ ' + total() }}</th>
                        </tr>
                    </tbody>
                </table>
            </section>
            
        </main>

        <script src="js/vue.global.js"></script>
        <script>
            var productos = <?= json_encode($productos); ?>; 
        </script>
        <script src="js/scripts.js"></script>
    </body>

</html>