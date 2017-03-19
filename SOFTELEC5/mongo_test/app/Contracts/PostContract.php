<?php namespace App\Contracts;

interface PostContract{
  public function fetchAll();

  public function fetch($id);

  public function getPostViews($id);

  public function getViews();

}


