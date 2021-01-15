<?php

class Computer 
{

    protected $components = [];

    protected $devices = [];
}


//Get the value of components 
public function getComponents()
{
    return $this->components;
}

//Get the value of devices 
public function getDevices()
{
    return $this->devices;
}

//Set the value of components
public function setComponents($components)
{
    $this->components = $components;

    return $this;
}

//Set the value of devices
public function setDevices($devices)
{
    $this->devices = $devices;

    return $this;
}


