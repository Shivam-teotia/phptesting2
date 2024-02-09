<?php
class Item
{
    protected function getID()
    {
        return rand();
    }
    private function getToken()
    {
        return uniqid();
    }
    public function getDescription()
    {
        return $this->getID() . $this->getToken();
    }
}