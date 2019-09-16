<?php

class User
{
  public function getNav()
  {
    global $conn;
    $query = 'select * from cars';
    $res = $conn->query($query);
    $navs = array();
    while($nav = $res->fetch_assoc()){
      $navs[] = $nav;
    }
    return $navs;
  }
  public function getSubNav()
  {
    global $conn;
    $query = 'select * from models';
    $res = $conn->query($query);
    $models = array();
    while($model = $res->fetch_assoc()){
      $models[] = $model;
    }
    return $models;
  }
  public function getMark($mark)
  {
    global $conn;
    $mark = mysqli_real_escape_string($conn, $mark);
    $query = 'select models.model_name, models.description, models.image_url, cars.name, cars.sign_img ';
    $query .= 'from models ';
    $query .= 'join cars ';
    $query .= 'on models.id_car = cars.id ';
    $query .= 'where cars.name = "'.$mark.'"';
    $res = $conn->query($query);
    $marks = array();
    while($mark = $res->fetch_assoc()){
      $marks[] = $mark;
    }
    return $marks;
  }
  public function getModel($model)
  {
    global $conn;
    $mark = mysqli_real_escape_string($conn, $model);
    $query = 'select * from models where model_name = "'.$model.'"';
    $res = $conn->query($query);
    $models = array();
    while($model = $res->fetch_assoc()){
      $models[] = $model;
    }
    return $models;
  }
  public function getDescription()
  {
    global $conn;
    $query = 'select possibility.possibility, models.id as car_id ';
    $query .= 'from possibility ';
    $query .= 'join models ';
    $query .= 'where possibility.id_model = models.id';
    $res = $conn->query($query);
    $descs = array();
    while($desc = $res->fetch_assoc()){
      $descs[] = $desc;
    }
    return $descs;
  }
  public function getImages()
  {
    global $conn;
    $query = 'select image_url from models';
    $res = $conn->query($query);
    $images = array();
    while($img = $res->fetch_assoc()){
      $images[] = $img;
    }
    return $images;
  }
}
