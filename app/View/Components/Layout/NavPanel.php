<?php

namespace App\View\Components\Layout;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Ticket;
use Illuminate\View\Component;

class NavPanel extends Component
{
    public  $ticket_count;

    public  $order_count;

    public  $cart_count;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->ticket_count = Ticket::whereUserId(auth()->user()->id)->whereStatus('STATUS_PENDING')->count();
        $this->order_count = Order::whereUserId(auth()->user()->id)->count();
        $this->cart_count = Cart::whereUserId(auth()->user()->id)->whereIn(
            'status',
            [   'STATUS_PENDING',
                'STATUS_COMPLETED',
                'STATUS_REJECTED'
            ])->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('panel.layouts.nav');
    }
}
