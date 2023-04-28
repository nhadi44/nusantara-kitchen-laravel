<?php

/*
 * This file is part of Your Project.
 *
 * (c) Hadi Nurhidayat <hadinurhidayat97@hotmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */


namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($modalId, $modalTitle, $modalSize, $modalBg,)
    {
        $this->modalId = $modalId;
        $this->modalTitle = $modalTitle;
        $this->modalSize = $modalSize;
        $this->modalBg = $modalBg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-component', [
            'modalId' => $this->modalId,
            'modalTitle' => $this->modalTitle,
            'modalSize' => $this->modalSize,
            'modalBg' => $this->modalBg,
        ]);
    }
}
