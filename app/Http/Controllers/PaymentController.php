<?php

namespace App\Http\Controllers;

use Braintree\Gateway;
use Illuminate\Http\Request;
use Braintree\Transaction;
use App\Http\Controllers\Controller; // Importazione della classe Controller

class PaymentController extends Controller
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY')
        ]);
    }

    // Passo 1: Generare il token client per il frontend
    public function generateClientToken()
    {
        $token = $this->gateway->clientToken()->generate();
        return response()->json(['token' => $token]);
    }

    // Passo 2: Processare il pagamento
    public function processPayment(Request $request)
    {
        $totalAmount = $request->amount; // L'importo del pagamento
        $nonce = $request->nonce; // Il nonce del pagamento

        // Effettua il pagamento
        $result = $this->gateway->transaction()->sale([
            'amount' => $totalAmount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            // Ora che il pagamento è stato completato, crea l'ordine
            $orderData = [
                'amount' => $totalAmount,
                'nonce' => $nonce,
                'cart' => $request->cart,
                'customer_name' => $request->customer_name,
                'customer_surname' => $request->customer_surname,
                'shipping_address' => $request->shipping_address,
                'total_items' => $request->total_items,
            ];

            // Chiamata al metodo saveOrder per creare l'ordine
            $orderController = new OrderController();
            return $orderController->saveOrder(new Request($orderData)); // Passa i dati dell'ordine al controller Order
        } else {
            return response()->json(['success' => false, 'error' => $result->message]);
        }
    }

}
