<?php

use Illuminate\Routing\Router;

/**
 * @var Router $router
 */

$router->namespace('Api')->name('api.')->group(function (Router $router) {

   $router->namespace('Channel')->prefix('channel')->name('channel.')->middleware('key:1')->group(function (Router $router) {
       $router->get('/', 'Index')->name('index');
       $router->get('{channel}', 'Show')->name('show');
   });

   $router->namespace('Item')->prefix('item')->name('item.')->middleware('key:1')->group(function (Router $router) {
       $router->get('/', 'Index')->name('index');
       $router->get('{item}', 'Show')->name('show');
   });

   $router->namespace('Ranking')->prefix('ranking')->name('ranking.')->middleware('key:1')->group(function (Router $router) {
       $router->get('experience', 'Experience')->name('experience');
       $router->get('prestige', 'Prestige')->name('prestige');
       $router->get('playtime', 'PlayTime')->name('playtime');
   });

   $router->namespace('Player')->prefix('player')->name('player.')->middleware('key:1')->group(function (Router $router) {
       $router->get('/', 'Index')->name('index');
       $router->get('{player}', 'Show')->name('show');
   });

   $router->namespace('User')->prefix('user')->name('user.')->middleware('key:3')->group(function (Router $router) {
       $router->post('verify', 'Verify')->name('verify');
   });
});