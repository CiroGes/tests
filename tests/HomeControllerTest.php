<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeControllerTest extends TestCase {
  /**
   * A basic functional test example.
   *
   * @test
   * @return void
   */
  public function hello_world_founded() {
    $this->visitRoute('index')
         ->see('hello world');
  }

  /**
  * @test
  */
  public function form_is_working() {
    $text = 'este es un texto pichon';

    $this->visitRoute('form')
         ->type($text, 'text')
         ->press('Envialo Papa')
         ->see($text);
  }
}
