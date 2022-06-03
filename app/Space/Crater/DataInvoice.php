<?php

namespace App\Space\Crater;

use App\Dictionaries\AppDomain;
use App\Models\Crm\CompanySetting;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Crm\Invoice;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class DataInvoice
{

    /*
     * Get active invoice
     * Case User login
     * Case User not login
     * @created 2021/11/01
     * */
    public static function getActiveInvoice($type = 1, $user = null, $app_domain = AppDomain::FRUIT_STORE)
    {
        //Todo check user is login
        //Case user is not login
        if ($user) {

        }
        if ($user == false) {
            $keyName = 'str1';
            $keyCookieGuess = Cookie::get($keyName);
            $userByCookie = User::query()
                ->where('key_cookie', $keyCookieGuess)
                ->first();

            if ($userByCookie) {
                $user = $userByCookie;
            }
        }

        $idUser = $user ? $user->id : null;

        $idInvoice = 1;
        $companyId = 1;
        /** @var Invoice $invoice */
        $invoice = Invoice::query()
            //->where('id', $idInvoice)
            ->where('creator_id', $idUser)
            ->where('status', Invoice::STATUS_DRAFT)
            ->first();
        //Create new invoice
        if ($invoice == false) {
            //abort(404);
            $invoiceModel = DataInvoice::inititalNewInvoice($idUser, $companyId, $app_domain);

            $invoice = $invoiceModel;
        }
        //Check empty hash
        if (empty($invoice->unique_hash)) {
            $invoice->unique_hash = Str::random(60);
            $invoice->save();
        }

        return $invoice;
    }

    /*
     *
     * */
    public static function inititalNewInvoice($idUser, $companyId, $app_domain = AppDomain::FRUIT_STORE)
    {
        $invoice_prefix = CompanySetting::getSetting(
            'invoice_prefix',
            $companyId
        );

        $date = Carbon::now();
        $data['invoice_number'] = $invoice_prefix . "-" . Invoice::getNextInvoiceNumber($invoice_prefix);
        $data['creator_id'] = $idUser;
        $data['user_id'] = $idUser;
        $data['domain_id'] = $app_domain;
        $data['template_name'] = 'invoice1';
        $data['status'] = Invoice::STATUS_DRAFT;
        $data['company_id'] = $companyId;
        $data['paid_status'] = Invoice::STATUS_UNPAID;
        $data['tax_per_item'] = CompanySetting::getSetting('tax_per_item', $companyId) ?? 'NO ';
        $data['discount_per_item'] = CompanySetting::getSetting('discount_per_item', $companyId) ?? 'NO';
        $data['sub_total'] = 0;
        $data['total'] = 0;
        $data['tax'] = 0;
        $data['due_amount'] = 0;
        $data['invoice_date'] = $date->format('Y-m-d');
        $data['due_date'] = $date->format('Y-m-d');

        /*if ($request->has('invoiceSend')) {
            $data['status'] = Invoice::STATUS_SENT;
        }*/

        $invoiceModel = Invoice::create($data);

        //$invoiceModel->unique_hash = Hashids::connection(Invoice::class)->encode($invoiceModel->id);
        $invoiceModel->unique_hash = Str::random(60);
        //$invoiceModel->save();


        return $invoiceModel;
    }
}
