<?php
namespace Kupman\Pattern\Behavioural\Observer\News;

class NewsManager {

    /** @var array $observers description */
    protected $observers = [];

    public function subscribe(string $email, string $news) {
        if (in_array($news, $this->news()))
            $this->addEmailToNews($email, $news);
    }
    public function unsubscribe(string $email, string $news) {
        if (in_array($news, $this->news()))
            $this->removeEmailToNews($email, $news);
    }
    protected function news() {
        return ['social', 'it'];
    }
    protected function addEmailToNews(string $email, string $news) {
        if (!isset($this->observer[$news]))
            $this->observer[$news] = [];
        $this->observer[$news][$email] = 1;
    }
    protected function removeEmailToNews(string $email, string $news) {
        if (!isset($this->observer[$news][$email]))
            unset($this->observer[$news][$email]);
    }
    protected function sendEmailToNews(string $news, string $desc) {
        foreach ($this->observer[$news] as $email=>$value)
            $this->send($email, $desc);
    }
    protected function send(string $email, string $desc) {
        output("sending: {$desc} //// to {$email}");
    }
    public function addNews(string $news, string $desc) {
        if (in_array($news, $this->news()))
            $this->sendEmailToNews($news, $desc);

    }
}
?>