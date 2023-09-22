<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PaketLatihan;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function checkout(string $id)
    {
        $paket = PaketLatihan::with(['detail'])->where('id', $id)->where('status', 'aktif')->first();

        $user = User::with(['biodata'])->where('id', auth()->user()->id)->first();

        return view('frontend.pages.checkout', compact('paket', 'user'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'metode_pemb' => 'required|in:bank_bca,bank_bri,bank_bni',
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max: 2048',
            'start'       => 'required',
            'end'         => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $paket = PaketLatihan::with("detail")->find($request->input('paket_id'));

        $availablePaket = $paket->checkQuotaAvailability();
        if (!$availablePaket) {
            return response()->json(['errors' => 'quota telah habis']);
        }

        try {
            DB::beginTransaction();

            $image = $request->file('bukti_bayar');
            $fileName = 'bukti-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads/img/', $fileName, 'public');

            Transaksi::create([
                'user_id'         => $request->input('user_id'),
                'main_trainer_id' => $paket->detail[0]->main_trainer_id,
                'paket_id'        => $request->input('paket_id'),
                'metode_pemb'     => $request->input('metode_pemb'),
                'bukti_bayar'     => $fileName,
                'lap_lat'         => Transaksi::LAPANGANLATIHAN,
                'type_lapangan'   => $request->input('type_lapangan'),
                'start'           => $request->input('start'),
                'end'             => $request->input('end'),
            ]);

            $paket->update([
                'kuota' => $paket->kuota - 1,
            ]);
            
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Pesanan Anda Berhasil!',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error("error creating transaksi message: ".$e->getMessage());
            return response()->json(['errors' => 'error '.$e->getMessage()], 500);
        }

       
    }

    public function orderSuccess()
    {
        return view('frontend.pages.orderSukses');
    }
}
