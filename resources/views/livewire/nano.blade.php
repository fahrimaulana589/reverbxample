<?php

use function Livewire\Volt\{state,on};

$hello = function () {
    \App\Events\SendMessage::dispatch('hello world');
};

state(['message' => '']);

on(['echo:message,SendMessage' => function ($event) {
    $this->message = $event['message'];
}])

?>

<div>
    {{$message}}
    <br>
    <button wire:click="hello">+</button>
</div>
