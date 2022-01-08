<?php

use Symfony\Component\DependencyInjection\Reference;
use R2Template\R2Template;

// Presenter

App::getContainerBuilder()->setParameter("template.path", __DIR__ . "/../template");
App::getContainerBuilder()->register("template", R2Template::class)
    ->addArgument("%template.path%");

App::getContainerBuilder()->register(App\Presenter\SampleGreetInterface::class, App\Presenter\SampleGreet::class)
    ->addArgument(new Reference("template"));

// UseCase

App::getContainerBuilder()
    ->register(App\UseCase\SampleInterface::class, App\UseCase\Sample::class)
    ->addArgument(new Reference(App\Presenter\SampleGreetInterface::class));

// Job

App::getContainerBuilder()
    ->register("App\\Job\\SampleJob", App\Job\SampleJob::class)
    ->addArgument(new Reference(App\UseCase\SampleInterface::class));
