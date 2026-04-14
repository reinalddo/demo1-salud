<?php
// Archivo de configuración y helpers para el sitio

// Teléfono para enlaces (formato para wa.me: sin +, solo código país + número)
$clinic_phone = '584241234567';

// Teléfono para mostrar en el sitio (formato legible)
$clinic_phone_display = '+58 424 123 4567';

// Teléfono fijo / alternativo para mostrar (si aplica)
$clinic_tel_display = '0276 345 6789';

// Dirección mostrada en Contacto / Footer
$clinic_address = 'Av. Principal de Pueblo Nuevo, Edif. Salud, Piso 2. San Cristóbal, Táchira.';

// Genera un enlace a WhatsApp (texto opcional, codificado)
function wa_link($text = '') {
	global $clinic_phone;
	$base = 'https://wa.me/' . $clinic_phone;
	if ($text === '') return $base;
	return $base . '?text=' . rawurlencode($text);
}
