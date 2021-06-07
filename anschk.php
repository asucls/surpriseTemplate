<?php

    $packet = $_POST['packet'];
    $realpacket = json_decode($packet);

    $menuIndex = $realpacket->menuIndex;
    $ans = $realpacket->ans;

    switch ($menuIndex) {
        case '0':
            if ($ans == 'a1') {

                $obj = new \stdClass();
                $obj->contentType = 'text';
                $obj->content = 'clue/aftermsg';

                $result = json_encode($obj);

                echo $result;

                // Demonstration of how $result object looks
                // $result = "{'type': 'text', 'content': 'Any random text to display once correct ans is given by the user'}";
                // $result = "{'type': 'link', 'content': 'www.yotube.com'}";

            } else {
                echo "Incorrect Answer";
            }
            break;
        case '1':
            if ($ans == 'a2') {

                $obj = new \stdClass();
                $obj->contentType = 'text';
                $obj->content = 'clue/aftermsg';

                $result = json_encode($obj);

                echo $result;

            } else {
                echo "Incorrect Answer 2";
            }
            break;
        case '2':
            if ($ans == 'a3') {

                $obj = new \stdClass();
                $obj->contentType = 'text';
                $obj->content = 'clue/aftermsg';

                $result = json_encode($obj);

                echo $result;
                
            } else {
                echo "Incorrect Answer 3";
            }
            break;
        case '3':
            if ($ans == 'a4') {
                
                $obj = new \stdClass();
                $obj->contentType = 'text';
                $obj->content = 'clue/aftermsg';

                $result = json_encode($obj);

                echo $result;

            } else {
                echo "Incorrect Answer 4";
            }
            break;
        case '4':
            if ($ans == 'a5') {

                $obj = new \stdClass();
                $obj->contentType = 'text';
                $obj->content = 'clue/aftermsg';

                $result = json_encode($obj);

                echo $result;
            } else {
                echo "Incorrect Answer 5";
            }
            break;
        case '5':
            if ($ans == 'a6') {

                $obj = new \stdClass();
                $obj->contentType = 'text';
                $obj->content = 'clue/aftermsg';

                $result = json_encode($obj);

                echo $result;
            } else {
                echo "Incorrect Answer 6";
            }
            break;
        case '6':
            if ($ans == 'a7') {
                
                $obj = new \stdClass();
                $obj->contentType = 'link';
                $obj->content = 'https://www.youtube.com/embed/';

                $result = json_encode($obj);

                echo $result;

            } else {
                echo "Incorrect Answer 7";
            }
            break;
        case '5':
            if ($ans == 'a8') {

                $obj = new \stdClass();
                $obj->contentType = 'text';
                $obj->content = 'clue/aftermsg';

                $result = json_encode($obj);

                echo $result;
            } else {
                echo "Incorrect Answer 8";
            }
            break;
        case '5':
            if ($ans == 'a9') {

                $obj = new \stdClass();
                $obj->contentType = 'text';
                $obj->content = 'clue/aftermsg';

                $result = json_encode($obj);

                echo $result;
            } else {
                echo "Incorrect Answer 9";
            }
            break;
    }
?>