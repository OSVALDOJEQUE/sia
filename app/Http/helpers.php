<?php


  function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->permission);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }


  function getMyPermission($id)
  {
    switch ($id) {
      case 0:
        return '0';
        break;
      case 1:
        return '1';
        break;
      case 2:
        return '2';
        break;

        case 3:
            return '3';
            break;
        case 4:
            return '4';
            break;
        case 5:
            return '5';
            break;
    }
  }


?>