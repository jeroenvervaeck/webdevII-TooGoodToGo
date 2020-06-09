<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\Newsletter\NewsletterFacade as Newsletter;
use Mollie\Laravel\Facades\Mollie;

class PageController extends Controller
{
    // HOME
    public function home() {
        $h1 = 'Help in the fight against food waste and focus more on sustainability!';
        $h2 = 'What is food waste?';
        $paragraf = 'Food is lost and wasted throughout the entire production and consumption chain. This is not only a pity for the end product but also for the necessary raw materials. All the water, the necessary farmland, labour and transport needed to produce that food also has harmful consequences. Waste, for example, is responsible for 8% of global CO2 emissions. And that is sin and bad news for our planet.';

        return view('pages.home', [
            'h1' => $h1,
            'h2' => $h2,
            'paragraf' => $paragraf,
        ]);
    }

    // ABOUT
    public function about() {
        $h1 = 'About';
        $h2 = 'We are Too Good To Go and we fight food waste!';
        $paragraf = 'We are a cozy gang of food heroes who believe that everyone can make a difference for our planet in their own way. Read it here and take part in our mission!';

        return view('pages.about', [
            'h1' => $h1,
            'h2' => $h2,
            'paragraf' => $paragraf,
        ]);
    }

    // MAILING
    public function contact() {
        return view('pages.contact');
    }

    public function postContact(Request $r) {

        $data = [
            'name' => $r->name,
            'email' => $r->email,
            'subject' => $r->subject,
            'content' => $r->content,
        ];

        Mail::send('mails.contact', $data, function ($message) use($r) {
            $message->sender('jeroverv@student.arteveldehs.be', 'Jeroen Vervaeck');
            $message->to('jeroverv@student.arteveldehs.be', 'Jeroen Vervaeck');
            $message->cc($r->email, $r->name);
            $message->subject($r->subject);
        });

        return view('pages.home');
    }

    // NIEUWSLETTER
    public function nieuwsletter() {
        return view('pages.nieuwsletter');
    }

    public function postNieuwsletter(Request $r) {
        Newsletter::subscribeOrUpdate($r->email);

        return view('pages.nieuwsletter');
    }

    // DONATIONS
    public function donation() {
        $donations = Donation::where('isPublic', '1')->orderBy('id', 'desc')->paginate(5);

        return view('pages.donation', [
            'donations' => $donations
        ]);
    }

    public function getSuccess() {
        dd('ed betaling is verwerkt');
    }

    public function postDonation(Request $r) {

        if($r->isPublic == null) {
            $r->isPublic = false;
        } else {
            $r->isPublic = true;
        }

        $data = [
            'firstname' => $r->firstname,
            'lastname' => $r->lastname,
            'email' => $r->email,
            'discription' => $r->discription,
            'amount' => $r->amount,
            'isPublic' => $r->isPublic,
        ];

        $newdonation = Donation::create($data);
        $donations = Donation::where('isPublic', '1')->orderBy('id', 'desc')->paginate(5);

        $cash = $r->amount . '.00';

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $cash // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Thank you for the donation -Team ToGoodToGo",
            "redirectUrl" => route('webhooks.mollie'),
            "webhookUrl" => route('donation.success'),
            "metadata" => [
                "donater" => "$r->lastname",
            ],
        ]);

        $payment = Mollie::api()->payments->get($payment->id);

        return redirect($payment->getCheckoutUrl(), 303);

    }

    public function getDetail($id) {
        $donation = Donation::find($id);

        return view('pages.donationDetail', [
            'donation' => $donation
        ]);
    }
}
