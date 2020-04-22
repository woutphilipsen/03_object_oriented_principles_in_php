<?php

// think of an interface as a class without behavior
interface Newsletter
{
    // we are only defining the contract here there is no body allowed 
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribing With Campaign Monitor.');
    }
}

// by implements you replace a handshake by a formal contract
class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribing With Drip.');
    }   
}

class NewsletterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'philipsenwout@outlook.be';

        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionsController();

$controller->store(new CampaignMonitor());
// $controller->store(new Drip());