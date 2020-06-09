<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mollie\Laravel\Facades\Mollie;

class WebHookController extends Controller
{
    public function handle(Request $request) {
        if (! $request->has('id')) {
            $donations = Donation::where('isPublic', '1')->orderBy('id', 'desc')->paginate(5);
            return view('pages.donation', [
                'donations' => $donations,
                'update' => 'yes'
            ]);
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
           Log::info('Betaling is gelukt ' . json_decode($payment));
        } else {
           Log::warning('Mislukte betaling ' . json_decode($payment));
        }
    }
}
