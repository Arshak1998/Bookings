<?php


namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::paginate(10); // Пагинация
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'anun' => 'required|string|max:255',
            'azganun' => 'required|string|max:255',
            'email' => 'required|email|unique:bookings,email',
            'age' => 'required|integer|min:1|max:120',
            'phone' => 'required|string|max:15|unique:bookings,phone',
        ]);

        Booking::create($request->all());
        return redirect()->route('bookings.index')->with('success', 'Бронирование успешно создано.');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'anun' => 'required|string|max:255',
            'azganun' => 'required|string|max:255',
            'email' => 'required|email|unique:bookings,email,' . $booking->id,
            'age' => 'required|integer|min:1|max:120',
            'phone' => 'required|string|max:15|unique:bookings,phone,' . $booking->id,
        ]);

        $booking->update($request->validated());
        return redirect()->route('bookings.index')->with('success', 'Бронирование успешно обновлено.');
    }

    public function destroy(Booking $booking)
    {
        try {
            $booking->delete();
            return redirect()->route('bookings.index')->with('success', 'Бронирование успешно удалено.');
        } catch (\Exception $e) {
            return redirect()->route('bookings.index')->with('error', 'Ошибка при удалении бронирования.');
        }
    }
}
