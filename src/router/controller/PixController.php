<?php

namespace PHPHelp\Controllers;


// Importa o modulo do MercadoPago, use este comando no diretorio que vc deseja: composer require MercadoPago/dev-kit
use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;

class PixController {
    public static function showPix() {
        SDK::setAccessToken('SEU_TOKEN');
        $item = new Item();
        $item->title = "Produto Show";
        $item->quantity = 1;
        $item->unit_price = 19.90;

        $preference = new Preference();
        $preference->items = [$item];
        $preference->payment_methods = [
            "excluded_payment_types" => [["id" => "credit_card"]],
            "default_payment_method_id" => "pix"
        ];
        $preference->save();

        echo "<h1>Pagamento com Pix</h1>";
        echo "<iframe src='{$preference->init_point}' width='600' height='400'></iframe>";
    }
}
