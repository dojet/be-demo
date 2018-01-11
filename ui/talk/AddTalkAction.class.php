<?php
/**
 * Homepage
 *
 * Filename: AddTalkAction.class.php
 *
 * @author setimouse@gmail.com
 * @since 2015 8 26
 */
class AddTalkAction extends XBaseAction {

    public function execute() {
        $words = MRequest::post('words');
        DalTalk::addTalk($words);
        $this->displayJsonSuccess();
    }

}
