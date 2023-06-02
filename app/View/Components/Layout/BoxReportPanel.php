<?php

namespace App\View\Components\Layout;

use App\Models\Order;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class BoxReportPanel extends Component
{
    public $warranties_count;

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
        $user = Auth::user();

        $this->warranties_count = $user->warranties()->count();

        $this->orders_count = $user->orders()->count();

        $this->orders_count = $user->orders()->count();

        $this->payments_count = $user->payments()->whereStatus('STATUS_PAID')->sum('amount');

        $this->tickets_count = $user->tickets()->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('panel.layouts.box-report');
    }
}
