<?php
// Datos de la gaseosa
$precioActualGaseosa = 10; // Precio actual de la gaseosa de 3 litros

// Datos de la oferta
$descuentoPorCompetencia = 5; // Porcentaje de descuento por competencia
$descuentoEspecial = 7; // Porcentaje de descuento especial
$caramelosPorGaseosa = 2; // Cantidad de caramelos por gaseosa

// Datos de la compra (ejemplo)
$cantidadGaseosas = 3; // Cantidad de gaseosas adquiridas

// Cálculos
$nuevoPrecioGaseosa = $precioActualGaseosa * (1 - ($descuentoPorCompetencia / 100));
$importeCompra = $nuevoPrecioGaseosa * $cantidadGaseosas;
$descuento = ($descuentoEspecial / 100) * $importeCompra;
$importeAPagar = $importeCompra - $descuento;
$caramelosObsequio = $caramelosPorGaseosa * $cantidadGaseosas;

// Mostrar resultados
echo "Nuevo Precio de la Gaseosa: S/. " . $nuevoPrecioGaseosa . " por 3 litros<br>";
echo "Importe de la Compra: S/. " . $importeCompra . "<br>";
echo "Descuento: S/. " . $descuento . "<br>";
echo "Importe a Pagar: S/. " . $importeAPagar . "<br>";
echo "Caramelos de Obsequio: " . $caramelosObsequio;
?>
