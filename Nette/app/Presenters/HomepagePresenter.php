<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    public function __construct(private HomepageFacade $homepageFacade) {
    }
    
    public function renderDefault(): void {
        $a = rand(0,10);
        $b = rand(0,10);
        $this->template->cisloA = $a;
        $this->template->cisloB = $b;
        $this->template->soucet = $this->homepageFacade->soucet($a, $b);
    }
}
