<!-- <?php
        # Booleans

        $isComplete = 'false';

        var_dump(is_bool($isComplete));

        if ($isComplete) {
            // do something
            echo 'success';
        } else {
            // do something else.
            echo 'fail';
        }
        ?> -->

<!-- <?php
        # Intergers

        // $x = 5;

        $x = 5_00_00_000;

        
        echo $x;
?> -->

<!-- <?php 
    # Floats

    $x = 12.5;
    
    var_dump($x);
    echo $x;
?> -->

<!-- <?php 
    # Strings
    
    $firstName = "Rao";
    $lastName = 'Raza';
    $fullname = $firstName . ' ' . $lastName ;
    echo $fullname . '<br>';

    // echo $fullname[0] . '<br>';
    // echo $fullname[-3] . '<br>';

    # Change later:
    
    // echo $fullname[1] = 'H';
    // echo $fullname;

    # Heredoc : close double code
    $text = <<< TEXT
    // Line 1
    // Line 2
    // Line 3
    <div>
        <p>Hello</p>
        <p>world</p>
    </div>
    TEXT;
    
    echo nl2br($text);
    
    # Nowdoc : sigle code.
    $text = <<< 'TEXT'
        Line 1
        Line 2
        Line 3
        TEXT;
    echo '<br/>';
    echo nl2br($text);
    
?> -->

<!-- <?php 
    # Null Constant.
    $x = null;
    var_dump($x === null);    
?> -->

<!-- <?php 
    # Arrays: 
    $code = ['java','php', 'python'];
    // echo $code[2];

    echo '<pre>';
    print_r($code);
    echo '<pre>';

    echo count($code);
    echo '<br/>';

    # Pushing the elements end of the arrays.
    
    array_push($code , 'c', 'js', 'flask');
    
    $code[] = 'C++';
    echo '<pre>';
    print_r($code);
    echo '<pre>';

    echo count($code);


?> -->
