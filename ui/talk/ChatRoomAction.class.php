<?php
/**
 * Homepage
 *
 * Filename: ChatRoomAction.class.php
 *
 * @author setimouse@gmail.com
 * @since 2015 8 26
 */
class ChatRoomAction extends XBaseAction {

    public function execute() {
        $this->displayTemplate('chatroom.tpl.php');
    }

}
