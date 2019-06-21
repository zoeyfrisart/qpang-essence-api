<?php

use Illuminate\Routing\Router;

/**
 * @var Router $router
 */

$router->namespace('Api')->name('api.')->group(function (Router $router) {

   $router->namespace('Channel')->prefix('channel')->name('channel.')->group(function (Router $router) {
       $router->get('/', 'Index')->name('index');
       $router->get('{channel}', 'Show')->name('show');
   });

   $router->namespace('Item')->prefix('item')->name('item.')->group(function (Router $router) {
       $router->get('/', 'Index')->name('index');
       $router->get('{item}', 'Show')->name('show');
   });

   $router->namespace('Ranking')->prefix('ranking')->name('ranking.')->group(function (Router $router) {
       $router->get('experience', 'Experience')->name('experience');
       $router->get('prestige', 'Prestige')->name('prestige');
       $router->get('playtime', 'PlayTime')->name('playtime');
   });

   $router->namespace('Player')->prefix('player')->name('player.')->group(function (Router $router) {
       $router->get('/', 'Index')->name('index');
       $router->get('{player}', 'Show')->name('show');
   });

   $router->namespace('User')->prefix('user')->name('user.')->group(function (Router $router) {
       $router->post('veraify', 'Verify')->name('verify')->middleware('key:3');
   });
});