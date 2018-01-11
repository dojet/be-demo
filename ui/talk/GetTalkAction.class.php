<?php
/**
 * Homepage
 *
 * Filename: GetTalkAction.class.php
 *
 * @author setimouse@gmail.com
 * @since 2015 8 26
 */
class GetTalkAction extends CometBaseAction {

    protected $talks;

    protected function tick() {
        $fromid = MRequest::get('fromid');
        $talks = DalTalk::getTalk(10, $fromid);
        if ($talks) {
            $this->talks = $talks;
            $this->flush();
        }
    }

    protected function output() {
        $maxid = max(array_keys($this->talks));
        $data = array('talks' => $this->talks, 'nextid' => $maxid);
        $this->displayJsonSuccess($data);
    }

}
