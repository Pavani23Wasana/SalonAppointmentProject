
<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{

    protected $firstname;
    protected $mood;

    public function askFirstname()
    {
        $this->ask('Hi, what is your name?', function($answer) {
            // Save Results
            $firstName = $answer->getText();
            $this->say('Nice to meet you '.$firstName);
            // $this->say('How Can I help You '.$firstName.' ?');
            $this->askMood();
        });
    }

    public function askMood()
{
    // ...inside the conversation object...
    $this->ask('How are you?', function($response) {
        $mood = $response->getText();
        $this->say('Cool - you said you are '.$mood);
        $this->askFaq();
        // $this->say('Cool - you said ' . $response->getText());
    });
}
    

public function askFaq()
{
    $this->ask('How Can I Help You?', [
        [
            'pattern' => 'Do you accommodate late arrivals?|About Late arrivals|Late Arrivals',
            'callback' => function () {
                $this->say('We pride ourselves on providing service to all of our clients in a timely and professional manner.In the event that are running late,you will be billed for the entire session. However as a courtesy to other clients, we can only conduct your Session within your scheduled appointment.');
                $this->askNextStep();
            }
        ],
        [
            'pattern' => 'What is your Cancellation Policy? |Cancellation Policy|Is there a Cancellation Policy',
            'callback' => function () {
                $this->say('Providing Outstanding service is the core of our business. Because Spa services are reserved specially for you, we ask that you notify us 24 hours in advance to change or cancel appointments without penalty. Without 24 hours notice we will charge a fee of 50% of the price of the cancelled service.');
            }
        ]
    ]);
}

//...inside the conversation object...
public function askNextStep()
{
    $this->ask('Shall we proceed? Say YES or NO', [
        [
            'pattern' => 'yes|yep',
            'callback' => function () {
                $this->say('Okay - we\'ll keep going');
                $this->askFaq2();
            }
        ],
        [
            'pattern' => 'nah|no|nope',
            'callback' => function () {
                $this->say('Thank you for Connecting with us. Have a Nice Day..!');
                
            }
        ]
      
    ]);
}

public function askFaq2()
{
    $this->ask('What else Do You Want to Know From me ?', [
        [
            'pattern' => 'Do you accommodate late arrivals?|About Late arrivals|Late Arrivals',
            'callback' => function () {
                $this->say('We pride ourselves on providing service to all of our clients in a timely and professional manner.In the event that are running late,you will be billed for the entire session. However as a courtesy to other clients, we can only conduct your Session within your scheduled appointment.');
                $this->askNextStep3();
            }
        ],
        [
            'pattern' => 'What is your Cancellation Policy? |Cancellation Policy|Is there a Cancellation Policy',
            'callback' => function () {
                $this->say('Providing Outstanding service is the core of our business. Because Spa services are reserved specially for you, we ask that you notify us 24 hours in advance to change or cancel appointments without penalty. Without 24 hours notice we will charge a fee of 50% of the price of the cancelled service.');
                $this->askNextStep3();
            }
        ]
    ]);
}


public function askNextStep3()
{
    $this->ask('Shall we proceed? Say YES or NO', [
        [
            'pattern' => 'yes|yep',
            'callback' => function () {
                $this->say('Okay - we\'ll keep going');
                
            }
        ],
        [
            'pattern' => 'nah|no|nope',
            'callback' => function () {
                $this->say('Thank you for Connecting with us. Have a Nice Day..!');
                
            }
        ]
      
    ]);
}

    public function run()
    {
        $this->askFirstname();
    }

   /*  public function askFirstname()
    {
        $this->ask('Hi, what is your name?', function($answer) {
            $firstName = $answer->getText();
            $this->say('Nice to meet you '.$firstName);
        });
    } */
}
