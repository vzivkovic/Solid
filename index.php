<?php
require __DIR__ . '/vendor/autoload.php';

use App\classes\L\BooksList;
use App\classes\L\ElectronicBooksList;
use App\classes\PrintText;

use App\classes\I\Aviary;
use App\classes\I\Bird;
use App\classes\I\Penguin;
use App\classes\I\Parrot;

use App\classes\D\PostSender;
use App\classes\D\LinkPost;
use App\classes\D\CommentPost;


$books = new BooksList(Array('Book1', 'Book2'));
$elBooks = new ElectronicBooksList(Array('ElBook1', 'ElBook2'));

function printAll(BooksList $list)
{
    foreach ($list->getAll() as $item) {
        PrintText::print($item);
    }
}

printAll($books);
printAll($elBooks);

$aviary = new Aviary();
$bird = new Bird('owl');
$penguin = new Penguin('penguin');
$parrot = new Parrot('parrot');

$aviary->manageBird($bird);
$aviary->manageBird($penguin);
$aviary->manageBird($parrot);


$comment = new CommentPost();
$link = new LinkPost();

$commentSender = new PostSender($comment);
$linkSender = new PostSender($link);

$commentSender->sendPost();
$linkSender->sendPost();
