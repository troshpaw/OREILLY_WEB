<?php
    require_once 'login.php';

    try
    {
        // $pdo = new PDO($attr, $user, $pass, $opts);
        $pdo = new PDO($attr, $user, $pass);
    }
        catch (PDOException $exception)
    {
        // throw new PDOException($e->getMessage(), (int)$e->getCode());
        throw new PDOException($exception->getMessage());

    }

    if (isset($_POST['delete']) && isset($_POST['isbn']))
    {
        $isbn   = get_post($pdo, 'isbn');
        $query  = "DELETE FROM classics WHERE isbn=$isbn";
        $result = $pdo->query($query);
    }

    if (isset($_POST['author'])   &&
        isset($_POST['title'])    &&
        isset($_POST['category']) &&
        isset($_POST['year'])     &&
        isset($_POST['isbn']))
    {
        $author   = get_post($pdo, 'author');
        $title    = get_post($pdo, 'title');
        $category = get_post($pdo, 'category');
        $year     = get_post($pdo, 'year');
        $isbn     = get_post($pdo, 'isbn');
    
        $query    = "INSERT INTO classics VALUES" .
            "($author, $title, $category, $year, $isbn)";
        $result = $pdo->query($query);
    }

    echo <<<_END
    <form action="sqltest.php" method="post">
        Author <input type="text" name="author" /><br />
        Title <input type="text" name="title" /><br />
        Category <input type="text" name="category" /><br />
        Year <input type="text" name="year" /><br />
        ISBN <input type="text" name="isbn" /><br />
        <input type="submit" value="ADD RECORD" />
    </form>
    _END;

    $query  = "SELECT * FROM classics";
    $result = $pdo->query($query);

    while ($row = $result->fetch())
    {
        $r0 = htmlspecialchars($row['author']);
        $r1 = htmlspecialchars($row['title']);
        $r2 = htmlspecialchars($row['category']);
        $r3 = htmlspecialchars($row['year']);
        $r4 = htmlspecialchars($row['isbn']);
    
    echo <<<_END
    <pre>
    Author   $r0
    Title    $r1
    Category $r2
    Year     $r3
    ISBN     $r4
    </pre>
    <form action='sqltest.php' method='post'>
        <input type='hidden' name='delete' value='yes'>
        <input type='hidden' name='isbn' value='$r4'>
        <input type='submit' value='DELETE RECORD'>
    </form>
    _END;
    }

    function get_post($pdo, $var)
    {
        return $pdo->quote($_POST[$var]);
    }

    $pdo = null;

    
    /*
    echo <<<_END
    <form action="sqltest.php" method="post"><pre>
    Author   <input type="text" name="author">
    Title    <input type="text" name="title">
    Category <input type="text" name="category">
    Year     <input type="text" name="year">
    ISBN     <input type="text" name="isbn">
             <input type="submit" value="ADD RECORD">
    </pre></form>
    _END;
    */
?>