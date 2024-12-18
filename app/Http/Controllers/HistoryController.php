<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        // Ambil ID user yang sedang login
        $userId = Auth::id();

        // Ambil data histori berdasarkan user yang login
        $data = History::where('id_user', $userId)->get()->map(function ($item) {
            return [
                'glucose' => $item->glucose,
                'saran' => $item->saran,
                'status' => $item->status,
                'date' => $item->created_at->format('Y-m-d'),
                'time' => $item->created_at->format('H:i:s'),
            ];
        });

        return view('dashboard', compact('data'));
    }
}
