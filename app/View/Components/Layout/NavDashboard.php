<?php

namespace App\View\Components\Layout;

use App\Models\Cart;
use Illuminate\View\Component;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\User;
use App\Models\VipContract;


class NavDashboard extends Component
{
    public  $user;

    public  $ticket;

    public  $order;

    public  $cart;

    public  $vipContract;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = User::whereStatus('STATUS_UNCONFIRMED')->where('profile_completed', 1)->count();
        $this->ticket = Ticket::whereStatus('STATUS_NEW')->count();
        $this->order = Order::count();
        $this->cart = Cart::whereStatus('STATUS_COMPLETED')->count();
        $this->vipContract = VipContract::whereStatus('STATUS_UNCONFIRMED')->count();
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('dashboard.layouts.nav');
    }
}
