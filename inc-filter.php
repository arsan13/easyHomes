<?php 

if(isset($_SESSION['uid']))
{
    $uid = $_SESSION['uid'];

    if(empty($location) && empty($price) && empty($type))
        $sql = "SELECT * FROM users,properties WHERE uid != '$uid' && users.uid=properties.ownerId;";
    elseif(empty($location) && !empty($price) && empty($type))
        $sql = "SELECT * FROM users,properties 
        WHERE uid != '$uid' && users.uid=properties.ownerId && rent <= '$price';";
    elseif(!empty($location) && empty($price) && empty($type))
        $sql = "SELECT * FROM users,properties 
        WHERE uid != '$uid' && users.uid=properties.ownerId && city ='$location';";
    elseif(empty($location) && empty($price) && !empty($type))
        $sql = "SELECT * FROM users,properties WHERE uid != '$uid' && users.uid=properties.ownerId && type ='$type';";
    elseif(!empty($location) && !empty($price) && empty($type))
        $sql = "SELECT * FROM users,properties WHERE uid != '$uid' && users.uid=properties.ownerId
                && city ='$location' && rent <= '$price';";
    elseif(empty($location) && !empty($price) && !empty($type))
        $sql = "SELECT * FROM users,properties WHERE uid != '$uid' && users.uid=properties.ownerId
                && type ='$type' && rent <= '$price';";
    elseif(!empty($location) && empty($price) && !empty($type))
        $sql = "SELECT * FROM users,properties WHERE uid != '$uid' && users.uid=properties.ownerId
                && type ='$location' && city <= '$location';";
    else
        $sql = "SELECT * FROM users,properties WHERE uid != '$uid' && users.uid=properties.ownerId && 
        city ='$location' && rent <= '$price' && type <= '$type';";
}

else
{
    if(empty($location) && empty($price) && empty($type))
        $sql = "SELECT * FROM users,properties WHERE users.uid=properties.ownerId;";
    elseif(empty($location) && !empty($price) && empty($type))
        $sql = "SELECT * FROM users,properties 
        WHERE users.uid=properties.ownerId && rent <= '$price';";
    elseif(!empty($location) && empty($price) && empty($type))
        $sql = "SELECT * FROM users,properties 
        WHERE users.uid=properties.ownerId && city ='$location';";
    elseif(empty($location) && empty($price) && !empty($type))
        $sql = "SELECT * FROM users,properties WHERE users.uid=properties.ownerId && type ='$type';";
    elseif(!empty($location) && !empty($price) && empty($type))
        $sql = "SELECT * FROM users,properties WHERE users.uid=properties.ownerId
                && city ='$location' && rent <= '$price';";
    elseif(empty($location) && !empty($price) && !empty($type))
        $sql = "SELECT * FROM users,properties WHERE users.uid=properties.ownerId
                && type ='$type' && rent <= '$price';";
    elseif(!empty($location) && empty($price) && !empty($type))
        $sql = "SELECT * FROM users,properties WHERE users.uid=properties.ownerId
                && type ='$location' && city <= '$location';";
    else
        $sql = "SELECT * FROM users,properties WHERE users.uid=properties.ownerId && 
        city ='$location' && rent <= '$price' && type <= '$type';";
}

?>