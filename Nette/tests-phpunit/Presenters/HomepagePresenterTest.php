<?php

namespace PHPUnit\Presenters;

use App\Presenters\HomepagePresenter;
use Wavevision\NetteTests\Runners\PresenterRequest;
use Wavevision\NetteTests\TestCases\PresenterTestCase;

class HomepagePresenterTest extends PresenterTestCase
{
    public function testDefaultRender() : void
    {
        $presenterResponse = $this->runPresenter(new PresenterRequest(HomepagePresenter::class));

        $content = $this->extractTextResponseContent($presenterResponse);
        $this->assertStringContainsString('Congratulations', $content);
    }
}