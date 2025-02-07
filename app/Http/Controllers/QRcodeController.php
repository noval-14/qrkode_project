<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function index(Request $request)
    {
        $text = $request->get('text', 'Default Text'); 
        $size = (int) $request->get('size', 200); 

        // Generate the QR code
        try {
            $qrCode = QrCode::size($size)->generate($text); 
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to generate QR Code. Please try again.');
        }

        // Pass the QR code to the view for rendering
        return view('qrcode.index', compact('qrCode'));
    }
}
