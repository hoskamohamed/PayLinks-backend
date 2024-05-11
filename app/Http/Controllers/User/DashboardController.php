<?php
namespace App\Http\Controllers\User;

use Exception;
use App\Models\UserWallet;
use App\Models\Transaction;
use App\Models\User\Invoice;
use Illuminate\Http\Request;
use App\Models\Admin\Currency;
use App\Models\User\PaymentLink;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Constants\PaymentGatewayConst;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        $page_title = __('Dashboard');

        $currency           = getUserDefaultCurrency();
        $wallet             = UserWallet::with('currency')->where('user_id', Auth::id())->where('currency_id', $currency->id)->first();
        $collection_payment = Transaction::auth()->payLink()->sum('conversion_payable');
        $collection_invoice = Transaction::auth()->payInvoice()->sum('conversion_payable');
        $money_out_balance          = Transaction::auth()->Auth()->where('type', PaymentGatewayConst::TYPEMONEYOUT)->where('status', 1)->sum('request_amount');
        $total_payment_link = PaymentLink::auth()->count();
        $total_invoice      = Invoice::auth()->count();

        $transactions = Transaction::auth()->orderBy('id', 'desc')->limit(3)->get();

        $start = strtotime(date('Y-01-01'));
        $end = strtotime(date('Y-12-31'));

        $transaction_pay_link = [];
        $transaction_pay_invoice = [];
        $transaction_money_out = [];
        $transaction_month = [];

        while ($start < $end) {
            $start_date = date('Y-m', $start).'-01';
            $end_date = date('Y-m', $start).'-31';

            $pay_link = Transaction::toBase()
                                    ->where('user_id', Auth::id())
                                    ->where("type",PaymentGatewayConst::TYPEPAYLINK)
                                    ->whereDate('created_at','>=',$start_date)
                                    ->whereDate('created_at','<=',$end_date)
                                    ->sum('conversion_payable');

            $pay_invoice = Transaction::toBase()
                                        ->where('user_id', Auth::id())
                                        ->where("type",PaymentGatewayConst::TYPEINVOICE)
                                        ->whereDate('created_at','>=',$start_date)
                                        ->whereDate('created_at','<=',$end_date)
                                        ->sum('conversion_payable');

            $money_out = Transaction::toBase()
                                    ->where('user_id', Auth::id())
                                    ->where('type', PaymentGatewayConst::TYPEMONEYOUT)
                                    ->where('status', 1)
                                    ->whereDate('created_at','>=',$start_date)
                                    ->whereDate('created_at','<=',$end_date)
                                    ->sum('request_amount');


            $transaction_pay_link[]       = number_format($pay_link, 2, '.', '');
            $transaction_pay_invoice[] = number_format($pay_invoice, 2, '.', '');
            $transaction_money_out[]   = number_format($money_out, 2, '.', '');
            $transaction_month[]       = date('Y-m-d', $start);

            $start = strtotime('+1 month',$start);
        }

        $chart_one_data = [
            'transaction_pay_link'    => $transaction_pay_link,
            'transaction_pay_invoice' => $transaction_pay_invoice,
            'transaction_money_out'   => $transaction_money_out,
            'transaction_month'       => $transaction_month,
        ];

        return view('user.dashboard', compact(
            'page_title',
            'wallet',
            'collection_payment',
            'collection_invoice',
            'money_out_balance',
            'total_payment_link',
            'total_invoice',
            'chart_one_data',
            'transactions'
        ));
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.login')->with(['success' => ['Logout Successfully!']]);
    }


    public function deleteAccount(Request $request) {
        $validator = Validator::make($request->all(),[
            'target'        => 'required',
        ]);
        $validated = $validator->validate();
        $user = auth()->user();
        try{
            $user->status = 0;
            $user->save();
            Auth::logout();
            return redirect()->route('index')->with(['success' => ['Your account deleted successfully!']]);
        }catch(Exception $e) {
            return back()->with(['error' => ['Something Went Wrong! Please Try Again.']]);
        }
    }
}
