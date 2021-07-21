<?php
$select_carrera =$_POST['selectcarrera'];
switch ($select_carrera){
    case "1":
        header('Location: ../html/page1.php');
        break;
        case "2":
            header('Location: ../html/page2.php');
            break;
            case "3":
                header('Location: ../html/page3.php');
                break;
                case "4":
                    header('Location: ../html/page4.php');
                    break;
                    case "5":
                        header('Location: ../html/page5.php');
                        break;
                        case "6":
                            header('Location: ../html/page6.php');
                            break;
                            case "7":
                                header('Location: ../html/page7.php');
                                break;
                                case "8":
                                    header('Location: ../html/page8.php');
                                    break;
}
