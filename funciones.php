<?php


    function get_productos() {
        $p[] = array(
            "id"        => 1,
            "imagen"    => "img/big-mac.png",
            "nombre"    => "Big Mac",
            "valor"     => 5.99,
            "cantidad"  => 1,
            "activo"    => false
        );
        $p[] = array(
            "id"        => 2,
            "imagen"    => "img/mc-chicken.png",
            "nombre"    => "Mc Chicken",
            "valor"     => 4.99,
            "cantidad"  => 1,
            "activo"    => false
        );
        $p[] = array(
            "id"        => 3,
            "imagen"    => "img/double-cb.png",
            "nombre"    => "Double Cheese Burger",
            "valor"     => 2.99,
            "cantidad"  => 1,
            "activo"    => false
        );
        $p[] = array(
            "id"        => 4,
            "imagen"    => "img/fries.png",
            "nombre"    => "Fries",
            "valor"     => 2.99,
            "cantidad"  => 1,
            "activo"    => false
        );
        $p[] = array(
            "id"        => 5,
            "imagen"    => "img/nuggets.png",
            "nombre"    => "Mc Nuggets",
            "valor"     => 3.49,
            "cantidad"  => 1,
            "activo"    => false
        );
        $p[] = array(
            "id"        => 6,
            "imagen"    => "img/salad.png",
            "nombre"    => "Salad",
            "valor"     => 2.79,
            "cantidad"  => 1,
            "activo"    => false
        );
        $p[] = array(
            "id"        => 7,
            "imagen"    => "img/cola.png",
            "nombre"    => "Coke",
            "valor"     => 1.99,
            "cantidad"  => 1,
            "activo"    => false
        );
        $p[] = array(
            "id"        => 8,
            "imagen"    => "img/lipton.png",
            "nombre"    => "Ice Tea",
            "valor"     => 1.99,
            "cantidad"  => 1,
            "activo"    => false
        );
        $p[] = array(
            "id"        => 9,
            "imagen"    => "img/water.png",
            "nombre"    => "Water",
            "valor"     => 1.49,
            "cantidad"  => 1,
            "activo"    => false
        );
        return $p;
    }
?>