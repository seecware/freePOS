<?php

class StaticContentController {
    public function renderContent($name, $data) {
        return view($name,$data);
    }
}
