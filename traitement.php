<?php
$regRestriction = '/^([0-9]+[-*\/+]{1})+$/';

if (isset($_POST['1'])) {
    if ($_POST['value'] == 0) {
        $calcul = 1;
    } else if ($_POST['value'] != 0) {
        $calcul = $_POST['value'] . 1;
    }
}

if (isset($_POST['2'])) {
    if ($_POST['value'] == 0) {
        $calcul = 2;
    } else if ($_POST['value'] != 0) {
        $calcul = $_POST['value'] . 2;
    }
}

if (isset($_POST['3'])) {
    if ($_POST['value'] == 0) {
        $calcul = 3;
    } else if ($_POST['value'] != 0) {
        $calcul = $_POST['value'] . 3;
    }
}

if (isset($_POST['4'])) {
    if ($_POST['value'] == 0) {
        $calcul = 4;
    } else if ($_POST['value'] != 0) {
        $calcul = $_POST['value'] . 4;
    }
}

if (isset($_POST['5'])) {
    if ($_POST['value'] == 0) {
        $calcul = 5;
    } else if ($_POST['value'] != 0) {
        $calcul = $_POST['value'] . 5;
    }
}

if (isset($_POST['6'])) {
    if ($_POST['value'] == 0) {
        $calcul = 6;
    } else if ($_POST['value'] != 0) {
        $calcul = $_POST['value'] . 6;
    }
}

if (isset($_POST['7'])) {
    if ($_POST['value'] == 0) {
        $calcul = 7;
    } else if ($_POST['value'] != 0) {
        $calcul = $_POST['value'] . 7;
    }
}

if (isset($_POST['8'])) {
    if ($_POST['value'] == 0) {
        $calcul = 8;
    } else if ($_POST['value'] != 0) {
        $calcul = $_POST['value'] . 8;
    }
}

if (isset($_POST['9'])) {
    if ($_POST['value'] == 0) {
        $calcul = 9;
    } else if ($_POST['value'] != 0) {
        $calcul = $_POST['value'] . 9;
    }
}

if (isset($_POST['0'])) {
    if ($_POST['value'] == 0) {
        $calcul = 0;
    } else if ($_POST['value'] != 0) {
        $calcul = $_POST['value'] . 0;
    }
}

if (isset($_POST['addition'])) {
    if ($_POST['value'] == 0) {
        $calcul = 0;
    } else if ($_POST['value'] != 0) {
        if (!preg_match($regRestriction, $_POST['value'])) {
            $calcul = $_POST['value'] . '+';
        } else {
            $calcul = $_POST['value'];
        }
    }
}

if (isset($_POST['substract'])) {
    if ($_POST['value'] == 0) {
        $calcul = 0;
    } else if ($_POST['value'] != 0) {
        if (!preg_match($regRestriction, $_POST['value'])) {
            $calcul = $_POST['value'] . '-';
        } else {
            $calcul = $_POST['value'];
        }
    }
}

if (isset($_POST['division'])) {
    if ($_POST['value'] == 0) {
        $calcul = 0;
    } else if ($_POST['value'] != 0) {
        if (!preg_match($regRestriction, $_POST['value'])) {
            $calcul = $_POST['value'] . '/';
        } else {
            $calcul = $_POST['value'];
        }
    }
}
if (isset($_POST['multiplier'])) {
    if ($_POST['value'] == 0) {
        $calcul = 0;
    } else if ($_POST['value'] != 0) {
        if (!preg_match($regRestriction, $_POST['value'])) {
            $calcul = $_POST['value'] . '*';
        } else {
            $calcul = $_POST['value'];
        }
    }
}

if (isset($_POST['equal'])) {
    if ($_POST['value'] != 0) {
        $calcul = $_POST['value'];
        $result = $_POST['value'];
        eval('$result = ' . $result . ';');
    }
}
?>