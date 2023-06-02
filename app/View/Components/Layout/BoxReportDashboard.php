<?php

namespace App\View\Components\Layout;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\View\Component;

class BoxReportDashboard extends Component
{

    public $users_count;

    public $orders_count;

    public $payments_count;

    public $tickets_count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(

    )
    {
        $this->users_count = User::whereStatus(User::STATUS_CONFIRMED)->count();

        $this->orders_count = Order::count();

        $this->payments_count = Payment::count();

        $this->tickets_count = Ticket::count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('dashboard.layouts.box-report');
    }
}
