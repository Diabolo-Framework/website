<?php
namespace X\Module\DiaboloWeb\Action;
use X\Service\XAction\Handler\WebPageAction;
class Index extends WebPageAction {
    /**
     * {@inheritDoc}
     * @see \X\Service\XAction\Util\Action::runAction()
     */
    protected function runAction() {
        $this->title = 'Diabolo - Yet Another PHP Framework';
        $this->layout = 'FullWidth';
        
        $this->addParticle('Index');
        $this->display();
    }
}