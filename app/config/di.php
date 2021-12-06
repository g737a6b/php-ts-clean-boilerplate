<?php

use Symfony\Component\DependencyInjection\Reference;
use R2Template\R2Template;

App::getContainerBuilder()->setParameter("template.path", __DIR__ . "/../template");
App::getContainerBuilder()->register("template", R2Template::class)
    ->addArgument("%template.path%");

App::getContainerBuilder()->register(App\Presenter\SampleGreetInterface::class, App\Presenter\SampleGreet::class)
    ->addArgument(new Reference("template"));

App::getContainerBuilder()
    ->register(App\UseCase\SampleInterface::class, App\UseCase\Sample::class)
    ->addArgument(new Reference(App\Presenter\SampleGreetInterface::class));
