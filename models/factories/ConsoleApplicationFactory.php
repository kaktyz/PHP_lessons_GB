<?php


class WebApplicationFactory implements ApplicationFactory
{
    public function createApp()
    {
       \app\base\App::getInstance();
    }

    public function createRequest()
    {
        return new \app\services\Request();
}


}